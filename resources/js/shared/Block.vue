<template>
    <div :class="[rounded, padding, margin, textColor, bgColor, border]">
        <slot>
            <div class="row">
                <div class="col">{{ textLeft }}</div>
                <div class="col text-right">{{ textRight }}</div>
            </div>
        </slot>
    </div>
</template>
<script setup>
import { ref, toRefs } from 'vue'

const props = defineProps({
    loading: {
        type: Boolean,
        default: false
    },
    textLeft: {
        type: String
    },
    textRight: {
        type: String
    },
    textRight1: {
        type: String
    },
    textRight2: {
        type: String
    },
    textColor: {
        type: String,
        default: 'text-white'
    },
    bgColor: {
        type: String,
        default: 'bg-primary'
    },
    border: {
        type: String,
        default: 'border-1'
    },
    padding: {
        type: String,
        default: 'q-pa-md'
    },
    margin: {
        type: String,
        default: 'q-my-sm'
    },

    rounded: {
        type: String,
        default: 'rounded-2'
    },
});

</script>
