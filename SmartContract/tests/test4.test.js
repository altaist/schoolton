"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const Jetton_1 = require("../wrappers/Jetton");
const ton_core_1 = require("ton-core");
describe('Jetton Contract - Transfer Between Non-zero Addresses', () => {
    let provider;
    let jetton;
    beforeEach(async () => {
        provider = new ton_core_1.ContractProvider();
        jetton = new Jetton_1.Jetton(provider);
        await jetton.deploy({ value: BigInt('1000000000') });
    });
    it('should transfer tokens between non-zero addresses', async () => {
        const from = new ton_core_1.Address(0, Buffer.from([]));
        const to = new ton_core_1.Address(1, Buffer.from([]));
        await jetton.transfer(from, to, 500000000);
        await jetton.transfer(to, from, 200000000);
        const balanceFrom = await jetton.getBalance(from);
        const balanceTo = await jetton.getBalance(to);
        expect(balanceFrom).toBe(700000000);
        expect(balanceTo).toBe(300000000);
    });
});
