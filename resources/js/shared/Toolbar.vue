<template>
    <div class="bg-white fixed-bottom">
        <block class="q-mx-sm" :bg-color="useUi().getBgColor('bg-')" padding="q-pa-sm" rounded="rounded-1">
            <div class="row q-col-gutter-sm">
                <div class="col" v-for="option in options">
                    <q-btn :label="option.label" @click="emit('click', option)" rounded class="full-width" flat :icon="option.icon || undefined" stack />
                </div>
            </div>
        </block>
    </div>
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
