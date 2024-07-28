<template>
    <div class="q-my-sm q-pa-sm">
        <Section :title="crudConfig.title"></Section>
        <Section>
            <div>
                <q-btn label="List" @click="onCrudAction('list', {code: 'Sample crud', user_id: 1})"/>
            </div>
            <div>
                <q-btn label="Item" @click="onCrudAction('item', {code: 'Sample crud', user_id: 1}, 3)"/>
            </div>
            <div>
                <q-btn label="Add" @click="onCrudAction('store', {code: 'Sample crud', user_id: 1})"/>
            </div>
            <div>
                <q-btn label="Edit" @click="onCrudAction('update', {code: 'Sample crud updated', user_id: 1}, 5)"/>
            </div>
            <div>
                <q-btn label="Delete" @click="onCrudAction('delete', {}, 2)"/>
            </div>
            <div>
                <q-btn label="Redirect to item" @click="redirectToItem('qr', 1, 'student')"/>
            </div>
            <div>
                <q-btn label="Redirect to list" @click="redirectToList('qr', 'student')"/>
            </div>
        </Section>


    </div>
</template>
<script setup>
import { ref, computed} from 'vue'
import Block from '@shared/Block.vue';
import Section from '@shared/Section.vue';
import { useCrud, redirectToItem, redirectToList } from '@/utils/crud.js'

const props = defineProps({
    title: {
        type: String,
        default: ''
    },
    crudConfig: {
        type: Object,
        default: {}
    }
});

const emit = defineEmits(['click']);
console.log(route('crud.api.store', ['qr']));

const crudManager = useCrud(props.crudConfig);
const onCrudAction = (action, data, id) => {
    crudManager.onCrud(action, data, id)
}

</script>

