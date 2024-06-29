<template>
    <block text-color="text-black" bg-color="" margin="q-my-sm">
        <q-item clickable v-ripple active-class="text-orange">
            <q-item-section avatar>
                <q-icon :name="item.icon" />
            </q-item-section>
            <q-item-section>
                {{ item.title }}
            </q-item-section>

            <q-item-section>
                <q-chip color="primary" text-color="white" icon="event">
                    TON
                </q-chip>
            </q-item-section>
            <q-item-section side>
                <div>{{ item.price }} {{ item.currency || 'STDNT' }}</div>
                <div><Button label="Join" @click="emit('click:join', item)" /></div>
            </q-item-section>
        </q-item>

        <!--div class="row">
            <div class="col-2"><q-icon :name="item.icon" /></div>
            <div class="col-4">{{ item.title }}</div>
            <div class="col-2">
                <q-chip clickable @click="onClick" color="primary" text-color="white" icon="event">
                    TON
                </q-chip>
            </div>
            <div class="col-4">{{ item.price }} {{ item.currency || 'STDNT' }}</div>
            <div>{{ item.currency || 'STDNT' }}</div>
            <div><Button label="Join" @click="emit('click:join', item)" /></div>
        </div-->


    </block>
</template>
<script setup>
import { ref, toRefs } from 'vue'
import Block from '@shared/Block.vue';
import Button from '@shared/Button.vue';


defineProps({
    visibility: {
        type: Boolean,
        default: false
    },
    item: {
        type: Object
    }
});

const emit = defineEmits(['click:join']);

</script>
