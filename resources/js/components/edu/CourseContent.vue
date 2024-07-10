<template>
    <div class="q-my-sm">
        <div class="q-my-md text-h5">{{ course.title }}</div>
        <div class="q-my-sm" v-if="course.topics">
            <div v-for="topic, index in course.topics">
                <block >
                    <div class="q-my-sm text-h6">{{ index+1 }}. {{ topic.title }}</div>
                    <Button label="Quizes" @click="emit('click:quiz', topic.quiz)"/>
                </block>
            </div>
        </div>
    </div>
</template>
<script setup>
import { ref, toRefs } from 'vue'
import { useQuizApp } from '@/modules/quiz/composables/quizapp'
import Block from '@shared/Block.vue';
import Button from '@shared/Button.vue';

defineProps({
    course: {
        type: Object,
        default: {}
    },
});

const emit = defineEmits(['plan:completed', 'click:quiz']);

</script>
