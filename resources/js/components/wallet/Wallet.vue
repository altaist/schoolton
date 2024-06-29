<template>
    <block bg-color="bg-white">
        <block text-left="100" text-right="STDNT"></block>
        <block text-left="100" text-right="EXPRT" bg-color="bg-negative"></block>
        <block text-left="100" text-right="STDNT" text-color="text-black" bg-color="bg-warning"></block>
    </block>
</template>
<script setup>
import { ref, toRefs } from 'vue'
import Block from '@shared/Block.vue';

defineProps({
    visibility: {
        type: Boolean,
        default: false
    },
});
const emit = defineEmits(['click']);
</script>
