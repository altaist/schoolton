<template>
    <div class="q-my-md">
        <SectionHeader v-if="title">{{ title }}</SectionHeader>
        <div><slot/></div>
    </div>
</template>
<script setup>
import { ref, computed} from 'vue'
import SectionHeader from "@/shared/SectionHeader.vue"

const props = defineProps({
    title: {
        type: String,
    },
});
const emit = defineEmits(['click']);
</script>
