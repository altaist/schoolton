<template>
    <Header/>
    <slot></slot>
    <Footer/>


    <q-dialog v-model="dialogWalletVisibility" full-width>
        <div>
            <q-card>
                <q-card-section>
                    <PageTitle title="Wallet"></PageTitle>
                </q-card-section>

                <q-card-section>
                    <div class="text-h5">Amount</div>
                </q-card-section>

                <q-card-section class="q-pt-none">
                    <div>
                        <block :text-left="getBalance('stdnt')" text-right="STDNT"></block>
                        <block :text-left="getBalance('exprt')" text-right="EXPRT" bg-color="bg-secondary"></block>
                    </div>
                </q-card-section>

                <!--q-card-section>
                    <div class="text-h5">History</div>
                </q-card-section>
                <q-card-section>
                    <div class="text-h6">Comming soon</div>
                </q-card-section-->

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
