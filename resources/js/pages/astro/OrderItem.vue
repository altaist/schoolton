<template>
    <div class="q-my-sm q-pa-sm">
        <div class="q-pa-lg bg-grey-3 rounded-1">
            <div class="text-h5">Заказ{{ orderRef.id }}</div>
            <div v-if="false">{{ orderRef.json_data }}</div>
            <div v-if="!orderRef.paid_at" class="q-my-md text-center">
                <q-btn label="Оплатить" @click="visibleFormCompleteDialog = true" color="deep-orange"/>
            </div>
            <div v-else>
                <div class="text-positive">Оплачено</div>
            </div>
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

            <q-card-section class="q-pt-none" v-if="false">
                Получите скидку <b>100</b> рублей при оплате заказа в течение ближайших 5 минут
            </q-card-section>

            <q-card-section class="q-pt-none" v-if="false">
                Текущая стоимость заказа:<br> <span class="text-strike">700</span> <span class="text-h6 text-positive">600</span> рублей
            </q-card-section>

            <q-card-actions align="center">
                <q-btn label="Оплатить 600 рублей" @click="onPaymentComplete" color="positive" />
            </q-card-actions>
        </q-card>
    </q-dialog>
</template>
<script setup>
import { ref, toRef, computed } from 'vue'
import { completePayment } from '@/composables/shop';

const props = defineProps({
    order: {
        type: Object,
    },
});
const emit = defineEmits(['click']);

const orderRef = ref(props.order);

const visibleFormCompleteDialog = ref(false);

const onPaymentComplete = async () => {
    visibleFormCompleteDialog.value = false;
    const data = await completePayment(orderRef.value.id, orderRef.value.price || 10);
    if (data.order) {
        orderRef.value = data.order;
    }
    // window.location = route('lk');
}
</script>
