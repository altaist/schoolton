<template>
    <div>
        <q-input label="Email" v-model="userForm.contactEmail" email></q-input>
        <q-input label="Телефон" v-model="userForm.tel"></q-input>
        <q-input label="Телеграм" v-model="userForm.tgId"></q-input>
    </div>
</template>
<script setup>
import { ref, computed } from 'vue'

const userForm = defineModel();

</script>
