import { computed, ref } from 'vue'

const currentMode = ref('student');

const useUi = () => {

    const getMode = () => currentMode.value;
    const changeMode = (m) => {
        currentMode.value = m;
    }

    const getBgColor = (prefix = '') => {
        return currentMode.value === 'expert' ? prefix + 'negative' : prefix + 'primary';
    }

    return {
        getMode,
        changeMode,
        getBgColor
    }
}

export default useUi
