<template>
    <block text-color="text-black" bg-color="bg-secondary" margin="q-my-sm">
        <div class="row q-col-gutter-lg">
            <div class="col-6 text-center">
                <i class="text-white fa-solid fa-landmark" style="font-size: 150px;"></i>
                <block padding="q-pa-none" margin="q-mt-md" bg-color="bg-grey">{{ item.title }}</block>
                <div class="q-my-md text-white text-h4">{{ item.price }} </div>
            </div>
            <div class="col-6 text-white text-center">
                <div v-for="param, index in params">
                    <div>{{ param }}</div>
                    <block padding="q-pa-none">{{ item.params[index] }}</block>
                </div>
                <div>
                    <Button label="Buy" @click="emit('click:buy', item)" color="positive" />
                </div>
            </div>
        </div>


    </block>
</template>
<script setup>
import { ref, toRefs } from 'vue'
import useUi from '@/composables/ui';
import Block from '@shared/Block.vue';
import Button from '@shared/Button.vue';


defineProps({
    visibility: {
        type: Boolean,
        default: false
    },
    item: {
        type: Object
    }
});

const emit = defineEmits(['click:buy']);

const { getMode, getBgColor } = useUi();

const params = ['Capacity', 'Quality', 'Material']

</script>
