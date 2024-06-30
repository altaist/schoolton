<template>

        <q-list>
            <ListItem v-for="item in items" :item="item" @click:join="onClick" :action-join="actionJoin"></ListItem>
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

const emit = defineEmits(['course:joined']);

const onClick = (data) => {
    emit('course:joined', data);
}

</script>
