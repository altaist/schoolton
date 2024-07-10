<template>
    <div>
        <Button icon="fa-solid fa-wallet" :label="'' + getBalance(getCurrency())" @click="onWalletClick" :color="getBgColor('')"></Button>
    </div>
    <q-dialog v-model="dialogWalletVisibility" full-width>
        <div class="">
            <q-card>
                <q-card-section>
                    <PageTitle title="Wallet"></PageTitle>
                </q-card-section>

                <q-card-section class="q-pt-none">

                    <Wallet></Wallet>
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
import { useWallet } from '@/composables/wallet';

import Block from '@shared/Block.vue';
import Button from '@shared/Button.vue';
import Wallet from './Wallet.vue';
import PageTitle from '@shared/PageTitle.vue';


defineProps({
    visibility: {
        type: Boolean,
        default: false
    },
});
const emit = defineEmits(['click']);

const { getMode, getCurrency, getBgColor, changeMode } = useUi();
const { getWallet, getBalance, updateBalance } = useWallet(getCurrency());

const dialogWalletVisibility = ref(false);

const onModeUpdated = (val) => changeMode(val);

const onWalletClick = () => {
    dialogWalletVisibility.value = true;
};
</script>
