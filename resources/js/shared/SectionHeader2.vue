<template>
    <div :class="['q-py-md q-my-sm rounded text-h4', 'text-grey-4', color]"><slot>{{ title }}</slot></div>
</template>
<script setup>
import { ref, computed} from 'vue'

const props = defineProps({
    title: {
        type: String,
    },
    color: {
        type: String
    }
});
</script>


