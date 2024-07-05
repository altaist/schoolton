import { Address, Contract, ContractProvider } from 'ton-core';

export class Jetton extends Contract {
    constructor(provider: ContractProvider) {
        super(provider);
    }

    async deploy(args: { value: bigint }) {
        // Логика деплоя контракта
        await this.provider.deployContract(this, {
            value: args.value,
            initState: {
                data: this.provider.builder().storeUint(0, 64).endCell(), // начальное состояние
            }
        });
    }

    async getBalance(address: Address): Promise<number> {
        const result = await this.provider.runMethod(this, 'get_balance', [address]);
        return result.stack.readNumber();
    }

    async transfer(from: Address, to: Address, amount: number) {
        await this.provider.runMethod(this, 'transfer', [from, to, amount]);
    }
}
