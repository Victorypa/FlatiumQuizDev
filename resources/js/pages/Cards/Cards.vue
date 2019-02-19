<template>
  <div>
    <app-header></app-header>
    <div class="progress-bar__wrapper">
          <progress-bar bar-color="#aad7ea " :val="progress_value"></progress-bar>
    </div>

      <div class="content-center">
          <div class="container">
              <transition name="fade">
                  <card v-if="cards_booleans.a"
                        title='Я бы описал свой стиль как...'
                        type='A'
                        :cards="acards"
                        @selected-card="AddCard"
                        />
              </transition>

              <transition name="fade">
                  <card v-if="cards_booleans.b"
                        title="При выборе мебели и домашнего декора, я предпочитаю ..."
                        type='B'
                        :cards="bcards"
                        @selected-card="AddCard"
                        />
              </transition>

              <transition name="fade">
                  <card v-if="cards_booleans.c1"
                        title="Какое изображение домашнего декора вам больше нравятся?"
                        type='C1'
                        :cards="c1cards"
                        @selected-card="AddCard"
                        />
              </transition>

              <transition name="fade">
                  <card v-if="cards_booleans.c2"
                        title="Какое изображение домашнего декора вам больше нравятся?"
                        type='C2'
                        :cards="c2cards"
                        @selected-card="AddCard"
                        />
              </transition>

              <transition name="fade">
                  <card v-if="cards_booleans.c3"
                        title="Какое изображение домашнего декора вам больше нравятся?"
                        type='C3'
                        :cards="c3cards"
                        @selected-card="AddCard"
                        />
              </transition>

              <transition name="fade">
                  <card v-if="cards_booleans.d1"
                        title="Какие цветовые решения в вашем доме, вы предпочитаете?"
                        type='D1'
                        :cards="d1cards"
                        @selected-card="AddCard"
                        />
              </transition>

              <transition name="fade">
                  <card v-if="cards_booleans.d2"
                        title="Какие цветовые решения в вашем доме, вы предпочитаете?"
                        type='D2'
                        :cards="d2cards"
                        @selected-card="AddCard"
                        />
              </transition>

              <transition name="fade">
                  <card v-if="cards_booleans.d3"
                        title="Какие цветовые решения в вашем доме, вы предпочитаете?"
                        type='D3'
                        :cards="d3cards"
                        @selected-card="AddCard"
                        />
              </transition>
            </div>
      </div>
  </div>

</template>

<script>
  import ProgressBar from 'vue-simple-progress'
  import {
       acards, bcards, c1cards, c2cards,
       c3cards, d1cards, d2cards, d3cards, cards_booleans
   }  from './index.js'
  import {
       SK, K, SKAN,
       CON, ECO, LOFT
   } from '../../utilities/results.js'

  import Card from './partials/Card'

  export default {
      components: {
        ProgressBar,
        Card
      },
      data () {
          return {
              acards, bcards, c1cards, c2cards, c3cards,
              d1cards, d2cards, d3cards, cards_booleans,
              SK, K, SKAN, CON, ECO, LOFT,

              selected_uuids: [],
              progress_value: 10
          }
      },

      methods: {
         AddCard (data) {
             this.progress_value += 10
             this.selected_uuids.push(data.uuid)

             switch (data.type) {
                 case 'A':
                     this.cards_booleans.a = false
                     setTimeout(() => {
                         this.cards_booleans.b = true
                     }, 1000)
                     break;
                case 'B':
                    this.cards_booleans.b = false
                    if (this.selected_uuids.includes('A1')) {
                        setTimeout(() => {
                            this.cards_booleans.c1 = true
                        }, 1000)
                    }
                    if (this.selected_uuids.includes('A2')) {
                        setTimeout(() => {
                            this.cards_booleans.c2 = true
                        }, 1000)
                    }
                    if (this.selected_uuids.includes('A3')) {
                        setTimeout(() => {
                            this.cards_booleans.c3 = true
                        }, 1000)
                    }
                    break;

                case 'C1':
                    this.cards_booleans.c1 = false

                    setTimeout(() => {
                        this.cards_booleans.d1 = true
                    }, 1000)

                    break;

                case 'C2':
                    this.cards_booleans.c2 = false

                    setTimeout(() => {
                        this.cards_booleans.d2 = true
                    }, 1000)

                    break;

                case 'C3':
                    this.cards_booleans.c3 = false

                    setTimeout(() => {
                        this.cards_booleans.d3 = true
                    }, 1000)

                    break;

                case 'D1':
                    this.cards_booleans.d1 = false
                    this.resultsFiltering(this.selected_uuids.join(''))
                    break;

                case 'D2':
                    this.cards_booleans.d2 = false
                    this.resultsFiltering(this.selected_uuids.join(''))
                    break;

                case 'D3':
                    this.cards_booleans.d3 = false
                    this.resultsFiltering(this.selected_uuids.join(''))
                    break;
                 default:
                 return null;
             }
         },


          resultsFiltering (data) {
              let result
              if (this.SK.includes(data)) {
                  result = 'SK'
              }

              if (this.K.includes(data)) {
                  result = 'K'
              }

              if (this.SKAN.includes(data)) {
                  result = 'SKAN'
              }

              if (this.CON.includes(data)) {
                  result = 'CON'
              }

              if (this.ECO.includes(data)) {
                  result = 'ECO'
              }

              if (this.LOFT.includes(data)) {
                  result = 'LOFT'
              }

              axios.post('/api/card/store', {
                  'option': this.selected_uuids.join(''),
                  'result': result
              }).then(response => {
                  console.log(response.data);
                  setTimeout(() => {
                      window.location.href = `/cards/rooms?card_id=${response.data.id}`
                  }, 500)
              })
          }
      }
  }
</script>

<style lang="scss" scoped>
@keyframes smooth {
0% { opacity: 1;}
100% { opacity: 0;}
}

@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fade-in {
  opacity:0;
  animation:fadeIn ease-in 1;
  animation-fill-mode:forwards;
  animation-duration:1s;
}

.fade-leave-active {
    animation: smooth 1s ease-in;
}

.progress-bar {
  &__wrapper {
    margin: 30px 0;
  }
}

.image {
  &-wrapper {
  display: flex;
  justify-content: center;
  }
  &-card {
  width: 90%;
  height: 100%;

  display: block;
  border: 2px solid #eee;


  padding: 18px;
  margin-left: 30px;

  font-size: 14px;
  text-decoration: none;

  outline: none;
  transition-duration: .6s;
  cursor: pointer;
  &:first-child {
    margin-left: 0;
  }
    &:hover {
    border: 2px solid #000;
    box-shadow: 0 15px 22px 0 rgba(28,34,51,.2);
    transform: scale(1.025);
    }
    img {
    height: auto;
    width: 100%;

    }
  }
  &-text {
  margin: 0;
  padding: 0;
  font-size: 12px;
  color: #1c2233;
  letter-spacing: 2px;
  line-height: 1.9;
  margin-top: 14px;

  text-align: center;
  text-transform: uppercase;
  }
}


@media (min-width: 700px) {
  .content-center {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: -5%;
    height: 100vh;
  }
}
@media (max-width: 700px) {
  .image-wrapper  {
    flex-wrap: wrap;
  }
  .image-card {
    margin-bottom: 20px;
    margin-left: 0px;
  }
}

</style>
