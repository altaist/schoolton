import { computed, ref } from 'vue'

const tmpMarkets = {
    'student': [
        {id: 1, title: '0000000', subTitle: 'Description for this NFT', icon: 'fa-brands fa-telegram', price: 20, params: [100, 100, 'Oak']},
        {id: 2, title: '0000000', subTitle: 'Description for this NFT', icon: 'fa-solid fa-wave-square', price: 35, params: [10, 50, 'Birch']},
    ],
    'expert': [
        {id: 1, title: '00000', subTitle: 'Description for this NFT', icon: 'fa-brands fa-telegram', price: 5, params: [100, 100, 'Oak']},
        {id: 2, title: '00000', subTitle: 'Description for this NFT', icon: 'fa-solid fa-wave-square', price: 12, params: ['work', 'health']},
    ],
}

const useMarkets = () => {

    const loadMarkets = async () => tmpMarkets;

    const getMarkets = (mode = 'student') => {
        console.log(tmpMarkets[mode], mode)
        return tmpMarkets[mode];
    }

    const getMarketsForStudent = (userId) => {
        return getMarkets();
    }

    const getMarketsForExpert = (userId) => {
        return getMarkets('expert');
    }

    return {
        getMarkets,
        getMarketsForExpert,
        getMarketsForStudent
    }
}

export default useMarkets
