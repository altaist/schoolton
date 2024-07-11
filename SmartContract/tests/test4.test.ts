import { Jetton } from '../wrappers/Jetton';
import { ContractProvider, Address } from 'ton-core';

describe('Jetton Contract - Transfer Between Non-zero Addresses', () => {
    let provider: ContractProvider;
    let jetton: Jetton;

    beforeEach(async () => {
        provider = new ContractProvider();
        jetton = new Jetton(provider);
        await jetton.deploy({ value: BigInt('1000000000') });
    });

    it('should transfer tokens between non-zero addresses', async () => {
        const from = new Address(0, Buffer.from([]));
        const to = new Address(1, Buffer.from([]));
        await jetton.transfer(from, to, 500000000);
        await jetton.transfer(to, from, 200000000);
        const balanceFrom = await jetton.getBalance(from);
        const balanceTo = await jetton.getBalance(to);
        expect(balanceFrom).toBe(700000000);
        expect(balanceTo).toBe(300000000);
    });
});
