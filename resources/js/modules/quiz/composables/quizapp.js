
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

    const setQuiz = (quiz) => {
        return createLoadedQuiz(quiz);
    }

    const saveQuizResults = () => {

    }

    return {
        loadQuiz,
        setQuiz,
        getCurrentQuiz
    }

}

export {
    useQuizApp
}
