<template>
    <div class="q-my-sm q-pa-md">
        <div>
            <div style="border-radius: 20% 10% 20% 10%; color: white; background-color: #5b6dcd; min-height: 200px;" class="q-pa-xl">
                <div class="text-h4 q-my-sm">
                    Удобный и быстрый сервис заказа натальных карт
                </div>
                <div class="text-h6 q-mt-xl">
                    Нам доверяют. Более 1000 выполненных заказов!
                </div>

            </div>
            <section>

            </section>
            <div class="q-mt-xl">
                <q-card class="q-pa-md text-h6 text-white bg-deep-orange ">
                    <q-card-section>
                        Натальные карты - это диаграммы, которые отображают положение планет, звезд и других небесных тел в момент рождения человека.
                    </q-card-section>
                    <q-card-section>
                        Наше исследование включает себя кроме самой карты подробное описание личных характеристик, жизненных тенденций и потенциальных возможностей.
                    </q-card-section>

                </q-card>
            </div>

            <div class="q-my-md">
                <q-card class="q-pa-md text-h6 text-white bg-accent ">
                    <q-card-section>
                        Мы создаем индивидуальные инсайты, помогая людям лучше понимать
                себя и принимать осознанные решения.
                    </q-card-section>
                </q-card>
            </div>
            <div>
                Аспекты
            </div>
            <div>
                Как заказать
            </div>
            <div class="q-my-md">
                <OrderForm/>
            </div>



            <div>
                Получи ответы на вопросы:
            </div>
            <div v-if="false">
                <Questions />
            </div>
            <div>
                Почему мы?
            </div>
            <div>
                Удобно и без рекламы
                Быстрее других
                Оптимальная цена
                Лучшие прогнозы *
            </div>

            <div>
                Лучший сервис по созданию натальных карт *
            </div>
            <div>
                * По мнению редакторов жрунала MagicPult
            </div>
            <div></div>

        </div>
    </div>
</template>
<script setup>
import { ref, computed } from 'vue'
import Block from '@shared/Block.vue';
import Section from '@shared/Section.vue';
import Questions from './Questions.vue';
import OrderForm from './forms/OrderForm.vue'

const props = defineProps({
    title: {
        type: String,
        default: ''
    },
});
const emit = defineEmits(['click']);



</script>
