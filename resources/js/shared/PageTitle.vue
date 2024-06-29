<template>
    <div class="row">
        <div class="col">{{ title }}</div>
        <div class="col text-right">{{ titleRight }}</div>
    </div>
</template>
<script setup>
import { ref, toRefs } from 'vue'

const props = defineProps({
    title: {
        type: String
    },
    titleRight: {
        type: String
    },

});

</script>
