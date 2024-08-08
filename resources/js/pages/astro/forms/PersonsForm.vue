<template>
    <div class="q-my-sm">
        <div v-for="person in customForm.persons">
            <div class="q-my-md">
                <div>
                    <q-input v-model="person.personName" label="Имя"></q-input>
                </div>
                <div>
                    <q-input v-model="person.city" label="Город"></q-input>
                </div>
                <div>
                    <q-input v-model="person.date" label="Дата рождения" mask="##.##.####">
                        <template v-slot:append>
                            <q-icon name="event" class="cursor-pointer">
                                <q-popup-proxy cover transition-show="scale" transition-hide="scale">
                                    <q-date v-model="person.date" mask="DD.MM.YYYY">
                                        <div class="row items-center justify-end">
                                            <q-btn v-close-popup label="Закрыть" color="primary" flat />
                                        </div>
                                    </q-date>
                                </q-popup-proxy>
                            </q-icon>
                        </template>
                    </q-input>
                </div>
                <div>
                    <q-input v-model="person.time" label="Время рождения" mask="time" :rules="['time']"></q-input>
                </div>
                <div v-if="false">
                    <q-input v-model="person.date" label="Дата рождения" mask="##.##.####" :rules="['date']"></q-input>
                </div>
                <div v-if="false">
                    <q-input filled v-model="person.time" mask="time" label="Вреия рождения" :rules="['time']">
                        <template v-slot:append>
                            <q-icon name="access_time" class="cursor-pointer">
                                <q-popup-proxy cover transition-show="scale" transition-hide="scale">
                                    <q-time v-model="person.time" format24h>
                                        <div class="row items-center justify-end">
                                            <q-btn v-close-popup label="Закрыть" color="primary" flat />
                                        </div>
                                    </q-time>
                                </q-popup-proxy>
                            </q-icon>
                        </template>
                    </q-input>

                </div>

            </div>


        </div>

    </div>
</template>
<script setup>
import { ref, toRef, computed } from 'vue'
import { useLaravelErrors } from '@/utils/requests'

const customForm = defineModel();

const props = defineProps(['errors']);

const errorData = toRef(props, 'errors');
const { err, errcheck } = useLaravelErrors(errorData);

</script>
