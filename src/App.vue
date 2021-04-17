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
</style>
