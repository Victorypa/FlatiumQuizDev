<template>
  <div>
    <app-header></app-header>
    <div class="result__wrapper">
        <result></result>
    </div>
  </div>


</template>

<script>
  import { results } from './index.js'
  import Result from './partials/Result'

  export default {
    data () {
      return {
        results: []
      }
    },

    components: {
        Result
    },

    mounted () {
      this.init()
    },

    methods: {
      init () {
        this.results = results
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
    background-image: url('/storage/results/Loft.jpg');
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
