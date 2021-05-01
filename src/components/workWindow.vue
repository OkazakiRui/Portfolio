<template>
  <div class="workWindow p-fi flex">
    <div class="workWindow__contentWrap">
      <h3 class="workWindow__contentWrap__title">{{ workData.title }}</h3>
      <div class="workWindow__contentWrap__contents flex">
        <figure class="workWindow__contentWrap__contents__left">
          <img src="" :alt="workData.title + 'の画像'" />
        </figure>
        <div class="workWindow__contentWrap__contents__right">
          <div class="workWindow__contentWrap__contents__consept"></div>
          <div class="workWindow__contentWrap__contents__motivation"></div>
          <div class="workWindow__contentWrap__contents__other">
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
                {{ workData.usetime }}
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
  background-color: rgba($color: #000000, $alpha: 0.3);
  &__contentWrap {
    min-width: 1020px;
    min-height: 650px;
    width: calc(100% - 160px);
    height: calc(100% - 120px);
    margin: auto;
    border-radius: 60px;
    padding: 60px;
    background-color: $white1;
    color: $black1;
    overflow: scroll;

    font-size: 4rem;
  }
}
</style>
