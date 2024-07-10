<template>
    <div >&nbsp;
        <slot name="content">
            <div class="q-mt-xl"><div class="q-mt-xl q-pa-md text-h5">{{ questionContent }}</div></div>
        </slot>
        <slot name="answers">
            <div class="q-my-md q-pa-sm fixed-bottom bg-white">
                <div class="row q-col-gutter-sm">
                    <div :class="[getColClass(variants), 'text-center']" v-for="variant in variants">
                        <Button :label="variant.txt" @click="setAnswer(variant)" class="full-width"></Button>
                    </div>
                </div>
            </div>
        </slot>
    </div>
</template>

<script setup>
import { computed } from 'vue'
import Block from '@shared/Block.vue';
import Button from '@shared/Button.vue';

const props = defineProps({
    question: {
        type: Object,
    },
});


const emit = defineEmits(['question:completed', 'question:canceled'])

const questionContent = computed(() => {
    return props.question.txt
});

const variants = computed(() => {
    return props.question.vs
});

const setAnswer = (answer) => {
    emit('question:completed', answer);
};

const getColClass = (variants) => {
    let cssClass = 'col-6';

    variants.forEach(element => {
        if (element.txt.length > 8) {
            cssClass = 'col-12';
        }
    });
    return cssClass;
}

</script>
