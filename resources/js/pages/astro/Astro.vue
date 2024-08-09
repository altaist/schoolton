<template>
    <div class="container q-pa-md" style="max-width: 1024px;">
        <div>
            <div style="border-radius: 20% 10% 20% 10%; color: white; background-color: #5b6dcd; min-height: 200px;" class="q-pa-xl">
                <div class="text-h4 q-my-sm">
                    Удобный и быстрый сервис заказа натальных карт
                </div>
                <div class="text-h6 q-mt-xl">
                    Нам доверяют. Более 1000 выполненных исследований!
                </div>

                <div class="text-h6 q-mt-xl">
                    <q-btn label="Заказать" color="white" text-color="black" rounded href="#order" size="lg" />
                </div>
                <div class="q-mt-lg"><a href="#docs">Документы</a></div>

            </div>
            <div class="q-mt-md">
                <div class="row q-col-gutter-sm">
                    <div class="col-sm-12 col-md-6">
                        <Block radius="20% 10% 20% 10%" class="q-pa-xl text-h6 text-white bg-deep-orange">
                            <div class="q-my-sm">
                                Натальные карты - это диаграммы, которые отображают положение планет, звезд и других небесных тел в момент рождения человека.
                            </div>
                            <div class="q-mt-lg">
                                Они помогают людям лучше понимать
                                себя и принимать осознанные решения
                            </div>
                        </Block>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <Block radius="20% 10% 20% 10%" class="q-pa-xl text-h6 text-white bg-accent">
                            <div class="">
                                Мы создадим для вас карту и проведем исследование, содержащее индивидуальные инсайты и множество аспектов - от личной жизни до профессионального
                                роста.
                            </div>
                        </Block>
                    </div>
                </div>
            </div>

            <!--div class="q-mt-xl">
                <q-card class="q-pa-md text-h6 text-white bg-deep-orange ">
                    <q-card-section>
                        Натальные карты - это диаграммы, которые отображают положение планет, звезд и других небесных тел в момент рождения человека.
                    </q-card-section>
                    <q-card-section>
                        Получите подробное описание личных характеристик, жизненных тенденций и потенциальных возможностей.
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
            </div-->

            <div>
                <Section title="Почему мы?">
                    <Block radius="10px" class="q-pa-md text-h6 text-white bg-secondary">
                        <div class="text-h4 q-my-sm">1. Быстро</div>
                        <div>Готовый результат в течение 1-4 часов</div>
                    </Block>
                    <Block radius="10px" class="q-pa-md text-h6 text-white bg-secondary">
                        <div class="text-h4 q-my-sm">2. Удобно</div>
                        <div>Личный кабинет, ссылка на готовую карту в PDF, служба поддержки</div>
                    </Block>
                    <Block radius="10px" class="q-pa-md text-h6 text-white bg-secondary">
                        <div class="text-h4 q-my-sm">3. Не дорого</div>
                        <div>Стоимость создания карты: 490 рублей при оплате сразу после заказа. Возвращаем деньги, если результат не понравился</div>
                    </Block>


                </Section>
            </div>
            <div class="q-my-md" id="order">
                <SectionHeader class="text-h4">Заказать исследование</SectionHeader>
                <div class="row">
                    <div class="col-6">
                        <div></div>
                    </div>
                    <div class="col-6">
                        <div></div>
                    </div>
                </div>
                <div class="text-h6 q-my-md q-pa-md">
                    <div class="q-my-sm">1. Заполните информацию</div>
                    <div class="q-my-sm">2. Оплатите удобным способом</div>
                    <div class="q-my-sm">3. Получите в личном кабинете ссылку на готовый PDF файл</div>
                </div>

                <div class="q-px-sm" id="docs">
                    <OrderForm />
                    <div class="q-mt-md">
                        <Docs />
                    </div>
                </div>
            </div>
            <div class="q-mt-xl">
                <Section>
                    <SectionHeader2>Вопросы, на которые дают ответы исследования</SectionHeader2>
                    <div>
                        <Questions />
                    </div>
                </Section>
            </div>
            <Block radius="10% 10% 10% 10%" class="q-pa-xl text-h5 text-white bg-secondary">
                <div class="">
                    Получите подробное описание личных характеристик, жизненных тенденций и потенциальных возможностей!
                </div>
                <div class="text-h6 q-mt-xl">
                    <q-btn label="Заказать" color="white" text-color="black" rounded href="#order" size="lg" />
                </div>
            </Block>



            <!--div>
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
            <div></div-->

        </div>
    </div>
</template>
<script setup>
import { ref, computed } from 'vue'
import Block from '@shared/Block.vue';
import Section from '@shared/Section.vue';
import SectionHeader from '@shared/SectionHeader.vue';
import SectionHeader2 from '@shared/SectionHeader2.vue';
import Questions from './Questions.vue';
import OrderForm from './forms/OrderForm.vue'
import Docs from './forms/Docs.vue'

const props = defineProps({
    title: {
        type: String,
        default: ''
    },
});
const emit = defineEmits(['click']);


</script>
