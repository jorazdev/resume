import { ElMessage, ElMessageBox } from "element-plus";
import { useStore } from "vuex";
import { computed, onMounted } from "vue";


export default function useBlockLeft (){

    const { state, dispatch, commit } = useStore()

    const blockLefts = computed(() => state.blockLeft.blockLefts)
    
    onMounted(async () => {
        await allBlockLeft()
    })

    const allBlockLeft = async () => {
        await dispatch('blockLeft/allBlockLeftAction')
    }

    const addBlockLeft = async () => {
        ElMessageBox.prompt('Label for the new left block', 'Left Block', {
            confirmButtonText: 'OK',
            cancelButtonText: 'Cancel'
        })
            .then(({ value }) => {
                const param = {
                    id: 0,
                    label: value
                }
                dispatch('blockLeft/updateBlockLeftAction', param)
            })
            .catch(() => {
                ElMessage({
                    type: 'info',
                    message: 'Input canceled',
                })
            })

    }

    const addBlockLeftItem = (blockLeft) => {
        commit('blockLeft/setLeftBlock', blockLeft)
        commit('blockLeft/setDialogVisible', true)
    }

    const editBlockLeftItem = async (blockLeft) => {
        ElMessageBox.prompt('Label for the modif left block', 'Left Block', {
            confirmButtonText: 'OK',
            cancelButtonText: 'Cancel',
            inputValue: blockLeft.label
        })
            .then(({ value }) => {
                const param = {
                    id: blockLeft.id,
                    label: value
                }
                dispatch('blockLeft/updateBlockLeftAction', param)
            })
            .catch(() => {
                ElMessage({
                    type: 'info',
                    message: 'Input canceled',
                })
            })
    }

    const removeBlockLeftItem = (blockLeft) => {
        ElMessage({
            type: 'info',
            message: 'Remove block '+blockLeft.label,
        })
    }

    return {
        blockLefts,
        addBlockLeft,
        addBlockLeftItem,
        editBlockLeftItem,
        removeBlockLeftItem
    }
}