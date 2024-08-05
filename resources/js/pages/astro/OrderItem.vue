<template>
    <div class="q-my-sm q-pa-sm">
        <div>{{ order.id }}</div>
        <div>{{ order.json_data }}</div>
    </div>
</template>
<script setup>
import { ref, computed} from 'vue'
import Block from '@shared/Block.vue';
import Section from '@shared/Section.vue';

const props = defineProps({
    order: {
        type: Object,
    },
});
const emit = defineEmits(['click']);
</script>
