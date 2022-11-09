<template>
  <div class="panels">
    <div class="panel"
         @click="download">
      <i class="fa fa-download" aria-hidden="true"></i>
    </div>
    <div class="panel"
         @click="addBlockLeft">
      <i class="fa fa-plus-circle" aria-hidden="true"></i>
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
import useBlockLeft from "../../../composables/blockLeft";

const { download } = useCv()
const { addBlockLeft } = useBlockLeft()
</script>

<style scoped>

</style>