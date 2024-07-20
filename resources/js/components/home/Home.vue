<template>
    <Header/>
    <div v-if="getMode() == 'student'">

        <div>
            <User/>
        </div>
        <div>
            <div class="text-h5 q-my-lg">Active quiz</div>
            <div class="text-h6 text-center q-my-md q-pa-lg border-1 rounded-1" style="min-height: 180px;">
                Open last quiz and earn STND
                <div></div>
                <div class="q-mt-lg">
                    <Button icon="fa-solid fa-rocket" label="START" @click="onQuizClick" :color="getBgColor('')"></Button>
                </div>
            </div>
        </div>
        <div class="q-my-md text-center" v-if="firstLoadVisibility && updateAmountVisibility">
            <block rounded="rounded-2" padding="q-pa-lg" border="" bg-color="bg-negative" class="shadow-3">
                <div class="text-h5 q-my-mb">Congratulations!</div>
                <div>You have a gift: 20 STDNTs!</div>
                <div class="q-my-md">
                    <Button label="Get paid!" @click="onChangeAmount(20)" color="white" text-color="black"></Button>
                </div>

            </block>
        </div>
        <div class="q-my-lg">
            <block rounded="rounded-2" padding="q-pa-lg" border="" bg-color="bg-secondary" class="shadow-3">
                <div class="text-h5 q-my-mb">Course Creator</div>
                <div>Create your own course in 1 click!</div>
                <div class="q-my-md">
                    <Button label="Start!" @click="onStartCreator" color="white" text-color="black"></Button>
                </div>
            </block>
        </div>
        <div class="q-my-lg">
            <div class="text-h5">How it works</div>
            <block>
                <div class="text-h6">Get a course</div>
            </block>
            <block>
                <div class="text-h6">Pass tests and receive STNDs</div>
            </block>
            <block>
                <div class="text-h6">Convert STND to new knoledges or money</div>
            </block>
        </div>
        <div class="q-mb-xl">&nbsp;</div>


    </div>
    <div v-else>
        <div class="q-my-lg">
            <block rounded="rounded-2" padding="q-pa-lg" border="" bg-color="bg-negative" class="shadow-3">
                <div class="text-h5 q-my-mb">Course Creator</div>
                <div>Create your own course in 1 click!</div>
                <div class="q-my-md">
                    <Button label="Start!" @click="onStartCreator" color="white" text-color="black"></Button>
                </div>
            </block>
        </div>
        <div class="q-my-lg">
            <div class="text-h5">How it works</div>
            <block :bg-color="getBgColor('bg-')">
                <div class="text-h6">Become a master! Make your expert capital passing a quizes</div>
            </block>
            <block :bg-color="getBgColor('bg-')">
                <div class="text-h6">Create your own onlline school in 1 click</div>
            </block>
            <block :bg-color="getBgColor('bg-')">
                <div class="text-h6">Sell courses and earn money!</div>
            </block>
        </div>

    </div>

</template>
<script setup>
import { ref, computed } from 'vue'
import useUi from '@/composables/ui';
import { useWallet } from '@/composables/wallet';
import Block from '@shared/Block.vue';
import Button from '@shared/Button.vue';
import LProgress from '@shared/LProgress.vue';
import PageTitle from '@shared/PageTitle.vue';
import Header from '@/components/layouts/Header.vue';
import User from '@/components/user/User.vue'

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


const onQuizClick = () => {
    dialogWalletVisibility.value = false;
    window.location = route('quiz');
};

const onStartCreator = () => {
    dialogWalletVisibility.value = false;
    window.location = route('generator');
};

const onChangeAmount = (val) => {
    updateBalance(val, getCurrency());
    updateAmountVisibility.value = false;
}
</script>
