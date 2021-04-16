<template>
  <div class="home">
    <headerNav></headerNav>
    <firstview></firstview>
    <about></about>
    <profile></profile>
    <works></works>
    <!-- <studyroom></studyroom> -->
    <contact></contact>
    <footerNav></footerNav>
    <scrollbar></scrollbar>
  </div>
</template>

<script>
// @ is an alias to /src
import firstview from "@/components/firstview.vue";
import headerNav from "@/components/headerNav.vue";
import about from "@/components/about.vue";
import profile from "@/components/profile.vue";
import works from "@/components/works.vue";
// import studyroom from "@/components/studyroom.vue";
import contact from "@/components/contact.vue";
import footerNav from "@/components/footerNav.vue";
// other
import scrollbar from "@/components/scrollbar.vue";

export default {
  name: "Home",
  components: {
    firstview,
    headerNav,
    about,
    profile,
    works,
    // studyroom,
    contact,
    footerNav,
    scrollbar,
  },
};
</script>
