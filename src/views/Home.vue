<template>
  <div class="home">
    <header-nav />
    <firstview />
  </div>
</template>

<script>
// @ is an alias to /src
import firstview from "@/components/firstview.vue";
import headerNav from "@components/headerNav.vue";

export default {
  name: "Home",
  components: {
    firstview,
    headerNav,
  },
};
</script>
