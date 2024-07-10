<template>
    <div class="fit">
        <div v-if="!loading">
            <QuizMain @quiz:completed="onQuizCompleted"></QuizMain>
        </div>
        <div v-else>
            Quiz loading...
        </div>
    </div>
</template>

<script setup>
import { ref, toRefs } from 'vue'
import QuizMain from '@/modules/quiz/components/QuizMain.vue';
import { useQuizApp } from '@/modules/quiz/composables/quizapp'
import { useWallet } from '@/composables/wallet';

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

const { updateBalance } = useWallet();
const loading = ref(false);
const loadQuiz = async () => {
    const quizApp = useQuizApp();
    loading.value = true;
    const quiz = await quizApp.loadQuiz();
    console.log(quiz)
    loading.value = false;
    return quiz;
}

const onQuizCompleted = () => {
    // onQuizHome();
    emit('quiz:completed');
    window.location = route('main');
}

const quizManager = loadQuiz();

</script>
