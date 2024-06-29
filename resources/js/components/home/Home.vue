<template>
    <div class="row">
        <div class="col">
            <q-btn-toggle v-model="modeModel" @update:model-value="onModeUpdated" no-caps rounded unelevated
                :toggle-color="getBgColor('')" color="white"
                text-color="black" :options="[
                    { label: 'STUDENT', value: 'student' },
                    { label: 'EXPERT', value: 'expert' }
                ]" />
        </div>
        <div class="col text-right">
            <Button icon="fa-solid fa-wallet" @click="emit('wallet:clicked')" :color="getBgColor('')"></Button>
        </div>

    </div>
    <div class="q-my-xl">
        <LProgress :val="10" label="10" :color="getBgColor('')"></LProgress>
    </div>


    <div>

    </div>
</template>
<script setup>
import { ref, toRefs } from 'vue'
import useUi from '@/composables/ui';
import Block from '@shared/Block.vue';
import Button from '@shared/Button.vue';
import LProgress from '@shared/LProgress.vue';


const props = defineProps({
    visibility: {
        type: Boolean,
        default: false
    },
    mode: {
        type: String,
        default: 'student'
    },
});
const emit = defineEmits(['mode:changed', 'wallet:clicked']);

const { getMode, getBgColor, changeMode } = useUi();

const modeModel = ref(getMode());

const onModeUpdated = (val) => changeMode(val);
const onClick = () => alert('Button');
</script>
