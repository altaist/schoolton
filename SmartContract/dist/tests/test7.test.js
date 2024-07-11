"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const Jetton_1 = require("../wrappers/Jetton");
const ton_core_1 = require("ton-core");
describe('Jetton Contract - Invalid Addresses', () => {
    let provider;
    let jetton;
    beforeEach(async () => {
        provider = new ton_core_1.ContractProvider();
        jetton = new Jetton_1.Jetton(provider);
        await jetton.deploy({ value: BigInt('1000000000') });
    });
    it('should throw on transfer to invalid address', async () => {
        const from = new ton_core_1.Address(0, Buffer.from([]));
        const to = new ton_core_1.Address(0, Buffer.from([1, 2, 3])); // Invalid address
        await expect(jetton.transfer(from, to, 500000000)).rejects.toThrow();
    });
});
