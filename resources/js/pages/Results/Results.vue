<template>
  <div>
    <app-header></app-header>

    <app-navigation selected="result"></app-navigation>

    <div v-if="data.length"
         class="result__wrapper"
         :style="{ backgroundImage: 'url(' + data[0].image + ')' }"
         >
        <result :data="data"></result>
    </div>
  </div>

</template>

<script>
  import { results } from './index.js'
  import Result from './partials/Result'

  export default {
    data () {
      return {
        results: [],
        result: [],

        data: []
      }
    },

    components: {
        Result
    },

    mounted () {
      this.getResult()
    },

    methods: {
      getResult () {
          this.results = results

          axios.get(`/cards/${window.location.search.match(/\d+/g).toString()}`)
               .then(response => {
                   this.result = response.data
                   this.data = this.results.filter(item => item.type === this.result.result)
               })
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
    height: auto;
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
      color: #00afd8;
      font-size: 18px;
      text-transform: uppercase;
    }
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


@media only screen and (min-device-width: 500px)  {
  .result {
    &__wrapper {
      min-height: 100vh;

    }
  }
}
</style>
