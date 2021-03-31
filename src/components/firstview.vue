<template>
  <div class="firstview f-ali">
    <div class="content p-re">
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
.content {
  padding: 0 22px;
  position: relative;
  min-height: 400px;
}
h3 {
  font-size: 4.8rem;
  line-height: 68px;
  margin-top: 27px;
}
.text {
  margin-top: 35px;
  font-size: 2.4rem;
  font-weight: bold;
}
</style>
