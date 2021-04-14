<template>
  <header class="header f-alibet p-fi">
    <h1 class="logo">
      <span class="c-p">&lt;</span> ruru’s portfolio
      <span class="c-p">/&gt;</span>
    </h1>
    <nav>
      <ul class="f-alibet c-g">
        <li>Start /&gt;</li>
        <li>About /&gt;</li>
        <li>Profile /&gt;</li>
        <li>Works /&gt;</li>
        <li>StudyRoom /&gt;</li>
        <li>Contact /&gt;</li>
      </ul>
    </nav>
  </header>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
header {
  width: calc(100% - 60px);
  height: 64px;
  font-size: 2.2rem;
  font-weight: bold;
  top: 0;
  z-index: 100;
  margin: 0 30px;
}
h1 {
  font-size: 2.2rem;
}
li {
  margin-left: 20px;
  cursor: pointer;
}
</style>
