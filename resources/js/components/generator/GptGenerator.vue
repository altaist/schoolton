<template>
    <div class="q-my-sm full-width">
        <div class="q-my-md">
            <q-input v-model="queryText" filled type="textarea" class="full-width"/>
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
const queryText = ref(`The Open Network (TON) is a decentralized and open internet platform made up of several components. These include: TON Blockchain, TON DNS, TON Storage, and TON Sites. TON Blockchain is the core protocol that connects TON’s underlying infrastructure together to form the greater TON Ecosystem`);

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
