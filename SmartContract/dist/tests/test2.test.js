"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const Jetton_1 = require("../wrappers/Jetton");
const ton_core_1 = require("ton-core");
describe('Jetton Contract - Multiple Transfers and Edge Cases', () => {
    let provider;
    let jetton;
    beforeEach(async () => {
        provider = new ton_core_1.ContractProvider();
        jetton = new Jetton_1.Jetton(provider);
        await jetton.deploy({ value: BigInt('1000000000') });
    });
    it('should correctly initialize total supply', async () => {
        const totalSupply = await jetton.getBalance(new ton_core_1.Address(0, Buffer.from([])));
        expect(totalSupply).toBe(1000000000);
    });
    it('should handle multiple transfers', async () => {
        const from = new ton_core_1.Address(0, Buffer.from([]));
        const to1 = new ton_core_1.Address(1, Buffer.from([]));
        const to2 = new ton_core_1.Address(2, Buffer.from([]));
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
        const from = new ton_core_1.Address(0, Buffer.from([]));
        const to = new ton_core_1.Address(1, Buffer.from([]));
        await expect(jetton.transfer(from, to, -100000000)).rejects.toThrow();
    });
});
