<template>
    <div class="q-my-sm">
        <div class="q-my-md">
            <q-input v-model="queryText" filled type="textarea" class="full-width" :loading="loading"></q-input>
        </div>
        <div class="q-my-md">
            <q-btn label="Create a course" @click="onCreateClick" />
        </div>
        <q-inner-loading :showing="loading">
            <q-spinner-gears size="50px" color="primary" />
        </q-inner-loading>
    </div>
</template>
<script setup>
import { ref, toRefs } from 'vue'
import axios from 'axios';
import Block from '@shared/Block.vue';
import useUi from '@/composables/ui';

defineProps({
    data: {
        type: Boolean,
        default: false
    },
});
const emit = defineEmits(['gpt:completed']);

const { loading } = useUi();
const queryText = ref('Ардуино - это микроконтроллер. У него есть 13 портов: четыре аналоговых и 14 цифровых');

const processTextRequest = async (message) => {
    loading.value = true;
    try {
        const result = axios.post(route('gpt'), { message });
        return (await result).data;
    } catch (error) {
        console.log(error);
    } finally {
        loading.value = false;
    }
}

const onCreateClick = async () => {
    const result = await processTextRequest(queryText.value);

    emit('gpt:completed', result);
}

</script>
