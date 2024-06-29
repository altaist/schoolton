<template>
    <div>
        <q-linear-progress :value="valueComputed" class="q-pa-lg rounded-2" :color="color" size="25px">
            <div class="absolute-full flex flex-center">
                <div class="text-white text-subtitle1 q-pa-sm">{{ label }}</div>
            </div>
        </q-linear-progress>
    </div>
</template>
<script setup>
import { computed } from 'vue'

const props = defineProps({
    val: {
        type: Number,
        default: 0
    },
    label: {
        type: String,
        default: ''
    },
    color: {
        type: String,
        default: ''
    },


});

const emit = defineEmits(['click']);

const valueComputed = computed(() => props.val / 100)


</script>
