<template>
    <div class="q-my-sm q-pa-sm">
        <Section title="Scan">
            <q-btn label="Отсканируй QR код" class="full-width" @click="showQRScanner" />
        </Section>

    </div>
</template>
<script setup>
import { ref, computed } from 'vue'
import Block from '@shared/Block.vue';
import Section from '@shared/Section.vue';

const props = defineProps({
    title: {
        type: String,
        default: ''
    },
});
const emit = defineEmits(['click']);

const showQRScanner = () => {
    const par = {
        text: "Press to scan"
    };
    TWA.showScanQrPopup(par);
}

const processQRCode = (data) => {
    TWA.closeScanQrPopup();
    TWA.showAlert(data.data);
}

TWA.onEvent('qrTextReceived', processQRCode);
</script>
