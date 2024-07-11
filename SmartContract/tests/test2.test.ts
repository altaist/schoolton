import { Jetton } from '../wrappers/Jetton';
import { ContractProvider, Address } from 'ton-core';

describe('Jetton Contract - Multiple Transfers and Edge Cases', () => {
    let provider: ContractProvider;
    let jetton: Jetton;

    beforeEach(async () => {
        provider = new ContractProvider();
        jetton = new Jetton(provider);
        await jetton.deploy({ value: BigInt('1000000000') });
    });

    it('should correctly initialize total supply', async () => {
        const totalSupply = await jetton.getBalance(new Address(0, Buffer.from([])));
        expect(totalSupply).toBe(1000000000);
    });

    it('should handle multiple transfers', async () => {
        const from = new Address(0, Buffer.from([]));
        const to1 = new Address(1, Buffer.from([]));
        const to2 = new Address(2, Buffer.from([]));

        await jetton.transfer(from, to1, 300000000);
        await jetton.transfer(from, to2, 200000000);

        const balanceFrom = await jetton.getBalance(from);
        const balanceTo1 = await jetton.getBalance(to1);
        const balanceTo2 = await jetton.getBalance(to2);

        expect(balanceFrom).toBe(500000000);
        expect(balanceTo1).toBe(300000000);
        expect(balanceTo2).toBe(200000000);
    });

    it('should not allow transferring negative amount', async () => {
        const from = new Address(0, Buffer.from([]));
        const to = new Address(1, Buffer.from([]));
        await expect(jetton.transfer(from, to, -100000000)).rejects.toThrow();
    });
});
