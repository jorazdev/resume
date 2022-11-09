import useBlockLeftApi from "../api/blockLeft";
import useTools from "../plugins/tools";

const { allBlockLeft, updateBlockLeft, updateBlockLeftItem } = useBlockLeftApi()
const { createUUID } = useTools()

export default {
    namespaced: true,
    state: {
        blockLeft: null,
        blockLefts: [],
        dialogVisible: false,
        leftBlock: {
            id: 0,
            label: '',
            blockLeftItem: {
                id: 0,
                title: '',
                itemLefts: [{ uuid: createUUID(), id: 1, title: '' }]
            }
        }
    },
    mutations:{
        setLeftBlock(state, leftBlock){
            Object.assign(state.leftBlock, leftBlock)
        },
        setLeftBlockIni(state){
            state.leftBlock = {
                id: 0,
                label: '',
                blockLeftItem: {
                    id: 0,
                    title: '',
                    itemLefts: [{ uuid: createUUID(), id: 1, title: '' }]
                }
            }
        },
        setBlockLeft(state, blockLeft){
            state.blockLeft = blockLeft
        },
        setBlockLefts(state, blockLefts){
            state.blockLefts = blockLefts
        },
        updateBlockLeft(state, { blocLeft, id }){
            if(id == 0){
                state.blockLefts.push(blocLeft)
            }else {
                const res = state.blockLefts.find( item => item.id == blocLeft.id)
                res.label = blocLeft.label
            }
        },
        updateBlockLeftItem(state,{id, blockLeftItem}){
            const blockLeft = state.blockLefts.find( item => item.id == id)
            blockLeft.blockLeftItems.push(blockLeftItem)
        },
        setDialogVisible(state, dialogVisible){
            state.dialogVisible = dialogVisible
        }
    },
    actions:{
        async allBlockLeftAction(context){
            const res = await allBlockLeft()
            context.commit('setBlockLefts', res.data.data.blockLefts)
        },
        async updateBlockLeftAction(context, param){
            const res = await updateBlockLeft(param)
            context.commit('updateBlockLeft', { blocLeft: res.data.data.blockLeft, id: param.id })
        },
        async updateBlockLeftItemAction(context, param){
            const res = await updateBlockLeftItem(param)
            context.commit('updateBlockLeftItem',{ id: param.id, blockLeftItem: res.data.data.blockLeftItem })
        }
    }
}