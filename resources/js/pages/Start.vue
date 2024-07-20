<template>
    <div class="q-ma-xl">
        <div class="q-my-lg text-h5">SchoolTon Service</div>
        <div><User/></div>
        <block text-color="text-white" margin="q-my-sm" border="" rounded="rounded-1">
            <div>Learn...</div>
            <div>Earn...</div>
            <div>Create your expert business!</div>
        </block>
        <div class="q-my-lg">
            <Button label="Start" @click="onStartClick" color="negative"></Button>
        </div>




    </div>
</template>

<script setup>
import { computed, ref } from 'vue'
import Button from '@shared/Button.vue';
import Block from '@shared/Block.vue';
import PageTitle from '@shared/PageTitle.vue';
import Home from '@/components/home/Home.vue'
import Market from '@/components/market/Market.vue'
import Courses from '@/components/edu/Courses.vue'
import Quiz from './Main.vue'
import User from '@/components/user/User.vue';

const onStartClick = (m) => {
    window.location = route('main');
}
</script>
