<template>
    <div class="q-my-sm q-pa-sm">
        <div class="text-h2">Личный</div>
        <div class="text-h3">Кабинет</div>
        <div>
            <div>Активные заказы</div>
            <div v-for="order in orders">
                {{ order }}
            </div>
        </div>
    </div>

</template>
<script setup>
import { ref, computed } from 'vue'
import { loadOrdersForUser } from '@/composables/shop';
import { auth } from '@composables/users'
import { usePage } from '@inertiajs/vue3'

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
            orders.value = result;
        })
});


</script>
