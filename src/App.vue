<template>
  <div id="app" @mousemove="mousemove">
    <router-view />
  </div>
</template>

<script>
import { gsap } from "gsap";
export default {
  data() {
    return {
      mouse: {
        wrap_el: "",
        pointer_el: "",
        stoker_el: "",
        position: {
          mouseX: 0,
          mouseY: 0,
          currentX: 0,
          currentY: 0,
        },
        eventStatus: {
          click: false,
          hover: false,
        },
      },
    };
  },
  methods: {
    attachEvent() {
      // マウスが動いた時
      document.addEventListener("mousemove", (e) => {
        this.mouse.position.mouseX = e.clientX;
        this.mouse.position.mouseY = e.clientY;
        this.mouse.wrap_el.classList.add("is-move");
      });

      // マウスが画面外に行った時
      document.body.addEventListener("mouseleave", () => {
        this.mouse.wrap_el.classList.add("is-outside");
      });
      document.body.addEventListener("mouseenter", () => {
        this.mouse.wrap_el.classList.remove("is-outside");
      });

      // クリックした時
      document.addEventListener("mousedown", () => {
        this.mouse.eventStatus.click = true;
      });
      document.addEventListener("mouseup", () => {
        this.mouse.eventStatus.click = false;
      });

      // observer作成
      const observer = new MutationObserver(() => {
        // 全てのaタグにイベントを付けている
        let link = document.querySelectorAll("a");
        for (const target of link) {
          target.addEventListener("mouseenter", () => {
            this.mouse.eventStatus.hover = true;
            this.mouse.wrap_el.classList.add("is-hover");
          });
          target.addEventListener("mouseleave", () => {
            this.mouse.eventStatus.hover = false;
            this.mouse.wrap_el.classList.remove("is-hover");
          });
        }
        // button
        let btns = document.querySelectorAll("button");
        for (const target of btns) {
          target.addEventListener("mouseenter", () => {
            this.mouse.eventStatus.hover = true;
            this.mouse.wrap_el.classList.add("is-hover");
          });
          target.addEventListener("mouseleave", () => {
            this.mouse.eventStatus.hover = false;
            this.mouse.wrap_el.classList.remove("is-hover");
          });
        }
      });

      // observer開始
      const body = document.body;
      observer.observe(body, {
        childList: true,
      });
    },
    tween(){
          gsap.to({}, 0.001, {
            repeat: -1,
            onRepeat: () => {
              this.position.currentX +=
                (this.position.mouseX - this.position.currentX) * 0.5;
              this.position.currentY +=
                (this.position.mouseY - this.position.currentY) * 0.5;

              // pointerの設定
              gsap.set(this.pointer_el, {
                css: {
                  x: this.position.currentX - this.pointer_el.clientWidth / 2,
                  y: this.position.currentY - this.pointer_el.clientHeight / 2,
                },
              });
              // stokerの設定
              // 0.3s掛けて向かう
              gsap.to(this.stoker_el, 0.3, {
                css: {
                  x: this.position.currentX - this.stoker_el.clientWidth / 2,
                  y: this.position.currentY - this.stoker_el.clientHeight / 2,
                  scale: this.scale(this.eventStatus),
                },
              });
            },
          });
        }

        scale(v) {
          if (v.hover == true && v.click == false) {
            return 1.5;
          } else if (v.hover == false && v.click == true) {
            return 0.7;
          } else if (v.hover == true && v.click == true) {
            return 0.7;
          } else {
            return 1;
          }
        }
    }
  },
  mounted() {
    const el = `
        <div class="cursor">
          <div class="pointer"></div>
          <div class="stoker"></div>
        </div>`;
    document.body.insertAdjacentHTML("beforeend", el);
    this.mouse.wrap_el = document.querySelector(".cursor");
    this.mouse.pointer_el = document.querySelector(".pointer");
    this.mouse.stoker_el = document.querySelector(".stoker");
  },
};
</script>

<style lang="scss">
* {
  font-family: "Roboto Condensed", sans-serif;
  // font-family: 'Roboto Mono', monospace;
  // cursor: none;
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
  background: red;
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
