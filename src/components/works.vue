<template>
  <div id="works" class="works p-re">
    <background title="Works"></background>
    <div class="contentWrap">
      <heading-title title="Works"></heading-title>
      <div class="worksWrap f-bet">
        <div
          v-for="(work, index) in works"
          :key="index"
          @click="displayWindow = index"
        >
          <work :workLogo="work.logo"></work>
          <work-window
            v-if="displayWindow === index"
            :workData="work"
            @closeWindow="closeWindow"
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
  methods: {
    closeWindow() {
      this.displayWindow = -1;
    },
  },
  data() {
    return {
      works: {
        innerPeaceCafe: {
          title: "InnerPeaceCafe",
          concept: "肌トラブルの改善をコンセプトにしたカフェサイト。",
          motivation: "初めて作ったwebサイト",
          production: "個人制作",
          position: "企画、デザイン、フロントエンド",
          usetime: 60,
          tool: "Photoshop, Illustrator, XD, HTML5, SCSS, JavaScript",
          github: "https://github.com/OkazakiRui/InnerPeaceCafe",
          link: "",
          img: "/images/IPC_screen.jpg",
          logo: "/svg/logo_IPC.svg",
        },
        nomino: {
          title: "nomino",
          concept: "",
          motivation: "",
          production: "",
          usetime: "",
          tool: "",
          github: "",
          link: "",
          img: "",
          logo: "/svg/logo_nomino.svg",
        },
        spark: {
          title: "spark",
          concept: "",
          motivation: "",
          production: "",
          usetime: "",
          tool: "",
          github: "",
          link: "",
          img: "",
          logo: "/svg/logo_spark.svg",
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
