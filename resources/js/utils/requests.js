import { ref } from 'vue'
import axios from 'axios';

export const loading = ref(false);
export const request = async (url, data, method = 'post', onError = (err) => console.log(err) ) => {
    try {
        loading.value = true;
        const result = await axios({
            method,
            url,
            data
        });
        if(!result.status == 200) {
            return null;
        }
        const resultData = result.data ? result.data : null;
        return resultData;
    } catch (error) {
        onError(error);
    } finally {
        loading.value = false;
    }
}
export const get = (url, data) =>  request(url, data, 'get');
export const post = (url, data) =>  request(url, data);





