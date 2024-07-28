import { loading, requestGet, requestPost, requestPut, requestDelete } from './requests';

const defaultConfig = {
    type: 'default',
    title: '',
    description: '',
    url_prefix: '',

    text_add: 'Add',
    text_remove: 'Remove'
}

const makeUrl = (prefix, type, action, id) => {
    return route('crud.' + (prefix ? prefix + "." : '') + action, { type, id })
}


export const useCrud = (configData, routePrefix = 'api') => {
    const getConfig = (key, def) => {
        return configData[key] || defaultConfig[key] || def;
    }

    const url = (action, id, parentId) => {
        const prefix = routePrefix  || getConfig('route_prefix');
        return makeUrl(prefix, type, action, id, parentId);
        //return route('crud.' + prefix + (prefix ? '.' : '') + action, { type, id })
    }

    const loadItem = (id) => {
        return requestGet(url('show', id));
    }

    const loadList = (filter) => {
        return requestGet(url('index'), filter);
    }

    const loadChilds = (id, filter) => {
        return requestGet(url('childs', id), filter);
    }

    const loadParent = (id, parentId) => {
        return requestGet(url('parent', id, parentId));
    }

    const store = (data) => {
        return requestPost(url('store'), data);
    }

    const update = (id, data) => {
        return requestPut(url('update', id), data);
    }

    const del = (id) => {
        return requestDelete(url('destroy', id));
    }

    const onCrud = (action, data, id) => {
        switch (action) {
            case 'store':
                return store(data);
            case 'list':
                return loadList(data);
            case 'item':
                return loadItem(id);
            case 'childs':
                return loadChilds(data);
            case 'parent':
                return loadParent(data);
            case 'update':
                return update(id, data);
            case 'delete':
                return del(id);
            default:
                break;
        }
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
        store,
        update,
        del
    }
}

export const redirectToItem = (type, id, prefix = null) => {
    const url = makeUrl(prefix, type, 'show', id);
    window.location = url;
}

export const redirectToList = (type, prefix = null) => {
    const url = makeUrl(prefix, type, 'index');
    window.location = url;
}


