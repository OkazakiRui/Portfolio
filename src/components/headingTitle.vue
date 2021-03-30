<template>
  <h2 class="title">{{ title }} /&gt;</h2>
</template>

<script>
export default {
  props: {
    title: {
      type: String,
      default: "title is null",
      required: true,
    },
  },
};
</script>

<style lang="scss" scoped>
.title {
  font-size: 1.8rem;
  color: $gray1;
  font-weight: normal;
  position: relative;

  &::before {
    content: "";
    display: block;
    position: absolute;
    left: -28px;
    top: 50%;
    bottom: 50%;
    transform: translateY(-50%);
    width: 10px;
    height: 10px;
    border: 2px solid $purple1;
    border-radius: 50%;
    filter: drop-shadow(0px 0px 4px #000000);
  }
}
</style>
