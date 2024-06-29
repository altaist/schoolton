<template>
    <div class="row">
        <div class="col">
            <q-btn-toggle v-model="modeModel" @update:model-value="onModeUpdated" no-caps rounded unelevated :toggle-color="getBgColor('')" color="white" text-color="black"
                :options="[
                    { label: 'STUDENT', value: 'student' },
                    { label: 'EXPERT', value: 'expert' }
                ]" />
        </div>
        <div class="col text-right">
            <Button icon="fa-solid fa-wallet" label="10" @click="onWalletClick" :color="getBgColor('')"></Button>
        </div>

    </div>
    <div class="q-my-xl">

        <LProgress :val="10" label="Life: 10" :color="getBgColor('')"></LProgress>
    </div>
    <div>

    </div>
    <div>
        <div class="text-h5 q-my-sm">Active quiz</div>
        <div class="text-h6 q-my-md q-pa-lg border-1 rounded-1" style="min-height: 200px;">
            Last quiz description...
        </div>
        <div>
            <Button icon="fa-solid fa-rocket" label="Start quiz" @click="onQuizClick" :color="getBgColor('')"></Button>
        </div>
    </div>
    <q-dialog v-model="dialogWallet" full-width>
        <div>
            <q-card>
                <q-card-section>
                    <PageTitle title="Wallet"></PageTitle>
                </q-card-section>

                <q-card-section>
                    <div class="text-h6">Ballance</div>
                </q-card-section>

                <q-card-section class="q-pt-none">
                    <div>
                        <block text-left="37" text-right="STDNT"></block>
                        <block text-left="102" text-right="EXPRT" bg-color="bg-negative"></block>
                    </div>
                </q-card-section>

                <q-card-section>
                    <div class="text-h6">History</div>
                </q-card-section>
                <q-card-section>
                    <div class="text-h6">...</div>
                </q-card-section>

                <q-card-actions align="right" class="bg-white text-teal">
                    <q-btn flat label="OK" v-close-popup :color="getBgColor('')" rounded />
                </q-card-actions>
            </q-card>
        </div>

    </q-dialog>
</template>
<script setup>
import { ref, toRefs } from 'vue'
import useUi from '@/composables/ui';
import Block from '@shared/Block.vue';
import Button from '@shared/Button.vue';
import LProgress from '@shared/LProgress.vue';
import PageTitle from '@shared/PageTitle.vue';


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
const dialogWallet = ref(false);

const onModeUpdated = (val) => changeMode(val);
const onWalletClick = () => {
    dialogWallet.value = true;
};
const onQuizClick = () => {
    dialogWallet.value = false;
    window.location = route('quiz');

};
</script>
