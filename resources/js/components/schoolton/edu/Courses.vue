<template>
    <!--div class="row">
        <div class="col">
            <PageTitle title="Courses" titleRight="balanceComputed" />
        </div>
        <div class="col text-right">
            <Button icon="fa-solid fa-wallet" :label="balanceComputed"  :color="getBgColor('')"></Button>
        </div>

    </div-->
    <Header title="Courses" />
    <div v-if="getMode() == 'student'">
        <div class="q-my-md" v-if="userCourses.length > 0">
            <div class="q-my-md text-h6">My courses</div>
            <CourseList :items="userCourses" :action-join="false"></CourseList>
        </div>
        <div class="q-my-md" v-if="courses.length > 0">
            <div class="q-my-md text-h6">Market</div>
            <CourseList :items="courses" @course:joined="onBuyClick" @course:details="onDetailsClick"></CourseList>
        </div>
    </div>
    <div v-else>
        <div class="q-my-md" v-if="courses.length > 0">
            <div class="q-my-md text-h6">Expert Courses</div>
            <CourseList :items="courses" :action-join="false"></CourseList>
        </div>

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
import Header from '../layouts/Header.vue';
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

const { getWallet, getBalance, buyCourse, balanceComputed } = useWallet(getCurrency());

const courses = computed(() => getCourses(getMode()).filter(item => undefined == userCourses.value.find((i) => i.id == item.id)));
// const courses = computed(() => getCourses(getMode()).filter(item => userCourses.value.find(item)==-1));

const onBuyClick = (course) => {
    buyCourse({}, course.price, course.id)
    userCourses.value.push(course)
}

const onDetailsClick = (data) => {
}
</script>
