<template>
    <div>
        <slot name="header">
            <div class="text-h4 q-my-md">Quiz results</div>
        </slot>
        <slot name="results" :results="results" :isSuccess="isSuccess" :onClose="onClose" :onRepeat="onRepeat">
            <div class="q-my-xl text-center text-positive text-h5" v-if="results.isSuccess">
                Test completed! :)
            </div>
            <div class="q-my-xl text-center text-negative text-h5" v-else>
                Test failed (:
            </div>
            <div class="q-my-xl q-pa-lg shadow-2">
                <div class="row">
                    <div class="col-6">Questions num:</div>
                    <div class="col-6 text-right">{{ results.total }}</div>
                    <div class="col-6 text-positive">Correct:</div>
                    <div class="col-6 text-right text-positive">{{ results.passed }}</div>
                    <div class="col-6 text-negative">Errors:</div>
                    <div class="col-6 text-right text-negative">{{ results.wrong }}</div>
                    <div class="col-6">Skipped:</div>
                    <div class="col-6 text-right">{{ results.skipped }}</div>
                    <div class="col-6">STDNT:</div>
                    <div class="col-6 text-right">{{ results.isSuccess ? 10 : -10 }}</div>
                </div>
            </div>
            <div class="q-my-md q-pa-sm fixed-bottom bg-white">
                <div class="row q-col-gutter-md">
                    <div class="col-6 text-center">
                        <Button label="Repeat" @click="onRepeat" class="full-width"></Button>
                    </div>
                    <div class="col-6 text-center">
                        <Button label="Close" @click="onClose" color="negative" class="full-width"></Button>
                    </div>
                </div>
            </div>
        </slot>
    </div>
</template>

<script setup>
import { ref, toRefs, computed } from 'vue'
import Block from '@shared/Block.vue';
import Button from '@shared/Button.vue';

const props = defineProps({
    quiz: {
        type: Object,
    },
    results: {
        type: Object,
    },

    isSuccess: {
        type: Boolean,
    },
});


const emit = defineEmits(['quiz:close', 'quiz:repeat'])

const variants = computed(() => {
    return props.question.vs
});

const onClose = () => {
    emit('quiz:close');
};


const onRepeat = () => {
    emit('quiz:repeat');
};

</script>
