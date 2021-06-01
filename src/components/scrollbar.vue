<template>
  <div class="scrollbar">
    <div id="path" class="path"></div>
    <div id="bar" class="bar"></div>
  </div>
</template>

<script>
export default {
  mounted() {
    window.addEventListener("scroll", this.colorChange);
  },
  methods: {
    colorChange() {
      const bar = document.getElementById("bar");
      let totalHeight = document.body.scrollHeight - window.innerHeight;
      let barHeight = (window.pageYOffset / totalHeight) * 100;
      bar.style.height = barHeight + "%";
    },
  },
};
</script>

<style lang="scss" scoped>
@keyframes hueloop {
  0%,
  100% {
    filter: hue-rotate(0deg);
  }
  50% {
    filter: hue-rotate(360deg);
  }
}

.path,
.bar {
  position: fixed;
  top: 0;
  right: 0;
  width: 4px;
}
.path {
  height: 100%;
  background: white;
  opacity: 0.05;
}
.bar {
  background: linear-gradient(to top, #ff0000, #fbff00);
  animation: hueloop 2s linear infinite;
  // height: 100%;

  &::before,
  &::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to top, #ff0000, #fbff00);
  }
  &::before {
    filter: blur(10px);
  }
  &::after {
    filter: blur(30px);
  }
}
</style>
