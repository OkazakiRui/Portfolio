<template>
  <div id="contact" class="contact p-re f-cen">
    <background title="Contact"></background>
    <div class="contentWrap p-re">
      <borderline></borderline>
      <heading-title title="Contact"></heading-title>
      <div class="content">
        <contact-form></contact-form>
      </div>
    </div>
  </div>
</template>

<script>
import headingTitle from "@/components/headingTitle.vue";
import background from "@/components/background.vue";
import contactForm from "@/components/contactForm.vue";
import borderline from "@/components/borderLine.vue";

export default {
  components: {
    background,
    headingTitle,
    contactForm,
    borderline,
  },
};
</script>

<style lang="scss" scoped>
.contact {
  min-height: 100vh;
  overflow: hidden;
}
.borderline {
  top: 0;
  height: 5000px;
}
</style>
