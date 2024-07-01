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
            <Button icon="fa-solid fa-wallet" :label="balanceComputed" @click="onWalletClick" :color="getBgColor('')"></Button>
        </div>

    </div>
    <div class="q-my-xl">
        <LProgress :val="100" label="Energy: 100%" :color="getBgColor('')"></LProgress>
    </div>
    <div>

    </div>
    <div>
        <div class="text-h5 q-my-sm">Active quiz</div>
        <div class="text-h6 text-center q-my-md q-pa-lg border-1 rounded-1" style="min-height: 200px;">
            Last quiz description...
            <div></div>
            <div class="q-my-md q-mt-lg">
            <Button icon="fa-solid fa-rocket" label="Start quiz" @click="onQuizClick" :color="getBgColor('')"></Button>
        </div>
        </div>
    </div>
    <div class="q-my-md" v-if="firstLoadVisibility && updateAmountVisibility">
        <block rounded="rounded-2" padding="q-pa-lg" border="" bg-color="bg-negative" class="shadow-3" >
            <div class="text-h5 q-my-mb">Congratulations!</div>
            <div>You have a gift: 50 STDNT!</div>
            <div class="q-my-md">
                <Button label="Got it!" @click="onChangeAmoount(50)" color="white" text-color="black"></Button>
            </div>

        </block>
    </div>
    <q-dialog v-model="dialogWalletVisibility" full-width>
        <div>
            <q-card>
                <q-card-section>
                    <PageTitle title="Wallet"></PageTitle>
                </q-card-section>

                <q-card-section>
                    <div class="text-h6">Amoount</div>
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
import { ref, computed } from 'vue'
import useUi from '@/composables/ui';
import { useWallet } from '@/composables/wallet';
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
const emit = defineEmits(['mode:changed', 'wallet:clicked', 'quiz:clicked']);

const { getMode, getCurrency, getBgColor, changeMode } = useUi();
const { getWallet, getBalance, updateBalance, balanceComputed } = useWallet(getCurrency());

const modeModel = ref(getMode());
const dialogWalletVisibility = ref(false);
const updateAmountVisibility = ref(true);
const firstLoadVisibility = !(localStorage.getItem('loaded') || false);
localStorage.setItem('loaded', true);

const onModeUpdated = (val) => changeMode(val);
const onWalletClick = () => {
    dialogWalletVisibility.value = true;
};
const onQuizClick = () => {
    dialogWalletVisibility.value = false;
    window.location = route('quiz');
};

const onChangeAmoount = (val) => {
    updateBalance(val, getCurrency());
    updateAmountVisibility.value = false;
}
</script>
