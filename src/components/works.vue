<template>
  <div id="works" class="works p-re">
    <background title="Works"></background>
    <div class="contentWrap">
      <heading-title title="Works"></heading-title>
      <div class="worksWrap f-bet">
        <div
          v-for="(work, index) in works"
          :key="index"
          @click="
            displayWindow === -1
              ? (displayWindow = index)
              : (displayWindow = -1)
          "
        >
          <work :workLogo="work.logo"></work>
          <!-- <work-window v-if="true" :workData="work"></work-window> -->
          <work-window
            v-if="displayWindow === index"
            :workData="work"
          ></work-window>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import workWindow from "@/components/workWindow.vue";

import headingTitle from "@/components/headingTitle.vue";
import background from "@/components/background.vue";
import work from "@/components/work.vue";
export default {
  data() {
    return {
      works: {
        innerPeaceCafe: {
          title: "InnerPeaceCafe",
          catchcopy: "あなたのお肌、保ちます。",
          concept: "肌トラブルの改善をコンセプトにしたカフェサイト。",
          impression: "初めて作ったwebサイト",
          usetime: {
            design: 40,
            front: 20,
          },
          tool: "HTML5, SCSS, JavaScript",
          github: "https://github.com/OkazakiRui/InnerPeaceCafe",
          link: "",
          img: "",
          logo: "/svg/logo_IPC.svg",
        },
        nomino: {
          title: "nomino",
          logo: "/svg/logo_nomino.svg",
          catchcopy: "",
          concept: "",
          impression: "",
          usetime: {
            design: 200226,
            front: 200226,
          },
          tool: "",
          github: "#",
        },
        spark: {
          title: "spark",
          logo: "/svg/logo_spark.svg",
          catchcopy: "",
          concept: "",
          impression: "",
          usetime: {
            design: 200226,
            front: 200226,
          },
          tool: "",
          github: "#",
        },
      },
      displayWindow: -1,
    };
  },
  components: {
    background,
    headingTitle,
    work,
    workWindow,
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
