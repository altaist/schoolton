<template>
    <div class="q-my-lg" v-if="userComputed">
        <block bg-color="bg-white">
            <div class="q-my-md text-h5 text-black">Profile</div>
            <div class="text-h6 text-grey">Hello, {{ userComputed.name }}!</div>
        </block>
    </div>
</template>
<script setup>
import { ref, computed  } from 'vue'
import { auth, userComputed } from '@/composables/users';
import Block from '@shared/Block.vue';

defineProps({
    visibility: {
        type: Boolean,
        default: false
    },
});
const emit = defineEmits(['click:profile']);

auth();

</script>
