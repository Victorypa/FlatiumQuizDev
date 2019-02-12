<template>
  <div>
      <app-header></app-header>

      <app-navigation></app-navigation>

      <calculate-progressbar ref="progressbar"></calculate-progressbar>

      <div class="content-center">
          <div class="container">
              <form @submit.prevent="submit()">
                <div class="form-group">
                  <h1 class="main-caption">
                      Укажите площадь помещения
                  </h1>
                  <input type="number"
                         class="mobile-input"
                         required
                         v-model="area"
                         >

                  <vue-slider ref="slider"
                              v-model="area"
                              class="vue-slider"
                              >
                 </vue-slider>

                </div>

                <div class="form-group">
                    <div class="button-wrapper">
                        <button type="submit"
                                class="primary-button"
                                >
                           Далее
                       </button>
                    </div>
                </div>
              </form>
          </div>
      </div>
  </div>

</template>

<script>
    import vueSlider from 'vue-slider-component'

    export default {
      data () {
        return {
            area: 30
        }
      },

      components: {
        vueSlider
      },

      methods: {
          submit () {
              let card_id = window.location.search.match(/\d+/g).toString()
              axios.post(`/cards/square/store`, {
                  'card_id': card_id,
                  'area': this.area
              }).then(response => {
                  this.$refs.progressbar.increment(10)
                  window.location.href = `/cards/decoration?card_id=${card_id}`
              })
          }
      }
}
</script>

<style lang="scss" scoped>
.mobile-input {
display: none;
border: 2px solid #eee;
border-radius: 5px;
box-sizing: border-box;
font-weight: 400;
font-size: 15px;
line-height: 1.5;
text-indent: 0;
letter-spacing: .025em;
outline: none;
padding: 14.4px;

transition: border .15s ease-in-out;
width: 100%;
}

.content-center {
  margin: 50px 0;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: -5%;
  height: 100vh;
}

.vue-slider-component {
    margin: 50px 0;
}

@media (max-width: 768px) {
.mobile-input {
  display: block;
}
.vue-slider {
  padding: 40px;
  display: none;

}
}

</style>
