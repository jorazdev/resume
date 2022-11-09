<template>
    <el-dialog v-model="dialogVisible" 
        :title="leftBlock.label.toUpperCase()" 
        width="30%" 
        :before-close="handleClose">
        <div class="block-left-items">
            <div class="block-left-item">
                <div class="block-left-item-title">
                    <h4>Title</h4>
                    <input type="text" v-model="leftBlock.blockLeftItem.title">
                </div>
    
                <h4>Details</h4>
                <div class="left-item" 
                    v-for="itemLeft in leftBlock.blockLeftItem.itemLefts" 
                    :key="itemLeft.id">
                    <input type="text" v-model="itemLeft.title">
                    <el-button type="primary" @click="addItem()" :icon="Plus" circle />
                    <el-button type="primary" @click="removeItem(itemLeft)" :icon="Minus" circle />
                </div>
            </div>
        </div>
    
        <template #footer>
            <span class="dialog-footer">
                <el-button @click="handleClose">
                    Cancel
                </el-button>
                <el-button type="primary" @click="confirm">
                    Confirm
                </el-button>
            </span>
        </template>
    </el-dialog>
</template>

<script setup>
    import { Plus, Minus } from '@element-plus/icons-vue'
    import usePanelBlockLeftItem from '../../../composables/panelBlockLeftItem';

    const { leftBlock, dialogVisible, handleClose, addItem, removeItem, confirm } = usePanelBlockLeftItem()
</script>