

const currentUser = {
    name: '',
    tgId: null
}
const systemUser = {
    name: 'System',
    tgId: null
}

const useUsers = () => {
    return getUser()
}

export  {
    useUsers,
    systemUser
}


