<template>
  <div>
      <app-header></app-header>

      <app-navigation selected="calculator"></app-navigation>

      <calculate-progressbar ref="progressbar" :volumn="10"></calculate-progressbar>

      <div class="content-center">
          <div class="container">
              <form class="square-content" @submit.prevent="submit()">
                <div>
                  <h1 class="main-caption">
                      Укажите площадь помещения
                  </h1>
                  <input type="number"
                         class="mobile-input"
                         required
                         v-model="area"
                         >
                </div>
                <vue-slider ref="slider"
                            v-model="area"
                            class="vue-slider"
                            :value='area'
                            :height='2'
                            :dotSize="30"
                            :max='500'
                            :interval='1'
                            :bgStyle="{ backgroundColor: 'black' }"
                            :tooltipStyle="{ backgroundColor: '#f8f8f8', borderColor: '#ccc', color: '#000', fontSize: '18px', padding: '10px'}"
                            :processStyle="{ backgroundColor: '#999' }"
                            >
               </vue-slider>
                <div>
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
                  // this.$refs.progressbar.increment(10)
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
}

.square-content {
  display: flex;
  flex-direction: column;
  min-height: 50vh;
  justify-content: space-around;
}

@media (max-width: 768px) {
  .mobile-input {
    display: block;
  }
  .vue-slider {
    padding: 40px;
    display: none;
  }
  .square-content {
    min-height: auto;
  }
}

</style>
