import { computed, ref } from 'vue'
import { systemUser } from './users'

const STDNT = 'stdnt';
const EXPRT = 'exprt';

const COURSE = 'course';
const NFT = 'nft';

const currentWallet = ref({
    'stdnt': 100,
    'exprt': 1,

});

const saveToLocalStorage = () => {
    localStorage.setItem("wallet", JSON.stringify(currentWallet.value))
}

const loadFromLocalStorage = () => {
    const storedValue = JSON.parse(localStorage.getItem("wallet"));
    if(!storedValue){
        return;
    }
    currentWallet.value = storedValue;
}


const useWallet = (cur=STDNT) => {
    const currency = cur;
    loadFromLocalStorage();


    const getWallet = () => currentWallet;
    const getBalance = (currency) => getWallet().value[currency] || 0;
    const balanceComputed = computed(() => "" + getBalance(currency));

    const updateBalance = (val, currency = STDNT) => {
        const wallet = getWallet();
        wallet.value[currency] += val;
        saveToLocalStorage();
    }

    const buy = async (price, currency, user, userFrom, itemId, itemType) => {
        const wallet = getWallet();
        const currentBallance = getBalance(currency);

        if(currentBallance<price) {
            return null;
        }

        updateBalance(-price, currency);
        return
    }

    const buyCourse = (user, price, courseId) => {
        return buy(price, STDNT, user, null, courseId, COURSE);
    }

    const sell = async (user, userTo, itemId, itemType, price, currency) => {
    }

    return {
        getWallet,
        getBalance,
        updateBalance,
        buyCourse,
        balanceComputed
    }
}

export {
    useWallet,
    STDNT,
    EXPRT
}
