<template>
  <div class="formation"
       v-for="(blockLeft, index) in blockLefts"
       :key="index">
    <div class="formation-title">
      <panel-block-left-item 
        :block-left="blockLeft"/>
      <i class="fa fa-graduation-cap"></i>
      {{ blockLeft.label }}
    </div>
    <div class="events"
         v-if="blockLeft.blockLeftItems && blockLeft.blockLeftItems.length > 0">
      <div class="event" 
          v-for="(item,k) in blockLeft.blockLeftItems"
           :key="k">
        <div class="date">{{ item.title }} :</div>
        <div class="title">{{ item.itemLefts.map(il => il.title).join(', ') }}</div>
      </div>
    </div>
    <dialog-block-left-item/>
  </div>
</template>

<script setup>

import PanelBlockLeftItem from './PanelBlockLeftItem.vue';
import DialogBlockLeftItem from './DialogBlockLeftItem.vue';

const props = defineProps({
  blockLefts: { type: Array}
})
</script>

<style scoped>

</style>