<template>
    <div class="q-ma-xl">
        <div class="q-my-lg text-h5">You are logged out</div>
        <block text-color="text-white" margin="q-my-sm" border="" rounded="rounded-1">
            <div>Learn...</div>
            <div>Earn...</div>
            <div>Create your expert business!</div>
        </block>
        <div class="q-my-lg">
            <Button label="Back to main" @click="onStartClick" color="negative"></Button>
        </div>




    </div>
</template>

<script setup>
import { computed, ref } from 'vue'
import Button from '@shared/Button.vue';
import Block from '@shared/Block.vue';
import { logout, logoutLocal } from '@/composables/users';

logoutLocal(true);

const onStartClick = (m) => {
    window.location = route('main');
}
</script>
