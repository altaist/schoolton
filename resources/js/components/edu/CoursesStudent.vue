<template>
    <div class="text-h6">Courses</div>

    <div>
        <CourseList :items="courses" @course:joined="onClick"></CourseList>
    </div>
</template>
<script setup>
import { ref, toRefs } from 'vue'
import Block from '@shared/Block.vue';
import Button from '@shared/Button.vue';
import LProgress from '@shared/LProgress.vue';

import CourseList from './CourseList.vue'

defineProps({
    visibility: {
        type: Boolean,
        default: false
    },
    mode: {
        type: String,
        default: 'student'
    },
});

const courses = [
    {id: 1, title: 'Ton basic', icon: 'fa-brands fa-telegram', price: 20},
    {id: 2, title: 'Integrals', icon: 'fa-solid fa-wave-square', price: 20},
]

const onClick = (data) => {
    alert('Joined');
}
    </script>
