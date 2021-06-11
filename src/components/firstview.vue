<template>
  <div id="start" class="start f-ali" ref="vantaRef">
    <div class="contentWrap p-re">
      <borderline></borderline>
      <heading-title title="Start"></heading-title>
      <vue-typed-js
        :strings="im"
        :contentType="'html'"
        :showCursor="false"
        :typeSpeed="20"
      >
        <h3 class="typing"></h3>
      </vue-typed-js>
      <vue-typed-js
        :strings="small"
        :contentType="'html'"
        :showCursor="false"
        :typeSpeed="20"
        :startDelay="2000"
      >
        <p class="typing"></p>
      </vue-typed-js>
    </div>
  </div>
</template>

<script>
import borderline from "@/components/borderLine.vue";
import headingTitle from "@/components/headingTitle.vue";
import BIRDS from "@/scripts/vanta.birds.min.js";

export default {
  data() {
    return {
      im: [
        "Hi, I'm <span class='c-p'>Rui Okazaki</span><br />I'm a Application Engineer<span class='c-p'>.</span>",
      ],
      small: ["<p class='c-g text'>I want you to know about me.</p>"],
    };
  },
  components: {
    borderline,
    headingTitle,
  },
  mounted() {
    // background settings
    this.vantaEffect = BIRDS({
      el: this.$refs.vantaRef,
      mouseControls: true,
      touchControls: true,
      gyroControls: true,
      scale: 1,
      scaleMobile: 1,
      backgroundColor: "#110e17",
      color1: "#4f0f4c",
      color2: "#4f0f4c",
      colorMode: "variance",
      birdSize: 1,
      wingSpan: 20,
      speedLimit: 8,
      separation: 29,
      alignment: 33,
      cohesion: 50,
    });
  },
  beforeDestroy() {
    if (this.vantaEffect) {
      this.vantaEffect.destroy();
    }
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.start {
  height: 100vh;
  min-height: 600px;
  padding-top: 64px;
}
.contentWrap {
  padding: 0 22px;
  position: relative;
  min-height: 400px;

  &::before,
  &::after {
    position: absolute;
    filter: drop-shadow(0px 0px 4px #000000);
    z-index: 5;
  }
  &::after {
    content: "";
    display: block;
    width: 17.5px;
    height: 26px;
    background-image: url(../assets/svg/mouse.svg);
    left: -9.7px;
    bottom: 65px;
  }
  &::before {
    content: "SCROLL";
    font-size: 1.4rem;
    font-weight: bold;
    transform: rotate(-90deg);
    bottom: 20px;
    left: -24px;
    color: $white1;
  }
}
h3 {
  font-size: 4.8rem;
  line-height: 68px;
  margin-top: 30px;
}
p {
  margin-top: 35px;
  font-size: 2.4rem;
  font-weight: bold;
}
</style>
