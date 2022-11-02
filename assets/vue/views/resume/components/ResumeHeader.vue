<template>
  <section class="header">
    <div class="left-header">
      <div class="photo">
        <img :src="context.header.photo" alt="Jocelyn RAZAFIMHARO" />
      </div>
    </div>
    <div class="right-header"></div>
  </section>
</template>

<script setup>

const props = defineProps({
  context: { type: Object}
})
</script>

<style scoped>

</style>