<template>
    {{ customForm }}
    <div>
        <div>Форма заказа</div>
        <div>
            <PersonsForm v-model='customForm'/>
        </div>
        <div>
            <ProfileForm v-model="userForm"/>
        </div>
        <div>
            <q-btn label="OK" @click="onSubmit" :loading="loading" />
        </div>

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
</template>
<script setup>
import { ref, computed } from 'vue'
import { createAutoUserOrder } from '@/composables/shop';
import { loading } from '@/utils/requests';
import { auth, userComputed } from '@/composables/users';
import PersonsForm from './PersonsForm.vue'
import ProfileForm from './ProfileForm.vue'

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
    // createPayment(orderData.value.id, orderData.value.price);
    window.location = route('lk');
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
