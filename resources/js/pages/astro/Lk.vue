<template>
    <div class="q-my-sm q-pa-md">
        <SectionHeader>Личный кабинет</SectionHeader>
        <div class="q-my-xl">
            <SectionHeader2>Мои заказы</SectionHeader2>
            <div v-for="order in orders">
                <OrderItem :order="order"/>
            </div>
        </div>
    </div>

</template>
<script setup>
import { ref, computed } from 'vue'
import { loadOrdersForUser } from '@/composables/shop';
import { auth } from '@composables/users'
import { usePage } from '@inertiajs/vue3'
import OrderItem from './OrderItem.vue';
import SectionHeader from '@shared/SectionHeader.vue';
import SectionHeader2 from '@shared/SectionHeader2.vue';

const props = defineProps({
    data: {
        type: Object
    }
});
const emit = defineEmits(['click']);

console.log(usePage().props);
const orders = ref(props.data.orders);
const user = ref(props.data.user);

auth().then((u)=> {
    user.value = u;
    loadOrdersForUser(user.value.id)
        .then((result) => {
            //orders.value = result;
        })
});


</script>
