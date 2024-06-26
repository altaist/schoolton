<template>
    <QuizHeader
        @quiz:home="emit('quiz:home')"
        :current-question-index="quizManager.getCurrentQuestionIndex() + 1"
        :total-questions-num="quizManager.getTotalQuestionsNum()"/>
    <QuizQuestion
        :question="activeQuestion"
        @question:completed="onQuestionCompleted"
        @question:canceled="onQuestionCanceled">
    </QuizQuestion>
    <QuizFooter />
</template>

<script setup>
import { computed } from 'vue'
import { useQuizApp } from '../composables/quizapp'
import QuizHeader from './QuizHeader.vue';
import QuizQuestion from './QuizQuestion.vue';
import QuizFooter from './QuizFooter.vue';

const props = defineProps({
    quiz: {
        type: Object,
    },
});

const emit = defineEmits(['quiz:home', 'quiz:completed', 'question:completed'])

const quizManager = useQuizApp().getCurrentQuiz();

const activeQuestion = computed(() => {
    return quizManager.getCurrentQuestion();
});

const onQuestionCompleted = (answer) => {
    quizManager.setAnswer(answer);
    moveNextQuestion();
}
const onQuestionCanceled = (answer) => {
    moveNextQuestion();
}

const moveNextQuestion = () => {
    if(quizManager.isLastQuestion()){
        return emit('quiz:completed');
    } else{
        quizManager.moveQuestionNext();
    }
}
</script>
