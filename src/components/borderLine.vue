<template>
  <div class="borderline p-ab" id="border"></div>
</template>

<script>
export default {
  methods: {
    heightSettings() {
      const border = document.getElementById("border");
      const bodyHeight = document.querySelector("body").offsetHeight;
      border.style.height = bodyHeight + "px";
    },
  },
  mounted() {
    this.heightSettings();
  },
};
</script>

<style lang="scss" scoped>
.borderline {
  width: 2px;
  background-color: $pink1;
  left: -2px;
  top: 15px;
  z-index: 2;
}
</style>
