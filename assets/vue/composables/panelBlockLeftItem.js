import { computed } from "vue"
import { useStore } from "vuex"
import useTools from "../plugins/tools";

export default function usePanelBlockLeftItem(){

    const { commit, dispatch, state } = useStore()

    const { createUUID } = useTools()

    const dialogVisible = computed(() => state.blockLeft.dialogVisible)
    const leftBlock = computed(() => state.blockLeft.leftBlock)

    const handleClose = () => {
        commit('blockLeft/setDialogVisible', false)
    }

    const addItem = () => {
        const id = leftBlock.value.blockLeftItem.itemLefts.length + 1
        const uuid = createUUID()
        leftBlock.value.blockLeftItem.itemLefts.push({uuid: uuid, id: id, title: ''})
    }

    const removeItem = (itemLeft) => {
        const index = leftBlock.value.blockLeftItem.itemLefts.findIndex(item => item.uuid == itemLeft.uuid)
        leftBlock.value.blockLeftItem.itemLefts.splice(index,1)
    }

    const confirm = async () => {
        await dispatch('blockLeft/updateBlockLeftItemAction', leftBlock.value)
        commit('blockLeft/setDialogVisible', false)
        commit('blockLeft/setLeftBlockIni')
    }

    return {
        leftBlock,
        dialogVisible,
        handleClose,
        addItem,
        removeItem,
        confirm
    }
}