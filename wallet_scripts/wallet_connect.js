import { TonConnectUI } from '@tonconnect/ui';


async function walletConnect(path_to_manifest) {

    tonConnectUI = new TonConnectUI({
        manifestUrl: path_to_manifest,
    });

    try {
        await tonConnectUI.openSingleWalletModal('telegram-wallet');
        const currentWallet = tonConnectUI.wallet;
        return currentWallet;
    } catch (error) {
        console.error("Failed to connect wallet", error);
        return -1;
    }
}