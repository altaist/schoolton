<template>
    <div class="q-my-sm"></div>
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
