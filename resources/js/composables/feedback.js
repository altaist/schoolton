import { requestPost } from '@/utils/requests';

export const sendFedback = (form, type) => {
    return requestPost(route('feedback.store'), {
        type,
        form_data: form
    })
}

