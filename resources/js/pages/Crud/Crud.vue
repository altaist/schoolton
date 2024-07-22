<template>
    <div class="q-my-sm q-pa-sm">
        <Section :title="crudConfig.title"></Section>

    </div>
</template>
<script setup>
import { ref, computed} from 'vue'
import Block from '@shared/Block.vue';
import Section from '@shared/Section.vue';
import { useCrud } from '@/utils/crud.js'

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

const crudManager = useCrud(props.crudConfig);
crudManager.create({title: 'Sample qr'})

</script>

