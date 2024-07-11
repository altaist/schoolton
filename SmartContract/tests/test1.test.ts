import { Jetton } from '../wrappers/Jetton';
import { ContractProvider, Address } from 'ton-core';

describe('Jetton Contract - Basic Initialization and Transfer', () => {
    let provider: ContractProvider;
    let jetton: Jetton;

    beforeEach(async () => {
        provider = new ContractProvider();
        jetton = new Jetton(provider);
        await jetton.deploy({ value: BigInt('1000000000') });
    });

    it('should get initial balance', async () => {
        const balance = await jetton.getBalance(new Address(0, Buffer.from([])));
        expect(balance).toBe(1000000000);
    });

    it('should transfer tokens', async () => {
        const from = new Address(0, Buffer.from([]));
        const to = new Address(1, Buffer.from([]));
        await jetton.transfer(from, to, 500000000);
        const balanceFrom = await jetton.getBalance(from);
        const balanceTo = await jetton.getBalance(to);
        expect(balanceFrom).toBe(500000000);
        expect(balanceTo).toBe(500000000);
    });

    it('should throw on insufficient balance', async () => {
        const from = new Address(0, Buffer.from([]));
        const to = new Address(1, Buffer.from([]));
        await expect(jetton.transfer(from, to, 2000000000)).rejects.toThrow();
    });
});
