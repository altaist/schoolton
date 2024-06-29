<template>
    <block class="q-ma-sm fixed-bottom" :bg-color="useUi().getBgColor('bg-')" padding="q-pa-sm">
        <div class="row q-col-gutter-sm">
            <div class="col" v-for="option in options">
                <q-btn :label="option.label" @click="emit('click', option)" rounded class="full-width" flat :icon="option.icon || undefined" stack />
            </div>
        </div>
    </block>
</template>

<script setup>
import Block from '@shared/Block.vue';
import Button from '@shared/Button.vue';
import useUi from '@/composables/ui'

const props = defineProps({
    loading: {
        type: Boolean,
        default: false
    },

    options: {
        type: Array,
        default: []
    },

    bgColor: {
        type: String,
        default: 'bg-primary'
    },

    mode: {
        type: String,
        default: 'student'
    },


});

const emit = defineEmits(['click']);


</script>
