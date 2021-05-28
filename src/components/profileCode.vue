<template>
  <div class=".font">
    <div id="code" v-html="addClass"></div>
  </div>
</template>

<script>
// import profileCode from "../scripts/profileCode.js";
export default {
  data() {
    return {
      beforeCode: `class RuiOkazaki {
  constructor() {
    this.name = "岡崎 流依";
    this.age = 19;
    this.birthday = "2002年02月06日";
    this.live = "Kobe";
    this.email = "okazaki200226@gmail.com";
  }
  programmingLanguage() {
    return [ "HTML5", "CSS", "JavaScript", "PHP", "MySQL", "Pug", "SCSS", "Vue.js", "jQuery", "TypeScript", "ejs" ];
  }
  mainLanguage() {
    return [ "HTML5", "CSS", "JavaScript", "SCSS", "Vue.js" ];
  }
  tools() {
    return [ "VisualStudioCode", "Figma", "Photoshop", "Illustrator", "AfterEffects", "Premiere", "XD", "InDesign" ];
  }
}
`,
    };
  },
  computed: {
    addClass() {
      let afterCode;
      afterCode = this.beforeCode.replace(/ /g, `\u3000`);
      afterCode = afterCode.replace(
        /.*\r?\n/g,
        `<p class="codeWrap"><span class="code">$&</span></p>`
      );
      afterCode = afterCode.replace(
        /\u3000"/g,
        `\u3000<span class='code-string'>"`
      );
      afterCode = afterCode.replace(/",/g, `"</span>,`);
      afterCode = afterCode.replace(/";/g, `"</span>;`);
      afterCode = afterCode.replace(/"\u3000/g, `"</span>\u3000`);
      afterCode = afterCode.replace(
        /\u3000[0-9]*;/g,
        `<span class='code-number'>$&</span>`
      );
      afterCode = afterCode.replace(
        /this*/g,
        `<span class='code-property'>$&</span>`
      );
      afterCode = afterCode.replace(
        /\u3000[0-9a-zA-Z]*\(\)/g,
        `<span class='code-methods'>$&</span>`
      );
      afterCode = afterCode.replace(
        /class\u3000/g,
        `<span class='code-class'>class\u3000</span>`
      );
      afterCode = afterCode.replace(
        /RuiOkazaki/g,
        `<span class='code-className'>$&</span>`
      );
      afterCode = afterCode.replace(
        /return\u3000/g,
        `<span class='code-className'>return\u3000</span>`
      );
      afterCode = afterCode.replace(
        /\(|\)|\[|\]|\u3000=|\{|\}/g,
        `<span class='code-brackets'>$&</span>`
      );
      return afterCode;
    },
  },
  mounted() {
    const codeWrap = document.querySelectorAll(".codeWrap");
    codeWrap.forEach((element, index) => {
      element.setAttribute("data-value", index + 1);
    });
  },
};
</script>

<style lang="scss" scoped>
div {
  font-size: 1.6rem;
  line-height: 24px;
}
</style>
