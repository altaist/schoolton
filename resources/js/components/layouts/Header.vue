<template>
    <div class="q-mb-sm">
        <div class="row">
            <div class="col">
                <slot>
                    <div v-if="title">
                        <div class="row">
                            <div class="col-2" v-if="backUrl">
                                <Button icon="fa-solid fa-chevron-left" @click="onBackClick"/>
                            </div>
                            <div class="col-10 text-center">
                                <PageTitle>{{ title }}</PageTitle>
                            </div>
                        </div>
                    </div>
                    <div v-else>
                    <q-btn-toggle v-model="modeModel" @update:model-value="onModeUpdated" no-caps rounded unelevated :toggle-color="getBgColor('')" color="white" text-color="black"
                        :options="[
                            { label: 'STDNT', value: 'student' },
                            { label: 'EXPRT', value: 'expert' }
                        ]" />
                    </div>
                </slot>
            </div>
            <div class="col text-right" v-if="!backUrl">
                <WalletButton />
            </div>


        </div>
    </div>

</template>
<script setup>
import { ref, toRefs } from 'vue'
import Block from '@shared/Block.vue';
import Button from '@shared/Button.vue';
import WalletButton from '@/components/wallet/WalletButton.vue';
import useUi from '@/composables/ui';
import { useWallet } from '@/composables/wallet';
import PageTitle from '@/shared/PageTitle.vue';

const props = defineProps({
    title: {
        type: String
    },
    backUrl: {
        type: String
    },
});
const emit = defineEmits(['click']);

const { getMode, getCurrency, getBgColor, changeMode } = useUi();
const { getWallet, getBalance, updateBalance } = useWallet(getCurrency());

const modeModel = ref(getMode());
const dialogWalletVisibility = ref(false);

const onModeUpdated = (val) => changeMode(val);

const onWalletClick = () => {
    dialogWalletVisibility.value = true;
};

const onBackClick = () => {
    window.location = props.backUrl;
}

</script>
