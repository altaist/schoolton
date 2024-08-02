<template>
    <div class="q-my-sm">
        {{  item }}
        <div v-for="point in item.points">
            <TopicItem :data="point"></TopicItem>
        </div>
    </div>
</template>
<script setup>
import { ref, computed} from 'vue'
import Block from '@shared/Block.vue';
import Section from '@shared/Section.vue';
import TopicItem from '@/components/edu/TopicItem.vue';

const props = defineProps({
    title: {
        type: String,
        default: ''
    },
    item: {
        type: Object
    }
});
const emit = defineEmits(['click']);
</script>
