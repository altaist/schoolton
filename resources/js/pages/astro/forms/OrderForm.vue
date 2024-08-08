<template>
    <div>
        <div>
            <SectionHeader2>Информация для карты</SectionHeader2>
            <PersonsForm v-model='customForm' :errors="apiErrors"/>
        </div>
        <div>
            <SectionHeader2>Контактная информация</SectionHeader2>
            <ProfileForm v-model="userForm" :errors="apiErrors" />
        </div>
        <div class="q-my-md text-center">
            <div class="text-h5">Стоимость: 490 руб</div>

        </div>
        <div class="q-my-xl text-center">
            <q-btn label="Заказать" @click="onSubmit" :loading="loading" color="deep-orange" rounded size="xl"/>
        </div>

    </div>
    <q-dialog v-model="visibleFormCompletedDialog">
        <OrderCompletedDialog :sum="490" @click:payment="onPaymentStart" @click:lk="onGoLk" />
    </q-dialog>
    <q-dialog v-model="visiblePaymentDialog">
        <FakePaymentDialog :sum="490" @click:payment="onGoLk" @click:lk="onGoLk" />
    </q-dialog>
</template>
<script setup>
import { ref, computed } from 'vue'
import { createAutoUserOrder } from '@/composables/shop';
import { loading } from '@/utils/requests';
import { auth, userComputed } from '@/composables/users';
import PersonsForm from './PersonsForm.vue'
import ProfileForm from './ProfileForm.vue'
import SectionHeader2 from "@/shared/SectionHeader2.vue"
import OrderCompletedDialog from './OrderCompletedDialog.vue';
import FakePaymentDialog from './FakePaymentDialog.vue';

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
    socialId: '',
    socialType: 'tg'
});

const orderData = ref({
    autocreate: 1,
    price: 10
});

const apiErrors = ref([]);

const visibleFormCompletedDialog = ref(false);
const visiblePaymentDialog = ref(false);

const rules = {
    date: v => /^-?[\d]+\-[0-1]\d\-[0-3]\d$/.test(v),
    time: v => /^([0-1]?\d|2[0-3]):[0-5]\d$/.test(v)
}

const onSubmit = async () => {

    createAutoUserOrder(userForm.value, productForm.value, orderData.value, customForm.value)
        .then((result) => {
            console.log('Submit result: ' + result);
            if (result.errors) {
                apiErrors.value = result.errors;
            } else if(result.id) {
                apiErrors.value = null;
                const order = result;
                orderData.value.id = order.id;
                visibleFormCompletedDialog.value = true
            }
        });
}
const onPaymentStart = async () => {
    visibleFormCompletedDialog.value = false;
    visiblePaymentDialog.value = true;
}

const onPaymentCompleted = async () => {
    visiblePaymentDialog.value = false;
    onGoLk();
}

const onGoLk = async () => {
    visibleFormCompletedDialog.value = false;
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
    userForm.value.tel = userComputed.value.contact_tel;
    userForm.value.socialId = userComputed.value.social_id;
});
</script>
