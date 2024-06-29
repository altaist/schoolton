<template>
    <div class="text-h6">Market</div>

</template>
<script setup>
import { ref, toRefs } from 'vue'
import Block from '@shared/Block.vue';
import Button from '@shared/Button.vue';
import LProgress from '@shared/LProgress.vue';

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

const onClick = () => alert('Button');
</script>
