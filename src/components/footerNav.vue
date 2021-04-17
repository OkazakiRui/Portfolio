<template>
  <footer class="footer">
    <div class="contentWrap p-re">
      <p class="footer__copy f-alibet p-ab">
        <small class="font c-g">&copy; 2021 RUI OKAZAKI</small>
      </p>
      <div class="footer__links f-alibet p-ab mar">
        <a href="https://github.com/OkazakiRui" target="ruru"
          ><img src="@/assets/svg/github.svg"
        /></a>
        <a href="https://twitter.com/ruru_FrontEnd" target="ruru"
          ><img src="@/assets/svg/twitter.svg"
        /></a>
      </div>
    </div>
  </footer>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
.footer {
  height: 0px;
  &__copy,
  &__links {
    height: 50px;
  }
  &__copy {
    top: -50px;
    width: 100%;
    small {
      font-size: 1.2rem;
    }
  }
  &__links {
    top: -50px;
    left: 0;
    right: 0;
    width: 50px;
  }
}
footer > .contentWrap {
  padding: 0 22px;
}
</style>
