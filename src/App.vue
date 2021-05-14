<template>
  <div id="app">
    <home></home>
  </div>
</template>
<script>
import Home from "./views/Home.vue";
export default {
  components: {
    Home,
  },
};
</script>
<style lang="scss">
* {
  font-family: "Roboto Condensed", sans-serif;
  // font-family: 'Roboto Mono', monospace;
  cursor: none;
}
html {
  font-size: 62.5%;
  background-color: $black1;
  color: $white1;
}
header,
main,
footer {
  min-width: 960px;
  margin: 0 auto;
}
ul {
  list-style: none;
}
a {
  color: inherit;
  text-decoration: none;
}
input,
textarea {
  -webkit-appearance: none;
}
input,
button,
textarea,
select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

// scrollbar
::-webkit-scrollbar {
  width: 0;
}

// background styles
.home > div:nth-of-type(odd) .background {
  background-color: $black1;
  color: $black2;
}
.home > div:nth-of-type(even) .background {
  background-color: $black2;
  color: $black1;
}

figure,
img {
  width: 100%;
  height: 100%;
}

#app {
  // overflow: hidden;
  padding-right: 4px;
}

// マウスストーカー
.pointer,
.stoker {
  pointer-events: none;
  position: fixed;
  top: 0;
  left: 0;
  border-radius: 50%;
  opacity: 0;
}
.pointer {
  width: 10px;
  height: 10px;
  background: white;
  z-index: 10001;
  transition: opacity 0.2s;
  .is-move & {
    opacity: 1;
  }
  .is-outside & {
    opacity: 0;
  }
}
.stoker {
  width: 40px;
  height: 40px;
  background: $pink1;
  z-index: 10000;
  transition: opacity 0.2s 0.2s, background 0.2s;
  .is-move & {
    opacity: 0.5;
  }
  .is-outside & {
    opacity: 0;
  }
}
</style>
