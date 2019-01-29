<template>
  <div>
    <div class="logo">
      <div class="logo__img">
        <img src="/storage/quiz/logo.svg" alt="Flatium-logo">
      </div>
    </div>
    <div class="progress-bar__wrapper">
          <progress-bar bar-color="#aad7ea " :val="progress_value"></progress-bar>
    </div>

      <div class="content-center">
          <div class="container">
              <card v-if="cards_booleans.a"
                    title='Я бы описал свой стиль как...'
                    type='A'
                    :cards="acards"
                    @selected-card="AddCard"
                    />

              <card v-if="cards_booleans.b"
                    title="При выборе мебели и домашнего декора, я предпочитаю ..."
                    type='B'
                    :cards="bcards"
                    @selected-card="AddCard"
                    />

            <card v-if="cards_booleans.c1"
                  title="Какое изображение домашнего декора вам больше нравятся?"
                  type='C1'
                  :cards="c1cards"
                  @selected-card="AddCard"
                  />


            <card v-if="cards_booleans.c2"
                  title="Какое изображение домашнего декора вам больше нравятся?"
                  type='C2'
                  :cards="c2cards"
                  @selected-card="AddCard"
                  />

            <card v-if="cards_booleans.c3"
                  title="Какое изображение домашнего декора вам больше нравятся?"
                  type='C3'
                  :cards="c3cards"
                  @selected-card="AddCard"
                  />

            <card v-if="cards_booleans.d1"
                  title="Какие цветовые решения в вашем доме, вы предпочитаете?"
                  type='D1'
                  :cards="d1cards"
                  @selected-card="AddCard"
                  />

            <card v-if="cards_booleans.d2"
                  title="Какие цветовые решения в вашем доме, вы предпочитаете?"
                  type='D2'
                  :cards="d2cards"
                  @selected-card="AddCard"
                  />

            <card v-if="cards_booleans.d3"
                  title="Какие цветовые решения в вашем доме, вы предпочитаете?"
                  type='D3'
                  :cards="d3cards"
                  @selected-card="AddCard"
                  />
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
              cards_booleans: [],
              acards: [],
              bcards: [],
              c1cards: [],
              c2cards: [],
              c3cards: [],
              d1cards: [],
              d2cards: [],
              d3cards: [],
              selected_uuids: [],

              SK: [],
              K: [],
              SKAN: [],
              CON: [],
              ECO: [],
              LOFT: [],

              progress_value: 10
          }
      },



      mounted () {
          this.cardsInit()
          this.resultsInit()
      },

      methods: {
          cardsInit () {
              this.acards = acards
              this.bcards = bcards
              this.c1cards = c1cards
              this.c2cards = c2cards
              this.c3cards = c3cards
              this.d1cards = d1cards
              this.d2cards = d2cards
              this.d3cards = d3cards
              this.cards_booleans = cards_booleans
          },

          resultsInit () {
              this.K = K
              this.SK = SK
              this.SKAN = SKAN
              this.CON = CON
              this.ECO = ECO
              this.LOFT = LOFT
          },

         AddCard (data) {
             this.progress_value += 10
             this.selected_uuids.push(data.uuid)

             switch (data.type) {
                 case 'A':
                     this.cards_booleans.a = false
                     this.cards_booleans.b = true
                     break;

                case 'B':
                    this.cards_booleans.b = false
                    if (this.selected_uuids.includes('A1')) {
                        this.cards_booleans.c1 = true
                    }
                    if (this.selected_uuids.includes('A2')) {
                        this.cards_booleans.c2 = true
                    }
                    if (this.selected_uuids.includes('A3')) {
                        this.cards_booleans.c3 = true
                    }
                    break;

                case 'C1':
                    this.cards_booleans.c1 = false
                    this.cards_booleans.d1 = true
                    break;

                case 'C2':
                    this.cards_booleans.c2 = false
                    this.cards_booleans.d2 = true
                    break;

                case 'C3':
                    this.cards_booleans.c3 = false
                    this.cards_booleans.d3 = true
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
                  setTimeout(() => {
                      window.location.href = `/cards/${response.data.id}/rooms`
                  }, 1000)
              })
          }
      }
  }
</script>

<style lang="scss" scoped>

@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fade-in {
  opacity:0;  /* make things invisible upon start */;
  animation:fadeIn ease-in 1;
  animation-fill-mode:forwards;
  animation-duration:1s;
}

.fade-in.one {
  animation-delay: 0.7s;
}

.fade-in.two {
  animation-delay: 1.2s;
}

.fade-in.three {
  animation-delay: 1.6s;
}

.logo {
  width: 120px;
  margin-top: 20px;
  margin-left: 6%;

  &__img {
    width: 100%;
    height: 100%;
  }
}

.progress-bar {
  &__wrapper {
    margin-top: 30px;
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
.content-center {
  padding: 30px 0;
}

</style>
