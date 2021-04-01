<template>
  <div class="home">
    <headerNav></headerNav>
    <firstview></firstview>
    <about></about>
  </div>
</template>

<script>
// @ is an alias to /src
import firstview from "@/components/firstview.vue";
import headerNav from "@/components/headerNav.vue";
import about from "@/components/about.vue";

export default {
  name: "Home",
  components: {
    firstview,
    headerNav,
    about,
  },
};
</script>
