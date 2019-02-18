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
          {{ data[0].description1 }}
        </div>
        <div class="result__text">
          {{ data[0].description2 }}
        </div>
      <!-- <div class="result__share">
        Покажи результат своим друзьям
        <div class="result__socials">
            <a class="result__link result__link--vk" href="#">VK</a>
            <a class="result__link result__link--tw" href="#">Twitter</a>
            <a class="result__link result__link--fb" href="#"></a>
        </div>
      </div> -->
      </div>

      <button type="button"
         name="button"
         class="primary-button"
         @click="redirect(data[0])"
         >
          Смотреть стиль
      </button>

      <button type="button"
              name="button"
              class="primary-button"
              @click="redirectToSquareCount(card_id)"
              >
        Рассчитать
      </button>

    </div>
</template>

<script>
    export default {
        props: ['data'],

        data () {
            return {
                card_id: window.location.search.match(/\d+/g).toString()
            }
        },

        methods: {
            redirect (data) {
                window.location.href = data.link
            },

            redirectToSquareCount (card_id) {
                window.location.href = `/cards/square?card_id=${card_id}`
            }
        }
    }
</script>


<style lang="scss" scoped>
.result {
  &__wrapper {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    padding: 30px;
    background-image: url('/storage/results/Loft.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 100vh;
  }

  &__card {
    max-width: 765px;
    width: 100%;

    text-align: center;

    background-color: #fff;

    padding: 50px 0;
    margin: 35px;
    box-shadow: 0 0 76px rgba(61,61,61,0.75);
    span {
      color: #c28800;
      font-size: 18px;
      text-transform: uppercase;
    }
  }
  &__text {
    display: block;
    padding-bottom: 45px;
  }
  &__name {
    font-size: 36px;
    letter-spacing: 0px;
    line-height: 43px;
    // font-family: "Rubik";
    font-weight: 400;
    text-align: center;
  }
  &__desc {
    width: 65%;

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
}

.logo {
  position: absolute;

  width: 120px;
  margin-top: 10px;
  margin-left: 6%;

  &__img {
    width: 100%;
    height: 100%;
  }
}

.card-button {
  width: 115px;
  background-color: transparent;
  border: none;
  cursor: pointer;
  &__info {
    font-size: 10px;
    color: #4b4b4b;
    line-height: 16px;
    padding-top: 15px;
    &:hover {
      color: #00afd8;
    }
  }
  &:focus {
    outline: none;
  }
}

@media (max-width: 500px) {
  .result {
    &__name {
        font-size: 25px;
    }
    &__text {
      display: none;
    }
  }
}

.primary-button {
  width: 200px;
}

</style>
