"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const Jetton_1 = require("../wrappers/Jetton");
describe('Jetton Contract - Reinitialization', () => {
    let provider;
    let jetton;
    beforeEach(async () => {
        provider = new ton_core_1.ContractProvider();
        jetton = new Jetton_1.Jetton(provider);
        await jetton.deploy({ value: BigInt('1000000000') });
    });
    it('should not allow reinitialization', async () => {
        await expect(jetton.deploy({ value: BigInt('500000000') })).rejects.toThrow();
    });
});
