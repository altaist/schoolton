<template>
    <div class="q-my-sm full-width">
        <div class="q-my-md">
            <q-input v-model="queryText" filled type="textarea" label="Course theme:" class="full-width"/>
        </div>
        <div class="q-my-md">
            <q-btn label="Create a course" @click="onCreateClick" />
        </div>
        <q-inner-loading :showing="loading">
            <q-spinner-gears size="50px" color="primary" />
        </q-inner-loading>
    </div>
</template>
<script setup>
import { ref, toRefs } from 'vue'
import axios from 'axios';
import Block from '@shared/Block.vue';
import useUi from '@/composables/ui';

defineProps({
    data: {
        type: Boolean,
        default: false
    },
});
const emit = defineEmits(['gpt:completed']);

const { loading } = useUi();
const queryText = ref(`The Open Network (TON) is a decentralized and open internet platform made up of several components. These include: TON Blockchain, TON DNS, TON Storage, and TON Sites.`);

const processTextRequest = async (message) => {
    loading.value = true;
    try {
        const result = await axios.post(route('gpt'), { message });
        const resultData = (result.data || {}).title ? result.data : testData ;
        return resultData;
    } catch (error) {
        console.log(error);
    } finally {
        loading.value = false;
    }


}

const onCreateClick = async () => {
    const result = await processTextRequest(queryText.value);

    emit('gpt:completed', result);
}

const testData = {
    "title": "Introduction to The Open Network (TON)",
    "topics": [
        {
            "title": "Overview of The Open Network (TON)",
            "quiz": {
                "qs": [
                    {
                        "txt": "What is The Open Network (TON)?",
                        "vs": [
                            {
                                "idx": 0,
                                "txt": "A centralized internet platform"
                            },
                            {
                                "idx": 1,
                                "txt": "A decentralized and open internet platform"
                            },
                            {
                                "idx": 2,
                                "txt": "A type of cryptocurrency"
                            },
                            {
                                "idx": 3,
                                "txt": "A web hosting service"
                            }
                        ],
                        "as": [
                            1
                        ]
                    },
                    {
                        "txt": "Which of the following is a main component of TON?",
                        "vs": [
                            {
                                "idx": 0,
                                "txt": "TON Blockchain"
                            },
                            {
                                "idx": 1,
                                "txt": "TON Apps"
                            },
                            {
                                "idx": 2,
                                "txt": "TON Services"
                            },
                            {
                                "idx": 3,
                                "txt": "TON Cloud"
                            }
                        ],
                        "as": [
                            0
                        ]
                    },
                    {
                        "txt": "What is the core protocol of TON?",
                        "vs": [
                            {
                                "idx": 0,
                                "txt": "TON DNS"
                            },
                            {
                                "idx": 1,
                                "txt": "TON Storage"
                            },
                            {
                                "idx": 2,
                                "txt": "TON Blockchain"
                            },
                            {
                                "idx": 3,
                                "txt": "TON Sites"
                            }
                        ],
                        "as": [
                            2
                        ]
                    }
                ]
            }
        },
        {
            "title": "Components of The Open Network (TON)",
            "quiz": {
                "qs": [
                    {
                        "txt": "Which component connects TON\u2019s underlying infrastructure?",
                        "vs": [
                            {
                                "idx": 0,
                                "txt": "TON DNS"
                            },
                            {
                                "idx": 1,
                                "txt": "TON Sites"
                            },
                            {
                                "idx": 2,
                                "txt": "TON Storage"
                            },
                            {
                                "idx": 3,
                                "txt": "TON Blockchain"
                            }
                        ],
                        "as": [
                            3
                        ]
                    },
                    {
                        "txt": "What does TON DNS provide?",
                        "vs": [
                            {
                                "idx": 0,
                                "txt": "Storage solutions"
                            },
                            {
                                "idx": 1,
                                "txt": "Blockchain protocols"
                            },
                            {
                                "idx": 2,
                                "txt": "Decentralized naming system"
                            },
                            {
                                "idx": 3,
                                "txt": "Web hosting services"
                            }
                        ],
                        "as": [
                            2
                        ]
                    },
                    {
                        "txt": "Which component of TON deals with decentralized file storage?",
                        "vs": [
                            {
                                "idx": 0,
                                "txt": "TON DNS"
                            },
                            {
                                "idx": 1,
                                "txt": "TON Storage"
                            },
                            {
                                "idx": 2,
                                "txt": "TON Sites"
                            },
                            {
                                "idx": 3,
                                "txt": "TON Blockchain"
                            }
                        ],
                        "as": [
                            1
                        ]
                    }
                ]
            }
        }
    ]
}

</script>
