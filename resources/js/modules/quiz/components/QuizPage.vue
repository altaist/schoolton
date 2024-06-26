<template>
    <div class="q-pa-lg">
        <div v-if="currentState == 0">
            <QuizStart :quiz="quizData" @quiz:start="onQuizStart" />
        </div>
        <div v-if="currentState == 1">
            <QuizView @quiz:home="onQuizHome" @quiz:completed="onQuizCompleted" />
        </div>
        <div v-if="currentState == 2">
            <QuizResults :results="results" @quiz:repeat="onQuizRepeat" @quiz:close="onQuizClose" />
        </div>

    </div>
</template>

<script setup>
import { computed, ref, toRefs } from 'vue'
import { useQuizApp } from '../composables/quizapp'
import QuizStart from './QuizStart.vue'
import QuizView from './QuizView.vue'
import QuizResults from './QuizResults.vue'

const props = defineProps({
    template: {
        type: String,
        default: "default"
    },
});

const emit = defineEmits(['quiz:completed', 'quiz:canceled']);

const quizManager = useQuizApp().getCurrentQuiz();
const results = ref(null);
const currentState = ref(0);


const quizData = quizManager.getQuizData();

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

const onQuizCompleted = () => {
    results.value = quizManager.calculateResult();
    currentState.value = 2;
    console.log(results.value);
    return emit('quiz:completed', results.value);
}

</script>
