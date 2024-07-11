"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const Jetton_1 = require("./Jetton");
async function main() {
    const provider = new ton_core_1.ContractProvider();
    const jetton = new Jetton_1.Jetton(provider);
    await jetton.deploy({
        value: BigInt('1000000000'), // Начальное количество токенов
    });
    console.log('Контракт успешно развернут');
}
main();
