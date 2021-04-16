<template>
  <div class="studyroom p-re">
    <background title="StudyRoom"></background>
    <div class="contentWrap">
      <heading-title title="StudyRoom"></heading-title>
      <studies></studies>
    </div>
  </div>
</template>

<script>
import headingTitle from "@/components/headingTitle.vue";
import background from "@/components/background.vue";
import studies from "@/components/studies.vue";
export default {
  components: {
    headingTitle,
    background,
    studies,
  },
};
</script>

<style lang="scss" scoped></style>
