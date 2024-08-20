<template>
    <div class="q-ma-sm">
        <div>
            <q-form>
                <q-input label="Email *" color="white" v-model="userForm.contactEmail" :error-message="err('tel')" :error="errcheck('tel')" dark />
                <q-input label="Телефон" v-model="userForm.tel" :error-message="err('tel')" :error="errcheck('tel')" dark/>
                <q-input label="Телеграмм" v-model="userForm.socialId" :error-message="err('socialId')" :error="errcheck('socialId')" dark/>
            </q-form>
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
