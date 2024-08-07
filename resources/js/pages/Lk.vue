<template>
    <Lk :data="data"/>

</template>
<script setup>
import { ref, computed} from 'vue'
import Lk from './astro/Lk.vue';

const props = defineProps({
    data: {
        type: Object
    }
});
const emit = defineEmits(['click']);
</script>
