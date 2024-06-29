<template>

        <q-list>
            <ListItem v-for="item in items" :item="item" @click:join="onClick"></ListItem>
        </q-list>

</template>
<script setup>
import { ref, toRefs } from 'vue'
import ListItem from './CourseListItem.vue';
import Block from '@shared/Block.vue';


defineProps({
    visibility: {
        type: Boolean,
        default: false
    },
    items: {
        type: Object
    }
});

const emit = defineEmits(['course:joined']);

const onClick = (data) => {
    emit('course:joined', data);
}

</script>
