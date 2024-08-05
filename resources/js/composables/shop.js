import { requestGet, requestPost } from '@/utils/requests'

export const createAutoUserOrder = async (user, product, orderConfig, custom) => {
    const requestData = {
        user: user,
        product: product,
        ...orderConfig,
        json_data: custom
    };

    return await requestPost(route('order.store'), requestData);
}

export const updateOrder = async (form) => {
    return await requestPost(route('order.update'), form);
}

export const updateOrderState = async (orderId, state) => {
    return await requestPost(route('order.updateState', orderId, state));
}

export const getOrdersForUser = async (userId) => {
    return await requestGet(route('order.user', userId));
}



