<template>
  <header class="header f-alibet p-fi">
    <h1 class="logo">
      <span class="c-p">&lt;</span> ruru’s portfolio
      <span class="c-p">/&gt;</span>
    </h1>
    <nav>
      <ul class="f-alibet c-g">
        <li
          class="header__lists lookingSection"
          @click="scrollToSection('start')"
        >
          Start <span>/&gt;</span>
        </li>
        <li class="header__lists" @click="scrollToSection('about')">
          About <span>/&gt;</span>
        </li>
        <li class="header__lists" @click="scrollToSection('profile')">
          Profile <span>/&gt;</span>
        </li>
        <li class="header__lists" @click="scrollToSection('works')">
          Works <span>/&gt;</span>
        </li>
        <!-- <li class="header__lists" @click="scrollToSection('studyRoom')">StudyRoom <span>/&gt;</span></li> -->
        <li class="header__lists" @click="scrollToSection('contact')">
          Contact <span>/&gt;</span>
        </li>
      </ul>
    </nav>
  </header>
</template>

<script>
export default {
  data() {
    return {
      elNames: [],
      elHeights: [],
    };
  },
  mounted() {
    this.getElNames();
    window.addEventListener("scroll", this.scrollAction);
  },
  methods: {
    scrollToSection(id) {
      const el = document.getElementById(id);
      el.scrollIntoView({ behavior: "smooth" });
    },
    getElNames() {
      const lists = document.querySelectorAll(".header__lists");
      lists.forEach((el) => {
        this.elNames.push(el.textContent.split(" ")[1].toLowerCase());
      });
    },
    scrollAction() {
      this.getElHeight();
      this.changeColors();
    },
    getElHeight() {
      this.elHeights = [];
      for (let i = 0; i < this.elNames.length; i++) {
        let total = 0;
        for (let j = 0; j < i; j++) {
          total =
            total + document.querySelector("." + this.elNames[j]).offsetHeight;
        }
        this.elHeights.push(
          total + document.querySelector("." + this.elNames[i]).offsetHeight
        );
      }
    },
    changeColors() {
      const user = window.pageYOffset;
      const lists = document.querySelectorAll(".header__lists");
      if (user < this.elHeights[0]) {
        lists[0].classList.add("lookingSection");
        lists[1].classList.remove("lookingSection");
      } else if (user < this.elHeights[1]) {
        lists[0].classList.remove("lookingSection");
        lists[1].classList.add("lookingSection");
        lists[2].classList.remove("lookingSection");
      } else if (user < this.elHeights[2]) {
        lists[0].classList.remove("lookingSection");
        lists[1].classList.remove("lookingSection");
        lists[2].classList.add("lookingSection");
        lists[3].classList.remove("lookingSection");
      } else if (user < this.elHeights[3]) {
        lists[0].classList.remove("lookingSection");
        lists[2].classList.remove("lookingSection");
        lists[3].classList.add("lookingSection");
        lists[4].classList.remove("lookingSection");
      } else if (user < this.elHeights[4]) {
        lists[0].classList.remove("lookingSection");
        lists[3].classList.remove("lookingSection");
        lists[4].classList.add("lookingSection");
      } else {
        alert("err");
      }
    },
  },
};
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
  // transition: all 0.3s;
  &:hover {
    color: $white1;
    opacity: 0.75;
  }
}
</style>
