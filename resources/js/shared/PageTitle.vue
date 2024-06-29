<template>
    <div class="row">
        <div class="col">
            <block border="" margin="q-mb-lg" :bg-color="getBgColor('bg-')">
                <div class="text-h5"> {{ title }}</div>
            </block>
        </div>
        <div class="col text-right">{{ titleRight }}</div>
    </div>
</template>
<script setup>
import { ref, toRefs } from 'vue'
import useUi from '@/composables/ui';
import Block from '@shared/Block.vue';

const props = defineProps({
    title: {
        type: String
    },
    titleRight: {
        type: String
    },

});

const {
    getMode,
    getBgColor
} = useUi();


</script>
