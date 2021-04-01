<template>
  <div class="firstview f-ali">
    <div class="contentWrap p-re">
      <borderline></borderline>
      <heading-title title="Start"></heading-title>
      <h3>
        Hi, my name is <span class="c-p">Rui Okazaki</span><br />I'm a Front End
        Developer<span class="c-p">.</span>
      </h3>
      <p class="c-g text">I want you to know about me.</p>
    </div>
  </div>
</template>

<script>
import borderline from "@/components/borderLine.vue";
import headingTitle from "@/components/headingTitle.vue";
export default {
  data() {
    return {};
  },
  components: {
    borderline,
    headingTitle,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.firstview {
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
    color: $gray1;
  }
}
h3 {
  font-size: 4.8rem;
  line-height: 68px;
  margin-top: 30px;
}
.text {
  margin-top: 35px;
  font-size: 2.4rem;
  font-weight: bold;
}
</style>
