<template>
  <div id="about" class="about p-re">
    <background title="About"></background>
    <div class="contentWrap">
      <heading-title title="About"></heading-title>
      <div class="content f-alibet">
        <div class="content__left">
          <vue-typed-js
            :strings="texts.school"
            :contentType="'html'"
            :showCursor="false"
            :typeSpeed="20"
            :startDelay="500"
            v-if="displayBool"
          >
            <p class="typing content__left__school c-g"></p>
          </vue-typed-js>
          <vue-typed-js
            :strings="texts.name"
            :contentType="'html'"
            :showCursor="false"
            :typeSpeed="20"
            v-if="displayBool"
          >
            <h3 class="typing content__left__name"></h3>
          </vue-typed-js>
          <vue-typed-js
            :strings="texts.aboutText"
            :contentType="'html'"
            :showCursor="false"
            :typeSpeed="20"
            :startDelay="1400"
            v-if="displayBool"
          >
            <p class="typing content__left__text"></p>
          </vue-typed-js>
        </div>
        <div class="content__right">
          <figure class="content__right__img shadow">
            <img src="../assets/images/myself.jpg" alt="岡崎流依の写真" />
          </figure>
          <div class="content__right__links f-bet">
            <a
              href="https://github.com/OkazakiRui"
              target="ruru"
              class="content__right__link shadow f-ali c-p"
              ><figure class="f-cen content__right__link__icon">
                <img src="../assets/svg/github.svg" alt="github" />
              </figure>
              OkazakiRui</a
            >
            <a
              href="https://www.instagram.com/asahanemutaiyo/?hl=ja"
              target="ruru"
              class="content__right__link shadow f-ali c-p"
              ><figure class="f-cen content__right__link__icon">
                <img src="../assets/svg/instagram.svg" alt="instagram" />
              </figure>
              asahanemutaiyo</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import headingTitle from "@/components/headingTitle.vue";
import background from "@/components/background.vue";
export default {
  components: {
    background,
    headingTitle,
  },
  data() {
    return {
      displayBool: false,
      texts: {
        name: ["RUI OKAZAKI"],
        school: ["ECCコンピュータ専門学校 WEBデザイナー専攻2年"],
        aboutText: [
          "私は人の笑顔を見るのが好きです。<br />将来は今勉強しているwebの知識を使って人を笑顔にそして幸せにできる仕事につきたいです。<br />人を幸せにする仕事にフロントエンドが必要ならフロントエンドを勉強し続けます、バックエンドの技術が必要な時はバックエンドを勉強します。<br />私にとってプログラミングは趣味であり、目的を達成する手段でしかありません。<br />ですので、今はwebについて勉強していますが、趣味が変わってアプリが作りたくなった時は、その分野で人を笑顔にしたいと考えています。",
        ],
      },
    };
  },
  mounted() {
    if (this.displayBool === false) {
      window.addEventListener("scroll", () => {
        window.setTimeout(() => {
          this.displayBool = true;
        }, 700);
      });
    }
  },
};
</script>

<style lang="scss" scoped>
.content {
  &__left {
    width: 487px;
    &__name {
      font-weight: bold;
      font-size: 4.2rem;
      line-height: 49px;
      letter-spacing: 10px;
      margin-top: 10px;
      margin-bottom: 10px;
    }
    &__text {
      font-size: 1.4rem;
      line-height: 28px;
      text-align: justify;
    }

    &__school {
      font-size: 1.4rem;
      // margin-top: 10px;
      // margin-bottom: 10px;
    }
  }
  &__right {
    // width: 250px;
    width: 300px;
    &__img {
      width: 100%;
      img {
        width: 100%;
        border-radius: 36px;
      }
    }
    &__links {
      margin: 10px 15px 0 15px;
    }
    &__link {
      font-size: 1.8rem;
      line-height: 21px;
      &__icon {
        margin-right: 5px;
      }
    }
  }
}
.shadow {
  filter: drop-shadow(0px 0px 4px #000000);
  filter: drop-shadow(0px 0px 4px #000000);
}
</style>
