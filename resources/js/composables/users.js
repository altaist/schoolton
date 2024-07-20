import { ref, computed, getCurrentInstance } from 'vue'
import { usePage } from '@inertiajs/vue3'
import { get, post, loading } from '@/utils/requests';

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
}

const auth = async () => {
    const userFromParam = usePage().props.auth.user;
    if (userFromParam) {
        return setUser(userFromParam);
    }

    const token = loadFromLocalStorage('auth_token') || createUserToken();
    saveToLocalStorage('auth_token', token);
    const loginUser = await autoLogin(token)
    console.log(loginUser);
    if(loginUser) {
        loginUser.token = token;
        return setUser(loginUser);
    }

    const newUser = autoRegister(token) || {};

    return setUser(newUser);
}

const createUserToken = () => {
    const twaUser = getTwaUser();
    if (twaUser && twaUser.user.id) {
        return '' + (new Date()).getTime() + twaUser.user.id
    }
    return '' + (new Date()).getTime() + Math.random() * 1000;
}

const autoLogin = async (auth_token) => {
    return await post(route('login.auto'), {
        auth_token
    });

    try {
        const result = await axios.post(route('login.auto'), {
            auth_token
        });
        if(!result.status == 200) {
            return null;
        }
        const resultData = result.data ? result.data : null;
        return resultData;
    } catch (error) {
        console.log(error);
    } finally {

    }
}
const autoRegister = async (auth_token, user_id, name) => {
    return await post(route('register.auto'), {
        auth_token,
        user_id,
        name,
    });
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
    userComputed
}


