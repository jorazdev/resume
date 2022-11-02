<template>
  <div>
    <div class="title">
      <i class="fa fa-graduation-cap"></i>
      EXPÉRIENCES PROFESSIONNELLES
    </div>
    <div class="experiences">
      <div class="experience"
           v-for="(experience, index) in context.experiences"
           :key="index">
        <div class="left-exp">
          <img :src="experience.image">
        </div>
        <div class="right-exp">
          <div class="job">
            {{ experience.job }}
          </div>
          <div class="type-company">
            <span class="company">{{ experience.company }}</span> .
            <span class="type">{{ experience.type }}</span>
          </div>
          <div class="date-place">
            {{ experience.date }} <br>
            {{ experience.place }}
          </div>
          <div class="descriptions">
            <div class="title-description">{{ experience.title }}</div>
            <div class="item"
                 v-for="(item, k) in experience.descriptions"
                 :key="k">
              <i class="fa fa-cubes"></i>
              {{ item }}
            </div>
          </div>
          <div class="technologies">{{ experience.technologies }}</div>
        </div>
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