<template>
  <div class="about p-re">
    <background title="About"></background>
    <div class="contentWrap">
      <heading-title title="About"></heading-title>
      <div class="content f-alibet">
        <div class="content__left">
          <h3>RUI OKAZAKI</h3>
          <p class="school">ECCコンピュータ専門学校 WEBデザイナー専攻2年</p>
          <p>
            私は人の笑顔を見るのが好きです。<br />
            将来は今勉強しているwebの知識を使って人を笑顔にそして幸せにできる仕事につきたいです。<br />
            人を幸せにする仕事にフロントエンドが必要ならフロントエンドを勉強し続けます、バックエンドの技術が必要な時はバックエンドを勉強します。<br />
            それはどの勉強についても同様です。<br />
            私にとってプログラミングは趣味であり、目的を達成する手段でしかありません。<br />
            ですので、今はwebについて勉強していますが、趣味が変わってアプリが作りたくなった時は、その分野で人を笑顔にしたいと考えています。
          </p>
        </div>
        <div class="content__right">
          <figure>
            <img src="../assets/images/myself.jpg" alt="岡崎流依の写真" />
          </figure>
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
};
</script>

<style lang="scss" scoped>
h3 {
  font-weight: bold;
  font-size: 4.2rem;
  line-height: 49px;
  letter-spacing: 10px;
}
p {
  font-size: 1.4rem;
  line-height: 28px;
  text-align: justify;
}
.school {
  margin-top: 10px;
  margin-bottom: 10px;
}
.content {
  &__left {
    width: 487px;
  }
  &__right {
    width: 250px;
    figure {
      width: 100%;
      img {
        width: 100%;
        border-radius: 50%;
        border: 2px solid $white1;
      }
    }
  }
}
</style>
