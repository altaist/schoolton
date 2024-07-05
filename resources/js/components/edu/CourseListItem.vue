<template>
    <block text-color="text-black" bg-color="" margin="q-my-sm">
        <!--q-item clickable v-ripple active-class="text-orange">
            <q-item-section avatar>
                <q-icon :name="item.icon" size="xl"/>
            </q-item-section>
            <q-item-section>
                <div>{{ item.title }}</div>
                <div>{{ item.subTitle }}</div>
            </q-item-section>

            <q-item-section side>
                <div>{{ item.price }} {{ item.currency || 'STDNT' }}</div>
                <div><Button label="Join" @click="emit('click:join', item)" /></div>
            </q-item-section>
        </q-item-->

        <div class="row q-col-gutter-sm"    >
            <div class="col-2 text-center"><q-icon :name="item.icon" size="xl"/></div>
            <div class="col-6">
                <div class="text-h6">{{ item.title }}</div>
                <div class="text-subtitle text-grey">{{ item.subTitle }}</div>
            </div>
            <!--div class="col-3 text-center">
                <q-chip clickable color="secondary" text-color="white" v-for="tag in item.tags" >
                    {{ tag }}
                </q-chip>
            </div-->
            <div class="col-4 text-right">
                <div>
                    <div>{{ item.price }} {{ item.currency || 'STDNT' }}</div>
                    <div v-if="actionJoin"><Button label="Join" @click="emit('click:join', item)" :color="getBgColor()" /></div>
                    <div class="q-my-sm"><Button label="Details" @click="emit('click:details', item)" :color="getBgColor()" /></div>
                </div>
            </div>

        </div>

    </block>
</template>
<script setup>
import { ref, toRefs } from 'vue'
import useUi from '@/composables/ui';
import Block from '@shared/Block.vue';
import Button from '@shared/Button.vue';


defineProps({
    visibility: {
        type: Boolean,
        default: false
    },
    item: {
        type: Object
    },
    actionJoin: {
        type: Boolean,
        default: true
    }
});

const emit = defineEmits(['click:join', 'click:details']);

const { getMode, getBgColor } = useUi();

</script>
