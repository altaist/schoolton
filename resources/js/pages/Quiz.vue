<template>
    <div class="fit full-filled">
        <div v-if="!loading">
            <QuizPage></QuizPage>
        </div>
        <div v-else>
            Quiz loading...
        </div>
    </div>
</template>

<script setup>
import { ref, toRefs } from 'vue'
import QuizPage from '@/modules/quiz/components/QuizPage.vue';
import { useQuizApp } from '@/modules/quiz/composables/quizapp'

defineProps({
    visibility: {
        type: Boolean,
    },
    item: {
        type: Object,
    },
    items: {
        type: Array,
    },
    title: {
        type: String,
        default: ''
    },
});

const emit = defineEmits(['question:completed', 'question:canceled']);
const loading = ref(false);
const loadQuiz = async () => {
    const quizApp = useQuizApp();
    loading.value = true;
    const quiz = await quizApp.loadQuiz();
    console.log(quiz)
    loading.value = false;
    return quiz;
}

const quizManager = loadQuiz();

</script>
