<template>
  <div class="workWindow p-fi flex">
    <div
      class="workWindow__background p-ab flex"
      @click="$emit('closeWindow')"
    ></div>
    <div class="workWindow__contentWrap f-alibet p-re">
      <button class="closebtn p-ab" @click="$emit('closeWindow')"></button>

      <h3 class="workWindow__contentWrap__title">{{ workData.title }}</h3>
      <div class="workWindow__contentWrap__contents f-alibet">
        <figure class="workWindow__contentWrap__contents__left">
          <img :src="workData.img" :alt="workData.title + 'の画像'" />
        </figure>

        <div class="workWindow__contentWrap__contents__right">
          <div class="workWindow__contentWrap__contents__concept">
            <h4 class="workWindow__contentWrap__contents__title">Concept</h4>
            <p
              class="workWindow__contentWrap__contents__text"
              v-html="workData.concept"
            ></p>
          </div>
          <div class="workWindow__contentWrap__contents__motivation">
            <h4 class="workWindow__contentWrap__contents__title">Motivation</h4>
            <p
              class="workWindow__contentWrap__contents__text"
              v-html="workData.motivation"
            ></p>
          </div>
          <div class="workWindow__contentWrap__contents__other f-bet">
            <div class="workWindow__contentWrap__contents__production">
              <h4 class="workWindow__contentWrap__contents__title">
                Production
              </h4>
              <p class="workWindow__contentWrap__contents__text">
                {{ workData.production }}
              </p>
            </div>
            <div class="workWindow__contentWrap__contents__position">
              <h4 class="workWindow__contentWrap__contents__title">Position</h4>
              <p class="workWindow__contentWrap__contents__text">
                {{ workData.position }}
              </p>
            </div>
            <div class="workWindow__contentWrap__contents__usetime">
              <h4 class="workWindow__contentWrap__contents__title">UseTime</h4>
              <p class="workWindow__contentWrap__contents__text">
                {{ workData.usetime + "時間" }}
              </p>
            </div>
            <div class="workWindow__contentWrap__contents__tool">
              <h4 class="workWindow__contentWrap__contents__title">Tool</h4>
              <p class="workWindow__contentWrap__contents__text">
                {{ workData.tool }}
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="workWindow__contentWrap__btns f-bet">
        <p class="workWindow__contentWrap__btns__btn">
          <a :href="workData.link" target="ruru">SITE</a>
        </p>
        <p class="workWindow__contentWrap__btns__btn">
          <a :href="workData.github" target="ruru">GITHUB</a>
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    workData: {
      type: Object,
      required: true,
    },
  },
};
</script>

<style lang="scss" scoped>
.workWindow {
  z-index: 1000;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  &__background {
    width: 100%;
    height: 100%;
    background-color: rgba($color: #000000, $alpha: 0.3);
  }

  &__contentWrap {
    min-width: 1020px;
    min-height: 650px;
    width: calc(100% - 160px);
    height: calc(100% - 120px);
    margin: auto;
    border-radius: 60px;
    padding: 30px 40px;
    background-color: $white1;
    color: $black1;
    overflow: scroll;
    flex-direction: column;

    &__title {
      font-weight: bold;
      font-size: 4.8rem;
      line-height: 4.8rem;
      text-align: center;
    }

    &__contents {
      font-size: 1.8rem;
      // レイアウト
      &__left {
        width: 60%;
        img {
          border-radius: 16px;
          object-fit: cover;
        }
      }
      &__right {
        width: 38%;
      }
      &__other {
        flex-wrap: wrap;
        width: 100%;
        & > div {
          width: 49%;
        }
      }

      // style
      &__title {
        font-weight: bold;
        margin-top: 16px;
        margin-bottom: 4px;
        &::after {
          content: " />";
        }
      }

      &__text {
        opacity: 0.9;
      }
    }

    &__btns {
      width: 470px;
      height: 62px;
      &__btn {
        width: 161px;
        height: 62px;
        background: $pink1;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 30px;

        font-weight: bold;
        font-size: 2.2rem;
        line-height: 62px;
        text-align: center;
        color: $white1;

        transition: all 0.5s;

        &:active {
          transform: translateY(4px);
          box-shadow: none;
        }
        a {
          display: block;
          height: 100%;
          width: 100%;
        }
      }
    }
  }
}
.closebtn {
  width: 40px;
  height: 40px;
  top: 35px;
  right: 35px;
  &::before,
  &::after {
    content: "";
    display: block;
    width: 100%;
    height: 10%;
    background-color: $black1;
  }
  &::before {
    transform: rotate(45deg);
  }
  &::after {
    transform: translateY(-4px) rotate(-45deg);
  }
}
</style>
