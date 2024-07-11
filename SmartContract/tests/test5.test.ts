import { Jetton } from '../wrappers/Jetton';
import { ContractProvider, Address } from 'ton-core';

describe('Jetton Contract - Boundary Values', () => {
    let provider: ContractProvider;
    let jetton: Jetton;

    beforeEach(async () => {
        provider = new ContractProvider();
        jetton = new Jetton(provider);
        await jetton.deploy({ value: BigInt('1000000000') });
    });

    it('should handle maximum token transfer', async () => {
        const from = new Address(0, Buffer.from([]));
        const to = new Address(1, Buffer.from([]));
        await jetton.transfer(from, to, Number.MAX_SAFE_INTEGER);
        const balanceFrom = await jetton.getBalance(from);
        const balanceTo = await jetton.getBalance(to);
        expect(balanceFrom).toBe(1000000000 - Number.MAX_SAFE_INTEGER);
        expect(balanceTo).toBe(Number.MAX_SAFE_INTEGER);
    });

    it('should handle minimum token transfer (zero)', async () => {
        const from = new Address(0, Buffer.from([]));
        const to = new Address(1, Buffer.from([]));
        await jetton.transfer(from, to, 0);
        const balanceFrom = await jetton.getBalance(from);
        const balanceTo = await jetton.getBalance(to);
        expect(balanceFrom).toBe(1000000000);
        expect(balanceTo).toBe(0);
    });
});
