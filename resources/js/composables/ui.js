import { computed, ref } from 'vue'

const currentMode = ref('student');

const currencies = {
    student: 'stdnt',
    expert: 'exprt',

}

const useUi = () => {

    const getMode = () => currentMode.value;
    const getCurrency = () => currencies[getMode()];
    const changeMode = (m) => {
        currentMode.value = m;
    }

    const getBgColor = (prefix = '') => {
        return currentMode.value === 'expert' ? prefix + 'negative' : prefix + 'primary';
    }

    return {
        getMode,
        getCurrency,
        changeMode,
        getBgColor
    }
}

export default useUi
