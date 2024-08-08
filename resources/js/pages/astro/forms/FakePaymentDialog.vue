<template>
    <div class="q-my-lg q-pa-sm">
        <q-card class="q-pa-md text-h5">
        <q-card-section>
            <div class="text-h4 text-center">Тестовая оплата</div>
        </q-card-section>

        <q-card-actions align="center" class="q-my-md" v-if="!paid">
            <q-btn :label="' Оплатить ' + sum + ' рублей '" @click="paid=true" color="deep-orange" size="lg" rounded />
        </q-card-actions>
        <q-card-actions align="center" v-else>
            <div class="text-h5 q-my-md">Оплата принята</div>
            <q-btn :label="'Перейти в личный кабинет'" @click="emit('click:lk')" color="secondary" size="md" />
        </q-card-actions>
    </q-card>
    </div>
</template>
<script setup>
import { ref, computed } from 'vue'
import Block from '@shared/Block.vue';
import Section from '@shared/Section.vue';

const props = defineProps({
    sum: {
        type: Number,
        default: 0
    },
});

const emit = defineEmits(['click:lk']);

const paid = ref(false);

</script>
