<template>
    <!-- Order Form-->
    <div class="container">
        <div class="text-center" style="margin: 0px; color:white; background-color: #6a5570">
            <div class=" q-pa-lg text-center">
                <h2 class="my-5">Заказать натальную карту</h2>
                <div class="text-center q-py-lg">
                    <OrderForm />
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import OrderForm from './forms/OrderForm.vue';
</script>
