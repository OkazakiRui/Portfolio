<template>
  <div class="workWindow p-fi">
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
};
</script>

<style lang="scss" scoped>
.workWindow {
  z-index: 1000;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  &__content {
    width: 100%;
    height: 100%;
    padding: 60px 80px;
    background-color: $gray1;
    font-size: 4rem;
    color: $white1;
  }
}
</style>
