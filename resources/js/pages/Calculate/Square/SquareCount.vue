<template>
  <div>
      <app-header></app-header>

      <app-navigation></app-navigation>

      <div class="progress-bar__wrapper">
        <progress-bar bar-color="#aad7ea " val="20"></progress-bar>
      </div>

      <div class="content-center">
          <div class="container">
              <form>
                <div class="form-group">
                  <h1 class="main-caption">
                  Укажите площадь помещения
                  </h1>
                  <input type="number" class="mobile-input" name="" value="">
                  <vue-slider ref="slider" v-model="value" class="vue-slider"></vue-slider>
                </div>
              </form>
          </div>
      </div>
  </div>

</template>

<script>
    import ProgressBar from 'vue-simple-progress'
    import vueSlider from 'vue-slider-component'

    export default {
      data () {
        return {
          value: 10
        }
      },

        components: {
          ProgressBar,
          vueSlider
        },
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
