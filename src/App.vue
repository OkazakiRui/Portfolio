<template>
  <div id="app">
    <router-view />
  </div>
</template>

<style lang="scss">
* {
  font-family: "Roboto Condensed", sans-serif;
  // font-family: 'Roboto Mono', monospace;
}
html {
  font-size: 62.5%;
  background-color: $black1;
  color: $white1;

  height: 3000px;
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

// background styles
.home > div:nth-of-type(odd) .background {
  background-color: $black1;
  color: $black2;
}
.home > div:nth-of-type(even) .background {
  background-color: $black2;
  color: $black1;
}
</style>
