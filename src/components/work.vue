<template>
  <div class="work">
    <div
      class="tiltWrap"
      data-tilt
      data-tilt-scale="1.1"
      data-tilt-reverse="true"
    >
      <figure><img src="../assets/tes" /></figure>
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
    const workImg = document.querySelectorAll(
      "h2 + div > div > div > figure > img"
    );
    // const url = () => {
    //   return workImg[0].src.indexOf("svg") === -1 ? workImg[0].src :
    // };

    const url = workImg[workImg.length - 1].src;
    // console.log(workImg[workImg.length - 1].src);

    for (let i = 0; i < workImg.length; i++) {
      if (workImg[i].src === url) {
        workImg[i].src = url + this.workData.logo;
        return;
      }
    }
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
