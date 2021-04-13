<template>
  <div class="tiltWrap" data-tilt></div>
</template>

<script>
import VanillaTilt from "@/scripts/tilt.js";
export default {
  methods: {
    VanillaTilt() {
      VanillaTilt.VanillaTilt();
    },
  },
  mounted() {
    this.VanillaTilt();
  },
};
</script>

<style lang="scss" scoped>
.tiltWrap {
  width: 320px;
  height: 180px;
  background-color: $white1;
}
</style>
