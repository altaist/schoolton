import { requestGet, requestPost, requestPut, requestDelete } from '@/utils/requests'

export const createAutoUserOrder = async (user, product, orderConfig, custom) => {
    const requestData = {
        user: user,
        product: product,
        ...orderConfig,
        json_data: custom
    };

    return requestPost(route('order.store'), requestData);
}

export const updateOrder = async (orderId, form) => {
    return await requestPost(route('order.update', orderId), form);
}

export const updateOrderState = async (orderId, state) => {
    return await requestPost(route('order.updateState', orderId, state));
}

export const deleteOrder = async (orderId) => {
    return await requestDelete(route('order.delete', orderId), {
        id: orderId
    });
}

export const createPayment = async (orderId, sum) => {
    return await requestPost(route('payment.store'), {
        order_id: orderId,
        sum
    });
}

export const updatePaymentState = async (orderId, state) => {
    return await requestPut(route('payment.update.state', orderId), {
        state
    });
}

export const deletePayment = async (paymentId) => {
    return await requestDelete(route('payment.delete', paymentId), {
        id: paymentId
    });
}

export const loadOrdersForUser = async (userId) => {
    return await requestGet(route('order.user', userId));
}



