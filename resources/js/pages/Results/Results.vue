<template>
  <div>
    <app-header></app-header>
    <template v-if="data.length">
        <div class="result__wrapper" :style="{ backgroundImage: 'url(' + data[0].image + ')' }">
            <result :data="data"></result>
        </div>
    </template>
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

          axios.get(`/cards/${window.location.pathname.match(/\d+/g).toString()}`)
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
    background-position: center;
    height: 100vh;
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
