<template>
  <div id="works" class="works p-re">
    <background title="Works"></background>
    <div class="contentWrap">
      <heading-title title="Works"></heading-title>
      <div class="worksWrap f-bet">
        <div
          v-for="(work, index) in works"
          :key="index"
          @click="displayBool = !displayBool"
        >
          <work :workLogo="work.logo"></work>
          <work-window v-if="displayBool" :workData="work"></work-window>
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
          concept:
            "肌トラブルの改善をコンセプトにしたカフェサイト。<br>女子大学生の一つの悩みである肌トラブルに着目し肌荒れやシミなど、今ある問題だけでなく将来的に起こりうる肌トラブルを食事改善によって身体の内側からアプローチします。肌そのものに備わった美しくなろうとする力を野菜によってサポートし、将来の肌トラブルの発生を未然に防ぎます。",
          impression: "初めて作ったwebサイト、",
          usetime: {
            design: 40,
            front: 20,
          },
          tool: "HTML5, SCSS, JavaScript",
          github: "https://github.com/OkazakiRui/InnerPeaceCafe",
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
      displayBool: false,
    };
  },
  components: {
    background,
    headingTitle,
    work,
    workWindow,
  },
  methods: {
    mouseover(e) {
      console.log(e);
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
