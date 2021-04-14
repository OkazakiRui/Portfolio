<template>
  <div class="home">
    <headerNav></headerNav>
    <firstview></firstview>
    <about></about>
    <profile></profile>
    <works></works>
    <!-- studyRoom -->
    <contact></contact>
    <footerNav></footerNav>
  </div>
</template>

<script>
// @ is an alias to /src
import firstview from "@/components/firstview.vue";
import headerNav from "@/components/headerNav.vue";
import about from "@/components/about.vue";
import profile from "@/components/profile.vue";
import works from "@/components/works.vue";
import contact from "@/components/contact.vue";
import footerNav from "@/components/footerNav.vue";

export default {
  name: "Home",
  components: {
    firstview,
    headerNav,
    about,
    profile,
    works,
    contact,
    footerNav,
  },
};
</script>
