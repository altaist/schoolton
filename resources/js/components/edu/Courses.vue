<template>
    <div class="row">
        <div class="col">
            <PageTitle title="Courses" titleRight="balanceComputed" />
        </div>
        <div class="col text-right">
            <Button icon="fa-solid fa-wallet" :label="balanceComputed"  :color="getBgColor('')"></Button>
        </div>

    </div>
    <div class="q-my-md" v-if="userCourses.length>0">
        <div class="q-my-md">My courses</div>
        <CourseList :items="userCourses" :action-join="false"></CourseList>
    </div>
    <div class="q-my-md" v-if="courses.length>0">
        <div class="q-my-md">Market</div>
        <CourseList :items="courses" @course:joined="onClick"></CourseList>
    </div>
</template>
<script setup>
import { ref, computed } from 'vue'
import useCourses from '@/composables/courses';
import useUi from '@/composables/ui';
import { useWallet } from '@/composables/wallet';

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
    getCurrency,
    getBgColor
} = useUi();

const userCourses = ref([]);
// console.log(getCourses(getMode()).filter(item => undefined == userCourses.value.find((i) => i.id == item.id)));


const { getWallet, getBalance, buyCourse, balanceComputed} = useWallet(getCurrency());

const courses = computed(() => getCourses(getMode()).filter(item => undefined == userCourses.value.find((i) => i.id == item.id)));
// const courses = computed(() => getCourses(getMode()).filter(item => userCourses.value.find(item)==-1));

const onClick = (course) => {
    buyCourse({}, course.price, course.id)
    userCourses.value.push(course)
}
</script>
