<template>
  <div id="profile" class="profile p-re">
    <background title="Profile"></background>
    <div class="contentWrap">
      <heading-title title="Profile"></heading-title>
    </div>
    <profile-code></profile-code>
  </div>
</template>

<script>
import headingTitle from "@/components/headingTitle.vue";
import background from "@/components/background.vue";
import profileCode from "@/components/profileCode.vue";
export default {
  components: {
    background,
    headingTitle,
    profileCode,
  },
};
</script>

<style lang="scss" scoped>
.contentWrap {
  padding-bottom: 0;
}
.profile {
  padding-bottom: 75px;
}
</style>
