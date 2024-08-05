<template>
    <div class="q-my-sm q-pa-md">
        <div>
            <div class="text-h3 q-my-sm">
                Удобный и быстрый сервис по заказу натальных карт
            </div>
            <div class="text-h6">
                Нам доверяют. Более 3000 выполненных заказов
            </div>
            <div>
                Натальные карты - это диаграммы, которые отображают положение планет, звезд и других небесных тел в момент рождения человека.
            </div>
            <div>
                Натальные карты предоставляют индивидуальные инсайты и понимание личных характеристик, жизненных тенденций и потенциальных возможностей, помогая людям лучше понять
                себя и принимать осознанные решения.

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
                Как заказать

            </div>
            {{ customForm }}
            <div>
                <div>Форма заказа</div>
                <div>
                    <div v-for="person in customForm.persons">
                        <div>
                            <q-input v-model="person.personName" label="Имя"></q-input>
                        </div>
                        <div>
                            <q-input v-model="person.city" label="Город"></q-input>
                        </div>
                        <div>
                            <q-input filled v-model="person.date" mask="##.##.####">
                                <template v-slot:append>
                                    <q-icon name="event" class="cursor-pointer">
                                        <q-popup-proxy cover transition-show="scale" transition-hide="scale">
                                            <q-date v-model="person.date" mask="DD.MM.YYYY">
                                                <div class="row items-center justify-end">
                                                    <q-btn v-close-popup label="Закрыть" color="primary" flat />
                                                </div>
                                            </q-date>
                                        </q-popup-proxy>
                                    </q-icon>
                                </template>
                            </q-input>
                        </div>
                        <div>
                            <q-input v-model="person.date" label="Дата рождения" mask="##.##.####" :rules="['date']"></q-input>
                        </div>
                        <div>
                            <q-input filled v-model="person.time" mask="time" :rules="['time']">
                                <template v-slot:append>
                                    <q-icon name="access_time" class="cursor-pointer">
                                        <q-popup-proxy cover transition-show="scale" transition-hide="scale">
                                            <q-time v-model="person.time" format24h>
                                                <div class="row items-center justify-end">
                                                    <q-btn v-close-popup label="Закрыть" color="primary" flat />
                                                </div>
                                            </q-time>
                                        </q-popup-proxy>
                                    </q-icon>
                                </template>
                            </q-input>
                            <q-input v-model="person.time" label="Время рождения" mask="time" :rules="['time']"></q-input>
                        </div>

                    </div>
                </div>
                <div>
                    <q-input label="Email" v-model="userForm.contactEmail" email></q-input>
                    <q-input label="Телефон" v-model="userForm.tel"></q-input>
                    <q-input label="Телеграм" v-model="userForm.tgId"></q-input>
                </div>
                <div>
                    <q-btn label="OK" @click="onSubmit" :loading="loading" />
                </div>

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
import { sendFedback } from '@/composables/feedback';
import { createAutoUserOrder } from '@/composables/shop';
import { loading } from '@/utils/requests';
import { auth, userComputed } from '@/composables/users';

const props = defineProps({
    title: {
        type: String,
        default: ''
    },
});
const emit = defineEmits(['click']);

const productForm = ref({
    id: 1,
    type: 'product',
});

const customForm = ref({
    persons: [
        {
            name: '',
            city: '',
            date: '',
            time: '',
        }
    ]
});

const userForm = ref({
    id: null,
    email: null,
    contactEmail: null,
    tel: '',
    tgId: ''
});

const orderConfig = ref({
    autocreate: 1,
});

const rules = {
    date: v => /^-?[\d]+\-[0-1]\d\-[0-3]\d$/.test(v),
    time: v => /^([0-1]?\d|2[0-3]):[0-5]\d$/.test(v)
}

const onSubmit = async () => {
    const result = createAutoUserOrder(userForm.value, productForm.value, orderConfig.value, customForm.value);
}


const detectUser = async () => {
    const user = await auth();
    userForm.value.user_id = user.id;
    userForm.value.email = user.email;
}

//detectUser();

auth().then(() => {
    if (!userComputed) {
        return;
    }
    userForm.value.id = userComputed.value.id;
    userForm.value.email = userComputed.value.email;
});

</script>
