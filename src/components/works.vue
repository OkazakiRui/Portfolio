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
            windowCount === 0
              ? (displayWindow = index)
              : ((displayWindow = -1), (windowCount = 0))
          "
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
  data() {
    return {
      works: {
        innerPeaceCafe: {
          title: "InnerPeaceCafe",
          concept: "肌トラブルの改善をコンセプトにしたカフェサイト。",
          motivation: "初めて作ったwebサイト",
          production: "個人制作",
          position: "Planning, Design, FrontEnd",
          usetime: 60,
          tool: "Photoshop, Illustrator, XD, HTML5, SCSS, JavaScript",
          github: "https://github.com/OkazakiRui/InnerPeaceCafe",
          link:
            "https://click.ecc.ac.jp/ecc/rokazaki/2020_0907_InnerPeaceCafe/",
          img: "/images/IPC_screen.jpg",
          logo: "/svg/logo_IPC.svg",
        },
        nomino: {
          title: "nomino",
          concept:
            "要らないものを最小限の手間で欲しい人に買って貰い、面倒な作業は全て買い手におまかせ。買い手の手間を最小限にした。面倒臭いがないフリマアプリ。",
          motivation: "vuejsを使った初めてのアプリケーション",
          production: "個人制作",
          position: "Planning, Design, FrontEnd",
          usetime: 16,
          tool: "Photoshop, Illustrator, Figma, HTML5, SCSS, JavaScript, Vuejs",
          github: "https://github.com/OkazakiRui/nomino",
          link: "https://click.ecc.ac.jp/ecc/rokazaki/2021_0130_nomino/",
          img: "/images/nomino_screen.jpg",
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
      windowCount: 0,
    };
  },
  components: {
    background,
    headingTitle,
    work,
    workWindow,
  },
  methods: {
    closeWindow() {
      this.windowCount = 1;
    },
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
