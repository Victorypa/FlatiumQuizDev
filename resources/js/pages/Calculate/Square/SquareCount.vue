<template>
  <div>
      <app-header></app-header>

      <app-navigation></app-navigation>

     <calculate-progressbar></calculate-progressbar>

      <div class="content-center">
          <div class="container">
              <form @submit.prevent="submit()">
                <div class="form-group">
                  <h1 class="main-caption">
                      Укажите площадь помещения
                  </h1>
                  <input type="number"
                         class="mobile-input"
                         v-model="square"
                         >

                  <vue-slider ref="slider"
                              v-model="square"
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
            square: 30
        }
      },

      components: {
        vueSlider
      },

      methods: {
          submit () {
              console.log(this.square);
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
