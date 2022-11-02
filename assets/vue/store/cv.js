import useCvApi from "../api/cv";

export default {
    namespaced: true,
    state: {
        page: 'About',
        output: ''
    },
    mutations:{
        setPage(state, page){
            state.page = page
        },
        setOutput(state, output){
            state.output = output
        }
    },
    actions:{
        async downloadAction(context){
            const { download } = useCvApi()
            const res = await download()
            context.commit('setOutput', res.data.data.output)
        }
    }
}