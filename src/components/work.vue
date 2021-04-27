<template>
  <div class="work">
    <div class="tiltWrap p-re" data-tilt data-tilt-scale="1.05">
      <figure><img :src="workLogo" /></figure>
    </div>
  </div>
</template>

<script>
import VanillaTilt from "@/scripts/tilt.js";
export default {
  props: {
    workLogo: {
      type: String,
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
    // console.table([this.workData]);
  },
};
</script>

<style lang="scss" scoped>
.work {
  perspective: 1000px;
  cursor: pointer;
}
.tiltWrap {
  display: flex;
  transform-style: preserve-3d;

  width: 320px;
  height: 180px;

  background-color: $white1;
  border-radius: 40px;

  // border: $pink1 10px double;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset,
    rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;

  figure {
    transform: translateZ(50px);
  }
}
</style>
