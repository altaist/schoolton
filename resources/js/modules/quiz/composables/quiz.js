import { computed, ref, toRefs } from 'vue'


const Q_TYPE_SINGLE = 0;
const Q_TYPE_MULTIPLE = 1;
const Q_TYPE_TEXT = 2;
const Q_TYPE_SORT = 3;
const Q_TYPE_TWO_LIST = 4;
const Q_TYPE_CROSS = 5;

const useQuiz = (data) => {
    const quizData = ref(data);
    const settings = quizData.value.settings || {};
    const questions = quizData.value.qs || [{}];
    const currentQuiestionIndex = ref(0);
    const resultsHistory = [];
    let answers = [];

    const getQuestions = () => {
        return questions;
    }

    const getQuizData = () => {
        return quizData;
    }

    const getSetting = (key, def) => {
        return settings[key] || def;
    }

    const questionsLength = () => {
        return questions.length;
    }

    const normalizeQuestionIndex = (index) => {
        const isLooping = getSetting('looping', false);
        if (index < 0) return isLooping ? questions.length - 1 : 0;
        if (index >= questions.length) return isLooping ? 0 : questions.length - 1;
        return index;
    }

    const getQuestion = (index) => {
        // console.log(index, normalizeQuestionIndex(index), questions);
        return questions[normalizeQuestionIndex(index)];
    }

    const getCurrentQuestion = () => getQuestion(currentQuiestionIndex.value);
    const getCurrentQuestionIndex = () => currentQuiestionIndex.value;
    const getTotalQuestionsNum = () => questions.length;

    const moveQuestionNext = () => {
        currentQuiestionIndex.value = normalizeQuestionIndex(currentQuiestionIndex.value + 1);
        return getCurrentQuestion();
    }
    const moveQuestionPrev = () => {
        currentQuiestionIndex.value = normalizeQuestionIndex(currentQuiestionIndex.value - 1);
        return getCurrentQuestion();
    }
    const moveQuestionFirst = () => {
        currentQuiestionIndex.value = 0;
        return getCurrentQuestion();
    }

    const reset = () => {
        answers = [];
        moveQuestionFirst();
    }

    const isLastQuestion = () => {
        return currentQuiestionIndex.value == questions.length - 1;
    }

    const isFirstQuestion = () => {
        return currentQuiestionIndex.value == 0;
    }

    const isOnlyForward = () => {
        return getSetting('only_forward', false);
    }

    //

    const getQuestionVariants = (question) => {
        return question.vs || [{}];
    }

    const getQuestionAnswers = (question) => {
        return question.as || [];
    }

    const getAnswers = () => answers;
    const getCurrentQuestionAnswers = () => (answers[currentQuiestionIndex.value] || []);
    const setAnswer = (answer) => {
        let questionAnswers = getCurrentQuestionAnswers();
        // console.log(currentQuiestionIndex.value, questionAnswers);
        // if(!questionAnswers) {
        //     questionAnswers = [];
        //     answers.push(questionAnswers);
        // }
        questionAnswers.push(answer.idx);
        answers[currentQuiestionIndex.value] = questionAnswers;
        console.log(answers);
    }

    const getCurrentQuestionVariants = () => {
        return getQuestionVariants(getCurrentQuestion());
    }

    const checkIsAnswerIndexCorrect = (question, index) => {
        return getQuestionAnswers(question).indexOf(index) >= 0;
    }

    const checkSortedAnswers = (questionAnswers, userQuestionAnswers) => {
        if (questionAnswers.length != userQuestionAnswers.length) {
            return 0;
        }

        for (let i = 0; i < questionAnswers.length; i++) {
            if (questionAnswers[i] != userQuestionAnswers[i]) {
                return 0;
            }
        }

        return 1;
    }

    const checkChoiceAnswers = (questionAnswers, userQuestionAnswers) => {
        if (questionAnswers.length != userQuestionAnswers.length) {
            return 0;
        }

        for (let i = 0; i < questionAnswers.length; i++) {
            if(userQuestionAnswers.indexOf(questionAnswers[i]) == -1) {
                return 0;
            }
        }

        return 1;
    }

    const checkQuestionAnswers = (question, userQuestionAnswers) => {
        const questionAnswers = getQuestionAnswers(question);
        const questionType = question.type;
        // console.log('Check question ', questionAnswers, userQuestionAnswers);

        if(questionAnswers.length == 0){
            return 1; // No question answers - all user's answers is ok
        }

        if (questionType === Q_TYPE_SORT) {
            return checkSortedAnswers(questionAnswers, userQuestionAnswers)
        }

        if (questionType === Q_TYPE_TEXT) {
            return questionAnswers[0] == userQuestionAnswers[0];
        }

        return checkChoiceAnswers(questionAnswers, userQuestionAnswers)
    }

    const calculateResult = (withLog = true) => {
        const userAnswers = getAnswers();
        const result = {
            total: questionsLength(),
            passed: 0,
            wrong: 0,
            skipped: 0,
            rating: 0,
        }

        const passedQuestions = [];
        const wrongQuestions = [];
        const skippedQuestions = [];

        // for each question
        for (let i = 0; i < userAnswers.length; i++) {
            const question = getQuestion(i);
            const questionUserAnswers = userAnswers[i] || [];
            if (questionUserAnswers.length == 0) {
                skippedQuestions.push(question);
                result.skipped++;
                continue;
            }

            const weight = 1; // вес правильно решенного вопроса
            const passed = checkQuestionAnswers(question, questionUserAnswers);
            if (passed) {
                result.passed += passed;
                result.rating += passed * weight;
                passedQuestions.push(question);
            } else {
                result.wrong += 1;
                wrongQuestions.push(question);
            }
        }

        result.isSuccess = !result.wrong;

        result.questionsLog = withLog ? { passedQuestions, wrongQuestions, skippedQuestions } : null;

        return result;
    }

    const addResultToHistory = (result) => {
        resultsHistory.push(result);
    }

    return {
        getQuizData,
        getCurrentQuestion,
        getCurrentQuestionIndex,
        getTotalQuestionsNum,
        moveQuestionNext,
        moveQuestionPrev,
        moveQuestionFirst,
        isLastQuestion,
        isFirstQuestion,
        getSetting,
        getAnswers,
        getCurrentQuestionAnswers,
        setAnswer,
        calculateResult,
        reset,
        addResultToHistory,

        resultsHistory
    }
}



export {
    useQuiz
}
