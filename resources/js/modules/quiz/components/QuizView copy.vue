<template>
    <div v-if="currentState==0">
        <slot name="start" :quiz="quiz" :onQuizStart="onQuizStart"></slot>
    </div>
    <div v-if="currentState==1">
        <slot name="header" :quiz="quiz" :quizManager="quizManager" :onQuizHome="onQuizHome"></slot>
        <slot name="questions" :question="activeQuestion" :onQuestionCompleted="onQuestionCompleted"></slot>
        <slot name="footer"></slot>
    </div>
    <div v-if="currentState==2">
        <slot name="results" :results="results" :onQuizRepeat="onQuizRepeat" :onQuizClose="onQuizClose"></slot>
    </div>
</template>

<script setup>
import { computed, ref, toRefs } from 'vue'
import { useQuiz } from '../composables/quiz'


const props = defineProps({
    quiz: {
        type: Object,
    },
});

const emit = defineEmits(['quiz:completed', 'quiz:canceled']);

const quizManager = useQuiz(props.quiz);
const results = ref(null);
const currentState = ref(0);

quizManager.moveQuestionPrev();
quizManager.moveQuestionPrev();

console.log(quizManager.getCurrentQuestion());

const questions = computed(() => {
    return props.quizData.qs
});

const activeQuestion = computed(() => {
    return quizManager.getCurrentQuestion();
});

const onQuizStart = () => {
    currentState.value = 1;
}

const onQuizClose = () => {
    onQuizHome();
    emit('quiz:completed');
}

const onQuizRepeat = () => {
    quizManager.reset();
    currentState.value = 1;
}

const onQuizHome = () => {
    quizManager.reset();
    currentState.value = 0;
}

const onQuestionCompleted = (answer) => {
    quizManager.setAnswer(answer);
    if(quizManager.isLastQuestion()){
        return onQuizCompleted();
    } else{
        quizManager.moveQuestionNext();
    }
}

const onQuizCompleted = () => {
    results.value = quizManager.calculateResult();
    currentState.value = 2;
    console.log(results.value);
    return emit('quiz:completed', results.value);
}

</script>
