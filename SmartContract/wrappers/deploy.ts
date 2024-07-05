import { ContractProvider, Address } from 'ton-core';
import { Jetton } from './Jetton';

async function main() {
    const provider = new ContractProvider();
    const jetton = new Jetton(provider);

    await jetton.deploy({
        value: BigInt('1000000000'),  // Начальное количество токенов
    });

    console.log('Контракт успешно развернут');
}
main();
