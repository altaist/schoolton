<template>
    <div>
        <div class="text-h6">Контактные данные</div>

        <div>
            <q-input label="Email" v-model="userForm.contactEmail" email :error-message="err('contactEmail')" :error="errcheck('contactEmail')"></q-input>
            <q-input label="Телефон" v-model="userForm.tel" :error-message="err('tel')" :error="errcheck('tel')"></q-input>
            <q-input label="Телеграмм" v-model="userForm.socialId" :error-message="err('socialId')" :error="errcheck('socialId')"></q-input>
        </div>

    </div>
</template>
<script setup>
import { ref, toRefs, toRef, computed } from 'vue'
import { useLaravelErrors } from '@/utils/requests'

const userForm = defineModel();
const props = defineProps(['errors']);

const errorData = toRef(props, 'errors');
const { err, errcheck } = useLaravelErrors(errorData);

</script>
