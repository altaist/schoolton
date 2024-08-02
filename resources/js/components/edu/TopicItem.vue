<template>
    <div class="q-my-sm">
        <div class="q-my-md cursor-hand" @click="redirectToItem('topic', data.id)">
            {{ data }}
        </div>

    </div>
</template>
<script setup>
import { ref, computed} from 'vue'
import Block from '@shared/Block.vue';
import Section from '@shared/Section.vue';
import { redirectToItem } from '@/composables/crud';

const props = defineProps({
    data: {
        type: Object
    },
});
const emit = defineEmits(['click']);
</script>
