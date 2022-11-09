<template>
    <div class="panel-title">
        <div class="edit" @click="addBlockLeftItem(blockLeft)">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </div>
        <div class="edit" @click="editBlockLeftItem(blockLeft)">
            <i class="fa fa-pencil" aria-hidden="true"></i>
        </div>
        <div class="remove" @click="removeBlockLeftItem(blockLeft)">
            <i class="fa fa-times" aria-hidden="true"></i>
        </div>
    </div>
</template>

<script setup>
    import useBlockLeft from '../../../composables/blockLeft';

    const props = defineProps({
        blockLeft: {type: Object}
    })

    const { addBlockLeftItem, editBlockLeftItem, removeBlockLeftItem } = useBlockLeft()

</script>