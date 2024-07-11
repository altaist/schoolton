import { TonConnectUI } from '@tonconnect/ui';

async function sendTransaction(currentWallet, sum) {
    const transaction = {
        validUntil: Math.floor(Date.now() / 1000) + 60, // 60 sec
        messages: [
            {
                address: "EQBBJBB3HagsujBqVfqeDUPJ0kXjgTPLWPFFffuNXNiJL0aA",
                amount: sum,
                // stateInit: "base64bocblahblahblah==" // just for instance. Replace with your transaction initState or remove
            }
        ]
    }

    try {
        const result = await tonConnectUI.sendTransaction(transaction);

        // you can use signed boc to find the transaction 
        const someTxData = await myAppExplorerService.getTransaction(result.boc);
        return someTxData;

    } catch (e) {
        console.error(e);
        return -1;
    }

}