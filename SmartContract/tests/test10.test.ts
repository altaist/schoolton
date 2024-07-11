import { Jetton } from '../wrappers/Jetton';
import { ContractProvider, Address } from 'ton-core';

describe('Jetton Contract - Multiple Sequential Transfers', () => {
    let provider: ContractProvider;
    let jetton: Jetton;

    beforeEach(async () => {
        provider = new ContractProvider();
        jetton = new Jetton(provider);
        await jetton.deploy({ value: BigInt('1000000000') });
    });

    it('should handle multiple sequential transfers', async () => {
        const from = new Address(0, Buffer.from([]));
        const to1 = new Address(1, Buffer.from([]));
        const to2 = new Address(2, Buffer.from([]));

        await jetton.transfer(from, to1, 200000000);
        await jetton.transfer(to1, to2, 100000000);
        await jetton.transfer(to2, from, 50000000);

        const balanceFrom = await jetton.getBalance(from);
        const balanceTo1 = await jetton.getBalance(to1);
        const balanceTo2 = await jetton.getBalance(to2);

        expect(balanceFrom).toBe(850000000);
        expect(balanceTo1).toBe(100000000);
        expect(balanceTo2).toBe(50000000);
    });
});
