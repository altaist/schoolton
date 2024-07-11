import { Jetton } from '../wrappers/Jetton';
import { ContractProvider, Address } from 'ton-core';

describe('Jetton Contract - Self Transfer', () => {
    let provider: ContractProvider;
    let jetton: Jetton;

    beforeEach(async () => {
        provider = new ContractProvider();
        jetton = new Jetton(provider);
        await jetton.deploy({ value: BigInt('1000000000') });
    });

    it('should allow transferring tokens to self', async () => {
        const address = new Address(0, Buffer.from([]));
        await jetton.transfer(address, address, 500000000);
        const balance = await jetton.getBalance(address);
        expect(balance).toBe(1000000000);
    });
});
