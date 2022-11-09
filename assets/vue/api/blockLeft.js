import useAxios from "../plugins/axios";

export default function useBlockLeftApi (){

    const { post, get } = useAxios()

    const updateBlockLeft = async (param) => {
        return await post('/api/block-left/update', param)
    }

    const allBlockLeft = async () => {
        return await get('/api/block-left/all')
    }

    const updateBlockLeftItem = async (param) => {
        return await post('/api/block-left-item/update', param)
    }
    return {
        allBlockLeft,
        updateBlockLeft,
        updateBlockLeftItem
    }
}