<template>
    <q-card flat>
        <q-card-section>
            <div class="text-h5">Amount</div>
        </q-card-section>

        <q-card-section class="q-pt-none">
            <div>
                <block :text-left="getBalance('stdnt')" text-right="STDNT"></block>
                <block :text-left="getBalance('exprt')" text-right="EXPRT" bg-color="bg-secondary"></block>
            </div>
        </q-card-section>
    </q-card>
</template>
<script setup>
import { ref, toRefs } from 'vue'

import useUi from '@/composables/ui';
import { useWallet } from '@/composables/wallet';

import Block from '@shared/Block.vue';

defineProps({
    visibility: {
        type: Boolean,
        default: false
    },
});
const emit = defineEmits(['click']);

const { getMode, getCurrency, getBgColor, changeMode } = useUi();
const { getWallet, getBalance, updateBalance } = useWallet(getCurrency());

</script>
