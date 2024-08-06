<template>
    {{ customForm }}
    <div>
        <div>Форма заказа</div>
        <div>
            <PersonsForm v-model='customForm'/>
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
</template>
<script setup>
import { ref, computed } from 'vue'
import { createAutoUserOrder } from '@/composables/shop';
import { sendFedback } from '@/composables/feedback';
import { loading } from '@/utils/requests';
import { auth, userComputed } from '@/composables/users';
import PersonsForm from './PersonsForm.vue'

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
