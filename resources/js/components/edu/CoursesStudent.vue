<template>
    <PageTitle title="Courses"/>


    <div>
        <CourseList :items="courses" @course:joined="onClick"></CourseList>
    </div>
</template>
<script setup>
import { ref, computed } from 'vue'
import useCourses from '@/composables/courses';
import useUi from '@/composables/ui';

import Block from '@shared/Block.vue';
import Button from '@shared/Button.vue';
import LProgress from '@shared/LProgress.vue';

import PageTitle from '@shared/PageTitle.vue';
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

const {
    getCourses
} = useCourses();

const {
    getMode,
    getBgColor
} = useUi();

const courses = computed( () => getCourses(getMode()));

const onClick = (data) => {
    alert('Joined');
}
    </script>
