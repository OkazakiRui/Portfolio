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
}
</style>
