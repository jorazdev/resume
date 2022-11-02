import axios from "axios";

export default function useAxios() {

    const postData = async (url,formData) => {
        let config;
        const token = localStorage.getItem('token')
        if(token){
            config = {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'Authorization': 'Bearer ' + token
                },
                // onUploadProgress: function(progressEvent) {
                //     let percentage = Math.round( (progressEvent.loaded * 100) / progressEvent.total );
                //     store.commit('upload/setPercentage',{uid: formData.get('uid'), percentage: percentage})
                // }
            }
        }else {
            config = {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }
        }
        return await axios.post(url, formData, config)
    }

    const post = async (url,params) => {
        return await axios.post(url, params, config())
    }

    const get = (url) => {
        return axios.get(url, config())
    }

    const config = () => {
        let conf;
        const token = localStorage.getItem('token')
        if(token){
            conf = {
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer ' + token
                }
            }
        }else {
            conf = {
                headers: {
                    'Content-Type': 'application/json'
                }
            }
        }
        return conf
    }

    return {
        postData,
        post,
        get
    }
}