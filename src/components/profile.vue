<template>
  <div class="profile p-re">
    <background title="Profile"></background>
    <div class="contentWrap">
      <heading-title title="Profile"></heading-title>
    </div>
  </div>
</template>

<script>
import headingTitle from "@/components/headingTitle.vue";
import background from "@/components/background.vue";
export default {
  components: {
    background,
    headingTitle,
  },
};
</script>

<style lang="scss" scoped></style>
