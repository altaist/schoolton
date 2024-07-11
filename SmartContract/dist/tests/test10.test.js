"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const Jetton_1 = require("../wrappers/Jetton");
const ton_core_1 = require("ton-core");
describe('Jetton Contract - Multiple Sequential Transfers', () => {
    let provider;
    let jetton;
    beforeEach(async () => {
        provider = new ton_core_1.ContractProvider();
        jetton = new Jetton_1.Jetton(provider);
        await jetton.deploy({ value: BigInt('1000000000') });
    });
    it('should handle multiple sequential transfers', async () => {
        const from = new ton_core_1.Address(0, Buffer.from([]));
        const to1 = new ton_core_1.Address(1, Buffer.from([]));
        const to2 = new ton_core_1.Address(2, Buffer.from([]));
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
