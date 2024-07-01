<template>
    <div class="q-pa-md q-mb-lg fixed-top bg-white shadow-1">
        <div class="row q-col-gutter-md">
            <div class="col-3">
                <Button @click="emit('quiz:home')" icon="arrow_back" ></Button>
            </div>
            <div class="col-3">
                <div class="text-h6">QUIZ</div>
            </div>
            <div class="col-6 text-right">
                <b>{{ currentQuestionIndex }}</b> / {{ totalQuestionsNum }}
            </div>
        </div>
    </div>
</template>

<script setup>
import { useQuizApp } from '../composables/quizapp'
import Button from '@shared/Button.vue';

const props = defineProps({
    quiz: {
        type: Object,
    },
    currentQuestionIndex: {
        type: Number,
    },
    totalQuestionsNum: {
        type: Number,
    },
});

const emit = defineEmits(['quiz:home']);

const quizManager = useQuizApp().getCurrentQuiz()
</script>


