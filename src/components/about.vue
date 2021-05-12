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
          "私は人を笑顔する事と教える事が好きです。<br>専門学校に入り友人にプログラミングを教えたことがあります。<br>プログラムが嫌いな友人が自分自身の力で出来るようになるたびに笑顔になってくれました。<br>私も周りの人もそんな友人を見て、笑顔になり幸せな気持ちになったのでプログラミングにはそれだけの価値や力があるのだと確信しました。<br>私は将来好きなプログラミングに関わりながらも、周りが笑顔になるように働きたいと考えています。<br>「一緒に働く人はもちろん、作成したものを使ってくれる人まで良い気分で居ることが出来る」<br>そんな人の気持ちを汲み取れるエンジニアを目指しています！！",
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
    height: 400px;
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
