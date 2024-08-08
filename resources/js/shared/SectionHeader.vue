<template>
    <div :class="['q-pa-md q-my-sm rounded-1 text-center', 'text-white', color, size]"><slot>{{ title }}</slot></div>
</template>
<script setup>
import { ref, computed} from 'vue'

const props = defineProps({
    title: {
        type: String,
    },
    color: {
        type: String,
        default: 'bg-deep-orange'
    },
    size: {
        type: String,
        default: 'text-h4'
    }
});
</script>


