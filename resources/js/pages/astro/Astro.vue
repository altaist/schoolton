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
        <q-dialog v-model="visibleFormCompleteDialog">
            <q-card class="q-pa-md">
                <q-card-section>
                    <div class="text-h6 text-left">Ваш заказ сформирован!</div>
                </q-card-section>
                <q-card-section class="q-pt-none">
                    <div>Мы получили необходимую информацию и готовы к созданию карты</div>
                </q-card-section>

                <q-card-section class="q-pt-none">
                    Получите скидку <b>100</b> рублей при оплате заказа в течение ближайших 5 минут
                </q-card-section>

                <q-card-section class="q-pt-none">
                    Текущая стоимость заказа:<br> <span class="text-strike">700</span> <span class="text-h6 text-positive">600</span> рублей
                </q-card-section>

                <q-card-actions align="center">

                    <q-btn  label="Оплатить 600 рублей" @click="onPaymentStart" color="positive" />
                </q-card-actions>
            </q-card>
        </q-dialog>
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

const orderData = ref({
    autocreate: 1,
    price: 10
});

const visibleFormCompleteDialog = ref(false);

const rules = {
    date: v => /^-?[\d]+\-[0-1]\d\-[0-3]\d$/.test(v),
    time: v => /^([0-1]?\d|2[0-3]):[0-5]\d$/.test(v)
}

const onSubmit = async () => {
    createAutoUserOrder(userForm.value, productForm.value, orderData.value, customForm.value)
        .then((order) => {
            orderData.value.id = order.id;
            visibleFormCompleteDialog.value = true
        });

}
const onPaymentStart = async () => {
    visibleFormCompleteDialog.value = false;
    createPayment(orderData.value.id, orderData.value.price);
    // window.location = route('lk');
}


const detectUser = async () => {
    const user = await auth();
    userForm.value.user_id = user.id;
    userForm.value.email = user.email;
}

//detectUser();

auth(true).then(() => {
    if (!userComputed) {
        return;
    }
    userForm.value.id = userComputed.value.id;
    userForm.value.email = userComputed.value.email;
    userForm.value.contactEmail = userComputed.value.contact_email;
});

</script>
