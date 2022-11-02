import useAxios from "../plugins/axios";

export default function useCvApi (){

    const { get } = useAxios()

    const download = async () => {
        return await get('/api/cv/download')
    }

    return {
        download
    }
}