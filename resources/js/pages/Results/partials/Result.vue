<template>
    <div class="result__card">
      <div class="result__title">
        <span>Ваш стиль</span>
      <div class="result__name">
        {{ data[0].title }}
      </div>
      </div>
      <div class="result__desc">
        <div class="result__info">
          {{ data[0].description }}
        </div>
      <div class="result__share">
        Покажи результат своим друзьям
        <div class="result__socials">
            <a class="result__link result__link--vk" href="#">VK</a>
            <a class="result__link result__link--tw" href="#">Twitter</a>
            <a class="result__link result__link--fb" href="#"></a>
        </div>
      </div>
      </div>
      <button type="button"
         name="button"
         class="result__button"
         @click="redirect(data[0])"
         >
          Смотреть стиль
      </button>
    </div>
</template>

<script>
    export default {
        props: ['data'],

        methods: {
            redirect (data) {
                window.location.href = data.link
            }
        }
    }
</script>


<style lang="scss" scoped>
.result {
  &__card {
    max-width: 765px;
    width: 100%;

    text-align: center;

    background-color: #fff;

    padding: 50px 0;
    margin: 15px;
    box-shadow: 0 0 76px rgba(61,61,61,0.75);
    span {
      color: #00afd8;
      font-size: 18px;
      text-transform: uppercase;
    }
  }
  &__name {
    font-size: 36px;
    letter-spacing: 0px;
    line-height: 43px;
    font-family: "Rubik";
    font-weight: 400;
    text-align: center;
  }
  &__desc {
    width: 60%;

    margin: 0 auto;
    font-family: 'Open Sans', sans-serif;
    font-weight: 300;
    font-size: 18px;

    color: #4b4b4b;
  }
  &__info {
      padding: 45px 0;
  }
  &__socials {
      padding: 20px 0;
  }
  &__link {
    content: '';
    width: 25px;
    height: 15px;
    fill: #a5a5a5;

    &--vk {
      content: url('/storage/results/vk-social-network-logo.svg');
    }
    &--tw {
      content: url('/storage/results/twitter-logo-silhouette.svg');
    }
    &--fb {
      content: url('/storage/results/vk-social-network-logo.svg');
    }
  }
  &__button {
    width: 170px;
    height: 49px;
    background-color: #009ec2;
    color: #fff;
    border: none;
    cursor: pointer;
  }
}
.logo {
  position: absolute;

  width: 120px;
  margin-top: 20px;
  margin-left: 6%;

  &__img {
    width: 100%;
    height: 100%;
  }
}

</style>
