<template>
    <q-tab-panels v-model="screen" class="q-pa-none" animated>
        <q-tab-panel name="quiz">
            <PageTitle title="Quiz" />
            <div>
                <QuizMain :quiz="currentQuiz" @quiz:completed="onQuizFinished"></QuizMain>
            </div>
        </q-tab-panel>
        <q-tab-panel name="course">
            <div class="text-h5">Course generator</div>
            <div class="q-my-lg">
                <div class="row q-col-gutter-md">
                    <div class="col-sm-12 col-lg-6">
                        <GptGenerator @gpt:completed="onContentUpdated"></GptGenerator>
                    </div>
                    <div class="col-sm-12 col-lg-6">
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


const testQuiz = {
                "qs": [
                    {
                        "txt": "\u0427\u0442\u043e \u0442\u0430\u043a\u043e\u0435 \u0410\u0440\u0434\u0443\u0438\u043d\u043e?",
                        "vs": [
                            "\u041f\u0440\u043e\u0433\u0440\u0430\u043c\u043c\u043d\u043e\u0435 \u043e\u0431\u0435\u0441\u043f\u0435\u0447\u0435\u043d\u0438\u0435",
                            "\u0421\u0435\u043d\u0441\u043e\u0440",
                            "\u041c\u0438\u043a\u0440\u043e\u043a\u043e\u043d\u0442\u0440\u043e\u043b\u043b\u0435\u0440",
                            "\u0411\u0430\u0442\u0430\u0440\u0435\u044f"
                        ],
                        "as": [
                            2
                        ]
                    },
                    {
                        "txt": "\u0421\u043a\u043e\u043b\u044c\u043a\u043e \u0443 \u0410\u0440\u0434\u0443\u0438\u043d\u043e \u0430\u043d\u0430\u043b\u043e\u0433\u043e\u0432\u044b\u0445 \u043f\u043e\u0440\u0442\u043e\u0432?",
                        "vs": [
                            "\u0422\u0440\u0438",
                            "\u0427\u0435\u0442\u044b\u0440\u0435",
                            "\u041f\u044f\u0442\u044c",
                            "\u0428\u0435\u0441\u0442\u044c"
                        ],
                        "as": [
                            1
                        ]
                    },
                    {
                        "txt": "\u0421\u043a\u043e\u043b\u044c\u043a\u043e \u0443 \u0410\u0440\u0434\u0443\u0438\u043d\u043e \u0446\u0438\u0444\u0440\u043e\u0432\u044b\u0445 \u043f\u043e\u0440\u0442\u043e\u0432?",
                        "vs": [
                            "16",
                            "13",
                            "14",
                            "12"
                        ],
                        "as": [
                            2
                        ]
                    }
                ]
            }
const testQuiz2 = {
        "title": "Python: Basics",
        "qs": [
            {
                "txt": "What is a variable?",
                "vs": [
                    {
                        "idx": 0,
                        "txt": "An object that stores a value"
                    },
                    {
                        "idx": 1,
                        "txt": "A command to execute an operation"
                    },
                    {
                        "idx": 2,
                        "txt": "A program file"
                    },
                    {
                        "idx": 3,
                        "txt": "A compiler directive"
                    }
                ],
                "as": [0]
            },
            {
                "txt": "Which data type is used to store text in Python?",
                "vs": [
                    {
                        "idx": 0,
                        "txt": "int"
                    },
                    {
                        "idx": 1,
                        "txt": "float"
                    },
                    {
                        "idx": 2,
                        "txt": "str"
                    },
                    {
                        "idx": 3,
                        "txt": "list"
                    }
                ],
                "as": [2]
            },
            {
                "txt": "What does the print() function do?",
                "vs": [
                    {
                        "idx": 0,
                        "txt": "Saves data"
                    },
                    {
                        "idx": 1,
                        "txt": "Executes code"
                    },
                    {
                        "idx": 2,
                        "txt": "Displays text on the screen"
                    },
                    {
                        "idx": 3,
                        "txt": "Ends the program"
                    }
                ],
                "as": [2]
            },
            {
                "txt": "How to create a list in Python?",
                "vs": [
                    {
                        "idx": 0,
                        "txt": "()"
                    },
                    {
                        "idx": 1,
                        "txt": "[]"
                    },
                    {
                        "idx": 2,
                        "txt": "{}"
                    },
                    {
                        "idx": 3,
                        "txt": "''"
                    }
                ],
                "as": [1]
            },
            {
                "txt": "What is a for loop?",
                "vs": [
                    {
                        "idx": 0,
                        "txt": "Conditional structure"
                    },
                    {
                        "idx": 1,
                        "txt": "Function"
                    },
                    {
                        "idx": 2,
                        "txt": "Loop with a predetermined number of iterations"
                    },
                    {
                        "idx": 3,
                        "txt": "Loop with a condition"
                    }
                ],
                "as": [2]
            }
        ],
        "settings": {
            "repeat": 0,
            "showErrors": false,
            "auto": false,
            "looping": true,
            "onlyForward": false
        }
    };

    // onShowQuiz();
</script>
