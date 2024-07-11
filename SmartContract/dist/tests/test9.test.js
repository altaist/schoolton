"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const Jetton_1 = require("../wrappers/Jetton");
const ton_core_1 = require("ton-core");
describe('Jetton Contract - Transfer To and From Same Address', () => {
    let provider;
    let jetton;
    beforeEach(async () => {
        provider = new ton_core_1.ContractProvider();
        jetton = new Jetton_1.Jetton(provider);
        await jetton.deploy({ value: BigInt('1000000000') });
    });
    it('should handle transferring to and from the same address', async () => {
        const address = new ton_core_1.Address(0, Buffer.from([]));
        await jetton.transfer(address, address, 0);
        const balance = await jetton.getBalance(address);
        expect(balance).toBe(1000000000);
    });
});
