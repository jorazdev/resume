<template>
  <div class="panels">
    <div class="panel"
         @click="download">
      <i class="fa fa-download" aria-hidden="true"></i>
    </div>
    <div class="panel">
      <i class="fa fa-sign-in" aria-hidden="true"></i>
    </div>
    <div class="panel">
      <i class="fa fa-sign-out" aria-hidden="true"></i>
    </div>
  </div>
</template>

<script setup>
import useCv from "../../../composables/cv";

const { download } = useCv()
</script>

<style scoped>

</style>