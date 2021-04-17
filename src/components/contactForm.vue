<template>
  <div>
    <form
      action="http://click.ecc.ac.jp/ecc/rokazaki/sendmail.php"
      method="post"
      class="contactForm mar"
    >
      <div class="contactForm__col2Wrap f-bet">
        <div class="contactForm__col2 p-re">
          <input
            @keypress="nameenter"
            id="name"
            v-model="name"
            type="text"
            ref="name"
            name="name"
          />
          <label
            :class="{
              contactForm__label: true,
              'p-ab': true,
              labelup: name === '' ? false : true,
            }"
            for="name"
            id="labelname"
            >Name</label
          >
          <div class="focusborder p-ab"></div>
        </div>
        <div class="contactForm__col2 p-re">
          <input
            @keypress="emailenter"
            id="email"
            v-model="email"
            type="email"
            ref="email"
            name="email"
          />
          <label
            :class="{
              contactForm__label: true,
              'p-ab': true,
              labelup: email === '' ? false : true,
            }"
            for="email"
            id="labelemail"
            >Email</label
          >
          <div class="focusborder p-ab"></div>
        </div>
      </div>
      <div class="contactForm__col1 p-re">
        <textarea
          v-model="comments"
          name="comments"
          id="comments"
          ref="comments"
          :style="autoHeight"
        ></textarea>
        <label
          :class="{
            contactForm__label: true,
            'p-ab': true,
            labelup: comments === '' ? false : true,
          }"
          for="comments"
          id="labelcomments"
          >Comments</label
        >
        <div class="focusborder p-ab"></div>
      </div>
      <div class="contactForm__col1 f-jus">
        <input
          type="submit"
          name="send"
          value="SEND"
          class="contactForm__submit"
          @click="check"
        />
      </div>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      name: "",
      email: "",
      comments: "",
    };
  },
  computed: {
    autoHeight() {
      let height;
      height = this.comments.split("\n").length + 0.25;
      return "height:" + height * 21 + "px";
    },
  },
  methods: {
    nameenter(e) {
      if (e.keyCode === 13) {
        this.$nextTick(() => this.$refs.email.focus());
        e.preventDefault();
      }
    },
    emailenter(e) {
      if (e.keyCode === 13) {
        this.$nextTick(() => this.$refs.comments.focus());
        e.preventDefault();
      }
    },
    check(e) {
      let flag = [false, false, false];

      if (this.name === "") {
        this.$nextTick(() => {
          let labelname = document.getElementById("labelname");
          labelname.innerHTML =
            "Name <span class='c-r' style='font-size:1.1rem;'>※必須項目です。</span>";
        });
        flag[0] = false;
      } else {
        let labelcomments = document.getElementById("labelname");
        labelcomments.innerHTML = "Name";
        flag[0] = true;
      }

      if (this.email === "") {
        this.$nextTick(() => {
          let labelemail = document.getElementById("labelemail");
          labelemail.innerHTML =
            "Email <span class='c-r' style='font-size:1.1rem;'>※必須項目です。</span>";
        });
        flag[1] = false;
      }

      const regexp = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/;
      if (regexp.test(this.email)) {
        let labelcomments = document.getElementById("labelemail");
        labelcomments.innerHTML = "Email";
        flag[1] = true;
        // 全て正しい処理
      } else {
        let labelemail = document.getElementById("labelemail");
        labelemail.innerHTML =
          "Email <span class='c-r' style='font-size:1.1rem;'>※無効なメールアドレスです。</span>";
        flag[1] = false;
      }

      if (this.comments === "") {
        this.$nextTick(() => {
          let labelcomments = document.getElementById("labelcomments");
          labelcomments.innerHTML =
            "Comments <span class='c-r' style='font-size:1.1rem;'>※必須項目です。</span>";
        });
        flag[2] = false;
      } else {
        let labelcomments = document.getElementById("labelcomments");
        labelcomments.innerHTML = "Comments";
        flag[2] = true;
      }

      console.log(flag);
      if (flag[0] === false || flag[1] === false || flag[2] === false) {
        e.preventDefault();
      }
    },
  },
};
</script>

<style lang="scss" scoped>
.contactForm {
  font-size: 1.4rem;
  width: 810px;

  &__col2Wrap {
    padding-top: 20px;
    margin-bottom: 50px;
  }
  &__col2 {
    width: 386px;
  }
  &__col1 {
    margin-bottom: 60px;
  }

  &__label {
    left: 6px;
    top: 6px;
    transition: all 0.3s;
  }

  .labelup {
    top: -15px;
    font-size: 1.2rem;
  }

  input:focus + &__label,
  textarea:focus + &__label {
    top: -15px;
    font-size: 1.2rem;
  }

  input:focus.labelup + &__label,
  textarea:focus.labelup + &__label {
    top: -15px;
    font-size: 1.2rem;
  }

  input,
  textarea {
    display: block;
    width: 100%;
    min-height: 30px;
    padding: 0 6px;
    border-bottom: 2px solid $white1;
    background-color: none;
    color: $white1;
    line-height: 21px;
    letter-spacing: 1px;
    resize: none;

    &:focus {
      outline: none;

      & + label + .focusborder {
        transform: scaleX(1);
      }
    }
  }

  .focusborder {
    background-color: $pink1;
    width: 100%;
    height: 2px;
    bottom: 0;
    transform-origin: center center;
    transform: scaleX(0);
    transition: all 0.3s;
  }

  input[type="submit"] {
    height: 62px;
    width: 180px;
  }

  input:-webkit-autofill {
    box-shadow: 0 0 0px 40px $black2 inset !important;
    -webkit-text-fill-color: $white1 !important;
  }

  &__submit {
    background-color: #0bffd4;
    color: $white1;
    font-size: 2.2rem;
    box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.5);
    border-radius: 30px;
    transition: all 0.3s;
    &:hover {
      transform: scale(1.1);
    }
  }
}
</style>
