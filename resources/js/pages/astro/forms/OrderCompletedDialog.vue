<template>
    <q-card class="q-pa-md text-h5">
        <q-card-section>
            <div class="text-h4 text-left q-mb-lg">Ваш заказ сформирован!</div>
        </q-card-section>
        <q-card-section class="q-pt-none q-mb-lg">
            <div>Мы получили необходимые данные и готовы к созданию карты</div>
        </q-card-section>

        <q-card-section class="q-pt-none" v-if="false">
            Получите скидку <b>100</b> рублей при оплате заказа в течение ближайших 5 минут
        </q-card-section>

        <q-card-section class="q-pt-none" v-if="false">
            Текущая стоимость заказа:<br> <span class="text-strike">700</span> <span class="text-h6 text-positive">600</span> рублей
        </q-card-section>

        <q-card-actions align="center">
            <q-btn :label="' Оплатить ' + sum + ' рублей '" @click="emit('click:payment')" color="deep-orange" size="lg" rounded />
        </q-card-actions>
        <q-card-actions align="center" class="q-mt-md">
            <q-btn :label="'Личный кабинет'" @click="emit('click:lk')" color="secondary" size="md" />
        </q-card-actions>
    </q-card>
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
const emit = defineEmits(['click:payment', 'click:lk']);
</script>
