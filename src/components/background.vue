<template>
  <div class="background p-ab font f-cen">
    <p>{{ uppercase }}</p>
  </div>
</template>

<script>
export default {
  props: {
    title: {
      type: String,
      default: "NULL",
      required: true,
    },
  },
  computed: {
    uppercase: function () {
      return this.title.toUpperCase();
    },
  },
};
</script>

<style lang="scss" scoped>
div {
  width: 100%;
  height: 100%;
  font-size: 55rem;
  font-weight: bold;
  overflow: hidden;
  z-index: -1;
}
p {
  text-align: center;
  transform: rotate(-30deg);
  -webkit-text-stroke: 1px $gray1;
  opacity: 0.3;
}
</style>
