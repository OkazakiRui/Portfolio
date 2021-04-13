<template>
  <div class="work">
    <div
      class="tiltWrap"
      data-tilt
      data-tilt-scale="1.1"
      data-tilt-reverse="true"
    >
      <figure><img :src="workData.logo" /></figure>
    </div>
  </div>
</template>

<script>
import VanillaTilt from "@/scripts/tilt.js";
export default {
  props: {
    workData: {
      type: Object,
      required: true,
    },
  },

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
.work {
  perspective: 1000px;
}
.tiltWrap {
  display: flex;
  transform-style: preserve-3d;

  width: 320px;
  height: 180px;
  background-color: $white1;

  figure {
    transform: translateZ(50px);
  }
}
</style>
