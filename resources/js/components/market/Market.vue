<template>
    <PageTitle title="Marketplace"/>

    <div v-if="false">
        <MarketList :items="markets" @market:clicked="onClick"></MarketList>
    </div>

    <div class="q-my-xl">
        <div class="q-my-xl text-h4">Coming soon...</div>
    </div>
</template>
<script setup>
import { ref, computed } from 'vue'
import useMarkets from '@/composables/markets';
import useUi from '@/composables/ui';

import Block from '@shared/Block.vue';
import Button from '@shared/Button.vue';
import LProgress from '@shared/LProgress.vue';
import PageTitle from '@shared/PageTitle.vue';

import MarketList from './MarketList.vue'

defineProps({
    visibility: {
        type: Boolean,
        default: false
    },
    mode: {
        type: String,
        default: 'student'
    },
});

const {
    getMarkets
} = useMarkets  ();

const {
    getMode,
    getBgColor
} = useUi();

const markets = computed( () => getMarkets(getMode()));

const onClick = (data) => {
    alert('Joined');
}
    </script>
