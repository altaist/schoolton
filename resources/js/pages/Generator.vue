<template>
    <q-tab-panels v-model="screen" class="q-pa-none" animated>
        <q-tab-panel name="quiz">
            <PageTitle title="Quiz" />
            <div>
                <QuizMain :quiz="currentQuiz" @quiz:completed="onQuizFinished"></QuizMain>
            </div>
        </q-tab-panel>
        <q-tab-panel name="course">
            <Header title="Course generator" :back-url="route('main')"/>
            <div class="q-my-lg">
                <div class="row q-col-gutter-md">
                    <div class="col-sm-12 col-lg-12">
                        <GptGenerator @gpt:completed="onContentUpdated"/>
                    </div>
                    <div class="col-sm-12 col-lg-12">
                        <CourseContent mode="full" :course="courseContent" @click:quiz="onShowQuiz" @click:content="onShowContent"></CourseContent>
                    </div>
                </div>
            </div>
        </q-tab-panel>
    </q-tab-panels>
    <div class="q-pa-sm">

        <q-dialog v-model="dialogContent" full-width>
            <div>
                <q-card>

                    <q-card-section class="q-pt-none">
                        <div>{{ currentContent }}</div>
                    </q-card-section>

                    <!--q-card-section>
                    <div class="text-h5">History</div>
                </q-card-section>
                <q-card-section>
                    <div class="text-h6">Comming soon</div>
                </q-card-section-->

                    <q-card-actions align="right" class="bg-white text-teal">
                        <q-btn flat label="OK" v-close-popup rounded />
                    </q-card-actions>
                </q-card>
            </div>

        </q-dialog>

    </div>
</template>
<script setup>
import { ref, toRefs } from 'vue'
import Block from '@shared/Block.vue';
import Header from '@/components/layouts/Header.vue';
import QuizMain from '@/modules/quiz/components/QuizMain.vue';
import PageTitle from '@shared/PageTitle.vue';
import GptGenerator from '@/components/generator/GptGenerator.vue'
import CourseContent from '@/components/edu/CourseContent.vue'

defineProps({
    visibility: {
        type: Boolean,
        default: false
    },
});
const emit = defineEmits(['click']);

const courseContent = ref({});
const currentQuiz = ref({});
const screen = ref('course');
const dialogContent = ref(false);


const onContentUpdated = (data) => {
    courseContent.value = data;
}

const onShowContent = (text) => {
    currentContent.value = text;
    dialogContent.value = true;
}

const onShowQuiz = (quiz) => {
    currentQuiz.value = quiz;
    screen.value = 'quiz';
}

const onQuizFinished = () => {
    screen.value = 'course';
}

</script>
