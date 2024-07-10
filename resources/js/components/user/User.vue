<template>
    <div class="q-my-lg" v-if="user">
        <block bg-color="bg-white">
            <div class="q-my-md text-h5 text-black">Profile</div>
            <div class="text-h6 text-grey">Hello, {{ user.name }}!</div>
        </block>
    </div>
</template>
<script setup>
import { ref, computed  } from 'vue'
import { useProfile } from '@/composables/users';
import Block from '@shared/Block.vue';

defineProps({
    visibility: {
        type: Boolean,
        default: false
    },
});
const emit = defineEmits(['click']);

const { getUser } = useProfile();

const user = getUser();

</script>
