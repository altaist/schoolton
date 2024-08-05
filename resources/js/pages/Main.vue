<template>
    <div class="fit">
        <q-tab-panels v-model="screen" class="q-pa-none" animated>
            <q-tab-panel name="quiz" >
                <PageTitle title="Quiz"/>
                <Quiz></Quiz>
            </q-tab-panel>
            <q-tab-panel name="course">
                <PageTitle title="Course"/>
            </q-tab-panel>
            <q-tab-panel name="wallet">
                <PageTitle title="Wallet"/>
            </q-tab-panel>
            <q-tab-panel name="main" class="q-pa-none">
                <q-tab-panels v-model="tab" animated>
                    <q-tab-panel name="study">
                        <Courses :mode="mode"/>
                    </q-tab-panel>
                    <q-tab-panel name="home">
                        <Home :mode="mode" @mode:changed="onModeChanged" @wallet:clicked="changeScreen('wallet')"/>
                    </q-tab-panel>
                    <q-tab-panel name="market">
                        <Market :mode="mode" />
                    </q-tab-panel>
                </q-tab-panels>
            </q-tab-panel>
        </q-tab-panels>


        <Toolbar :val="70" :options="menu" @click="onToolbarClick" :mode="mode" />
    </div>
</template>

<script setup>
import { computed, ref } from 'vue'
import Toolbar from '@shared/Toolbar.vue';
import PageTitle from '@shared/PageTitle.vue';
import Home from '@/components/schoolton/home/Home.vue'
import Market from '@/components/schoolton/market/Market.vue'
import Courses from '@/components/schoolton/edu/Courses.vue'
import Quiz from './Main.vue'




const tab = ref('home');
const mode = ref('student');
const screen = ref('main');

const menu = [
    { label: "Study", link: 'study', icon: 'fa-solid fa-graduation-cap' },
    { label: "Home", link: 'home', icon: 'fa-solid fa-lightbulb' },
    { label: "Market", link: 'market', icon: 'fa-solid fa-gift' },
]

const changeScreen = (scr) => {
    screen.value = scr;
}
const onToolbarClick = (option) => {
    screen.value = 'main';
    tab.value = option.link;
}
const onModeChanged = (m) => {
    mode.value = m;
}
</script>
