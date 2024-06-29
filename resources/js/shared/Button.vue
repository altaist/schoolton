<template>
    <q-btn :label="label" @click="emit('click')" rounded :color="color" :icon="icon" ></q-btn>
</template>
<script setup>
import { ref, toRefs } from 'vue'

const props = defineProps({
    loading: {
        type: Boolean,
        default: false
    },
    label: {
        type: String
    },
    color: {
        type: String,
        default: 'primary'
    },
    icon: {
        type: String,
        default: undefined
    },

});

const emit = defineEmits(['click']);

</script>
