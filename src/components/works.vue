<template>
  <div class="works p-re">
    <background title="Works"></background>
    <div class="contentWrap">
      <heading-title title="Works"></heading-title>
      <div class="worksWrap f-bet">
        <work :workData="innerPeaceCafe"></work>
        <work :workData="nomino"></work>
        <work :workData="spark"></work>
      </div>
    </div>
  </div>
</template>

<script>
import headingTitle from "@/components/headingTitle.vue";
import background from "@/components/background.vue";
import work from "@/components/work.vue";
export default {
  data() {
    return {
      innerPeaceCafe: {
        logo: "../assets/svg/logo_IPC.svg",
      },
      nomino: {
        logo: "../assets/svg/logo_nomino.svg",
      },
      spark: {
        logo: "../assets/svg/logo_spark.svg",
      },
    };
  },
  components: {
    background,
    headingTitle,
    work,
  },
};
</script>

<style lang="scss" scoped>
.works {
  &Wrap {
    flex-wrap: wrap;
    gap: 60px;
    padding: 50px 60px;
  }
}
</style>
