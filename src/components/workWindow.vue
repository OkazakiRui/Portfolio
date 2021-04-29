<template>
  <div class="workWindow p-fi flex" @click="hiddenWindow">
    <div class="workWindow__content">
      {{ workData }}
    </div>
  </div>
</template>

<script>
export default {
  props: {
    workData: {
      type: Object,
      required: true,
    },
  },
  methods: {
    hiddenWindow() {
      this.$emit("hiddenWindow");
    },
  },
};
</script>

<style lang="scss" scoped>
.workWindow {
  z-index: 1000;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba($color: #000000, $alpha: 0.3);
  &__content {
    width: calc(100% - 160px);
    height: calc(100% - 120px);
    margin: auto;
    border-radius: 60px;
    padding: 60px;
    background-color: $gray1;
    font-size: 4rem;
    color: $white1;
  }
}
</style>
