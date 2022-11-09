<template>
  <section class="profile">
    <section class="information">
      <div class="name">{{ context.header.name }} {{ context.header.lastName }}</div>
      <div class="techno">{{ context.header.rule }} {{ context.header.techno }}</div>
    </section>
    <section class="contacts">
      <div class="contact"
           v-for="(contact, index) in context.header.contacts"
           :key="index">
        <i :class="contact.icon"></i> :
        <span>{{ contact.info }}</span>
      </div>
    </section>
  </section>
</template>

<script setup>

const props = defineProps({
  context: { type: Object}
})
</script>

<style scoped>

</style>