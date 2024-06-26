
import { fetchQuiz } from './transport';
import { useQuiz } from './quiz';

let currentQuiz = null;

const useQuizApp = () => {

    const createLoadedQuiz = (data) => {
        currentQuiz = useQuiz(data);
        return getCurrentQuiz();
    }

    const getCurrentQuiz = () => {
        return currentQuiz;
    }

    const getUserStat = () => {

    }

    const getRating = () => {

    }

    const loadQuiz = async () => {

        const data = await fetchQuiz();
        return createLoadedQuiz(data);

    }

    const saveQuizResults = () => {

    }

    return {
        loadQuiz,
        getCurrentQuiz
    }

}

export {
    useQuizApp
}
