<template>
  <div class="work p-re">
    <background title="Work"></background>
    <div class="contentWrap">
      <heading-title title="Work"></heading-title>
      <div class="tiltWrap" data-tilt></div>
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
  created() {
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
