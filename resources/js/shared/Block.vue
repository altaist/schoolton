<template>
    <div :class="[color, textColor, 'q-my-md']" :style="['border-radius: ' + radiusComputed]">
        <slot></slot>
    </div>
</template>
<script setup>
import { ref, computed } from 'vue'

const props = defineProps({
    color: {
        type: String,
        default: 'bg-primary'
    },
    textColor: {
        type: String,
        default: 'text-white'
    },
    border: {
        type: String,
        default: ''
    },
    padding: {
        type: String,
        default: 'q-pa-md'
    },
    margin: {
        type: String,
        default: 'q-my-sm'
    },

    rounded: {
        type: String,
        default: 'rounded-1'
    },

    radius: {
        default: "0px"
    },

    type: {
        type: Number,
        default: 0
    }
});

const getRadiusPresets = (mode) => {
    switch (mode) {
        case 1:
            return '20% 10% 20% 10%'
        case 2:
            return '10% 20% 10% 20%'
        default:
            return props.radius
    }
}

const radiusComputed = computed(() => {
    return getRadiusPresets(props.radius);
});

</script>
