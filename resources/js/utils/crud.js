import { loading, get, post } from './requests';

const defaultConfig = {
    type: 'default',
    title: '',
    description: '',
    url_prefix: '',

    text_add: 'Add',
    text_remove: 'Remove'
}


export const useCrud = (configData) => {
    const getConfig = (key, def) => {
        return configData[key] || defaultConfig[key] || def;
    }

    const url = (action, id, parentId) => {
        return route('crud.' + action, [type, id, parentId])
    }

    const loadList = (filter) => {
        return get(url('list'), filter);
    }

    const loadChilds = (id, filter) => {
        return get(url('childs', id), filter);
    }

    const loadParent = (id, parentId) => {
        return get(url('parent', id, parentId));
    }

    const loadItem = (id) => {
        return get(url('item', id));
    }

    const create = (data) => {
        return post(url('create'), data);
    }

    const update = (id, data) => {
        return patch(url('store', id), data);
    }

    const del = (id) => {
        return post(url('delete', id), filter);
    }

    const onCrud = (action, data) => {
    }

    const config = (key, def) => {
        if(!key) {
            return configData;
        }
        return config(key, def);
    }

    const type = getConfig('type');

    return {
        type,
        config,
        onCrud,
        loadList,
        loadChilds,
        loadItem,
        loadParent,
        create,
        update,
        del
    }
}


