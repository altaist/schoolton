import { Jetton } from '../wrappers/Jetton';
import { ContractProvider, Address } from 'ton-core';

describe('Jetton Contract - Zero Balance After Transfer', () => {
    let provider: ContractProvider;
    let jetton: Jetton;

    beforeEach(async () => {
        provider = new ContractProvider();
        jetton = new Jetton(provider);
        await jetton.deploy({ value: BigInt('1000000000') });
    });

    it('should zero balance after transferring all tokens', async () => {
        const from = new Address(0, Buffer.from([]));
        const to = new Address(1, Buffer.from([]));
        await jetton.transfer(from, to, 1000000000);
        const balanceFrom = await jetton.getBalance(from);
        const balanceTo = await jetton.getBalance(to);
        expect(balanceFrom).toBe(0);
        expect(balanceTo).toBe(1000000000);
    });
});
