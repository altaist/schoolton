import { ref, computed, getCurrentInstance } from 'vue'
import { usePage } from '@inertiajs/vue3'
import { requestGet, requestPost, loading } from '@/utils/requests';

let currentUser = null;
const userComputed = computed(() => currentUser);

const systemUser = {
    name: 'System',
    tgId: null
}

const saveToLocalStorage = (key = 'data', data) => {
    localStorage.setItem(key, JSON.stringify(data))
}

const loadFromLocalStorage = (key = 'data') => {
    try {
        const storedValue = JSON.parse(localStorage.getItem(key));
        return storedValue;
    } catch (error) {
        return null;
    }
}

const setUser = (user) => {
    currentUser = user;
    saveToLocalStorage('user', currentUser);
    return currentUser;

    return new Promise((resolve) => {
        resolve(currentUser);
    });
}

const auth = async () => {
    const userFromParam = usePage().props.auth.user;
    console.log('User from session', userFromParam);

    if (userFromParam) {
        return setUser(userFromParam);
    }

    const token = loadFromLocalStorage('auth_token') || createUserToken();
    saveToLocalStorage('auth_token', token);
    console.log('LocalToken', token);

    const loginUser = await autoLogin(token)
    console.log('Login user', loginUser);
    if(loginUser) {
        loginUser.token = token;
        return setUser(loginUser);
    }

    const newUser = await autoRegister(token) || {};
    console.log('Registered user', newUser);

    return setUser(newUser);
}

const autoLogin = async (auth_token) => {
    return await requestPost(route('login.auto'), {
        auth_token
    });
}
const autoRegister = async (auth_token, user_id, name) => {
    const user = await requestPost(route('register.auto'), {
        auth_token,
        user_id,
        name,
    });
    return user;
}

const logout = () => {
    logoutLocal();
    return requestPost(route('logout'));
}

const logoutLocal = (removeToken = false) => {
    localStorage.removeItem('user');
    if(removeToken) {
        localStorage.removeItem('auth_token');
    }
}

const createUserToken = () => {
    const twaUser = getTwaUser();
    if (twaUser && twaUser.user.id) {
        return '' + (new Date()).getTime() + twaUser.user.id
    }
    return '' + (new Date()).getTime() + Math.random() * 1000;
}


const getTwaUser = () => {
    const TWA = getCurrentInstance().appContext.config.globalProperties.TWA;
    if (!TWA || !TWA.initDataUnsafe || !TWA.initDataUnsafe.user) return null;
    const user = TWA.initDataUnsafe.user;
    return {
        tgId: user.id || "",
        name: user.username || "",
        data: TWA.initDataUnsafe
    };
}

const useProfile123 = () => {


    const initUser = async () => {
        if (currentUser) return;

        currentUser = await reloadUser();


        if (currentUser) {
            saveToLocalStorage();
        }
        return currentUser;
    }

    const reloadUser = async () => {
        return getTwaUser();
    }


    const getUser = () => {
        return currentUser;
    }

    initUser();

    return {
        getUser
    }
}

export {
    auth,
    logout,
    logoutLocal,
    userComputed
}


