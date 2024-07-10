import { ref, computed, getCurrentInstance } from 'vue'

const currentUser = ref(null)

const systemUser = {
    name: 'System',
    tgId: null
}


const useProfile = () => {
    const TWA = getCurrentInstance().appContext.config.globalProperties.TWA;
    const initUser = async () => {
        if(currentUser.value) return;

        currentUser.value = await reloadUser();


        if(currentUser.value) {
            saveToLocalStorage();
        }
        return currentUser.value;
    }

    const reloadUser = async () => {
        return getTwaUser();
    }

    const getTwaUser = () => {
        if(!TWA || !TWA.initDataUnsafe || !TWA.initDataUnsafe.user) return null;
        const user = TWA.initDataUnsafe.user;
        return {
            tgId: user.id || "",
            name: user.username || "",
            data: TWA.initDataUnsafe
        };
    }

    const getUser = () => {
        return currentUser;
    }

    const saveUserLocal = () => {

    }
    const saveToLocalStorage = () => {
        localStorage.setItem("user", JSON.stringify(currentUser.value))
    }

    const loadFromLocalStorage = () => {
        const storedValue = JSON.parse(localStorage.getItem("user"));
        if(!storedValue){
            return;
        }
        currentUser.value = storedValue;
    }

    initUser();

    return {
        getUser
    }
}

export  {
    useProfile
}


