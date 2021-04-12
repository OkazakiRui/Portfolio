<template>
  <div class="work p-re">
    <background title="Work"></background>
    <div class="contentWrap">
      <heading-title title="Work"></heading-title>
      <div id="test" class="tiltWrap" data-tilt></div>
      <div
        id="test"
        class="tiltWrap"
        data-tilt
        data-tilt-max="50"
        data-tilt-speed="400"
        data-tilt-perspective="500"
      ></div>
      <div
        id="test"
        class="tiltWrap"
        data-tilt
        data-tilt-glare
        data-tilt-max-glare="0.8"
      ></div>
    </div>
  </div>
</template>

<script>
import headingTitle from "@/components/headingTitle.vue";
import background from "@/components/background.vue";
import VanillaTilt from "@/scripts/tilt.js";
export default {
  components: {
    background,
    headingTitle,
  },
  methods: {
    VanillaTilt() {
      console.log("methods");
      VanillaTilt.VanillaTilt();
    },
  },
  mounted() {
    console.log(document.getElementById("test"));
    this.VanillaTilt();
  },
};
</script>

<style lang="scss" scoped>
.tiltWrap {
  width: 100px;
  height: 100px;
  background-color: #fff;
}
</style>
