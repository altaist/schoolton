import { Jetton } from '../wrappers/Jetton';
import { ContractProvider, Address } from 'ton-core';

describe('Jetton Contract - Invalid Addresses', () => {
    let provider: ContractProvider;
    let jetton: Jetton;

    beforeEach(async () => {
        provider = new ContractProvider();
        jetton = new Jetton(provider);
        await jetton.deploy({ value: BigInt('1000000000') });
    });

    it('should throw on transfer to invalid address', async () => {
        const from = new Address(0, Buffer.from([]));
        const to = new Address(0, Buffer.from([1, 2, 3])); // Invalid address
        await expect(jetton.transfer(from, to, 500000000)).rejects.toThrow();
    });
});
