<template>
    <div class="q-my-md">
        <div v-if="title" class="q-my-sm text-h6">{{ title }}</div>
        <div><slot/></div>
    </div>
</template>
<script setup>
import { ref, computed} from 'vue'

const props = defineProps({
    title: {
        type: String,
    },
});
const emit = defineEmits(['click']);
</script>
