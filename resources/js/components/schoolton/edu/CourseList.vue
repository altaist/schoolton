<template>

        <q-list>
            <ListItem v-for="item in items" :item="item" @click:join="onJoinClick" @click:details="onDetailsClick" :action-join="actionJoin"></ListItem>
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
    },
    actionJoin: {
        type: Boolean,
        default: true
    }
});

const emit = defineEmits(['course:joined', 'course:details']);

const onJoinClick = (data) => {
    emit('course:joined', data);
}

const onDetailsClick = (data) => {
    emit('course:details', data);
}

</script>
