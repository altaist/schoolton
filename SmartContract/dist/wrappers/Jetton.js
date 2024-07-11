"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.Jetton = void 0;
class Jetton extends ton_core_1.Contract {
    constructor(provider) {
        super(provider);
    }
    async deploy(args) {
        // Логика деплоя контракта
        await this.provider.deployContract(this, {
            value: args.value,
            initState: {
                data: this.provider.builder().storeUint(0, 64).endCell(), // начальное состояние
            }
        });
    }
    async getBalance(address) {
        const result = await this.provider.runMethod(this, 'get_balance', [address]);
        return result.stack.readNumber();
    }
    async transfer(from, to, amount) {
        await this.provider.runMethod(this, 'transfer', [from, to, amount]);
    }
}
exports.Jetton = Jetton;
