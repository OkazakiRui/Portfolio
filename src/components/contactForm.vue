<template>
  <div>
    <form action="" method="post" class="contactForm mar">
      <div class="contactForm__col2Wrap f-bet">
        <div class="contactForm__col2 p-re">
          <input type="text" id="name" class="floatLabel" name="name" />
          <label class="contactForm__label p-ab" for="name">Name</label>
        </div>
        <div class="contactForm__col2 p-re">
          <input type="email" id="email" class="floatLabel" name="email" />
          <label class="contactForm__label p-ab" for="email">Email</label>
        </div>
      </div>
      <div class="contactForm__col1 p-re">
        <textarea name="comments" class="floatLabel" id="comments"></textarea>
        <label class="contactForm__label p-ab" for="comments">Comments</label>
      </div>
      <div class="contactForm__col1">
        <input type="submit" value="SEND" class="contactForm__submit" />
      </div>
    </form>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
.contactForm {
  font-size: 1.4rem;
  width: 810px;

  &__col2Wrap {
    padding-top: 20px;
    margin-bottom: 30px;
  }
  &__col2 {
    width: 386px;
  }
  &__col1 {
    margin-bottom: 90px;
  }

  &__label {
    left: 6px;
    top: 6px;
    transition: all 0.3s;
  }

  .labelup {
    top: -20px;
    font-size: 1rem;
  }

  input:focus + &__label {
    top: -20px;
    font-size: 1rem;
  }
  textarea:focus + &__label {
    top: -20px;
    font-size: 1rem;
  }

  input,
  textarea {
    width: 100%;
    height: 30px;
    padding: 6px;
    border-bottom: 2px solid $white1;
    background-color: none;
    color: $white1;
    &:focus {
      outline: none;
    }
  }

  input:-webkit-autofill {
    box-shadow: 0 0 0px 40px $black2 inset !important;
    -webkit-text-fill-color: $white1 !important;
  }

  &__submit {
    width: 161px;
    height: 62px;
    background-color: #0bffd4;
    color: $white1;
    font-size: 2.2rem;
    box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.5);
    border-radius: 30px;
  }
}
</style>
