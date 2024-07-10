<template>
    <div class="row">
        <div class="col-12">
            <block border="" rounded="rounded-1" padding="q-pa-sm q-pl-md" margin="q-mb-lg" :bg-color="getBgColor('bg-')">
                <div class="text-h5"> <slot>{{ title }}</slot></div>
            </block>
        </div>
        <div class="col-4 text-right" v-if="false">
            <block border="" margin="q-mb-lg" :bg-color="getBgColor('bg-')">
                <div class="text-h5"> {{ titleRight }}d</div>
            </block>
        </div>
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
