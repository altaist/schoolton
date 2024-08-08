<template>
    <div :class="['q-pa-md q-my-sm rounded text-h6', 'text-white', color]"><slot>{{ title }}</slot></div>
</template>
<script setup>
import { ref, computed} from 'vue'

const props = defineProps({
    title: {
        type: String,
    },
    color: {
        type: String,
        default: 'bg-secondary'
    }
});
</script>


