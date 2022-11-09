<template>
  <div class="page">
    <resume-panel/>
    <resume-header :context="context"/>
    <resume-profile :context="context"/>
    <section class="main">
      <div class="main-left">
        <block-left :block-lefts="blockLefts"/>
      </div>
      <div class="main-right">
        <resume-experience :context="context"/>
      </div>
    </section>
  </div>
</template>

<script setup>

import ResumeHeader from "./components/ResumeHeader";
import ResumeProfile from "./components/ResumeProfile";
import BlockLeft from "./components/BlockLeft";
import ResumeExperience from "./components/ResumeExperience";
import ResumePanel from "./components/ResumePanel";
import useCv from "../../composables/cv";
import useBlockLeft from "../../composables/blockLeft";

const { context } = useCv()
const { blockLefts } = useBlockLeft()

</script>

<style lang="scss">
@import "../../../../public/css/cv.css";
</style>