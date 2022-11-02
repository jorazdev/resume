<template>
  <div class="formation"
       v-for="(formation, index) in context.formations"
       :key="index">
    <div class="formation-title">
      <i class="fa fa-graduation-cap"></i>
      {{ formation.label }}
    </div>
    <div class="events">
      <div class="event" v-for="(event,k) in formation.events"
           :key="k">
        <div class="date">{{ event.group }}</div>
        <div class="title">{{ event.title }}</div>
      </div>
    </div>
  </div>
</template>

<script setup>

const props = defineProps({
  context: { type: Object}
})
</script>

<style scoped>

</style>