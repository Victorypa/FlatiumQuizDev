<template>
    <div class="content-center">
        <div class="container" v-if="cards_booleans">
            <template v-if="cards_booleans.a">
                <h1 class="main-caption">
                    Я бы описал свой стиль как ...
                </h1>
                <div class="image-wrapper">
                    <template v-for="card in acards">
                        <a class="image-card" @click="addACard(card.uuid)">
                          <img alt="Более классический" :src="card.path">
                          <h4 class="image-text">{{ card.name }}</h4>
                        </a>
                    </template>
                </div>
            </template>

            <template v-if="cards_booleans.b">
                <h1 class="main-caption">
                    При выборе мебели и домашнего декора, я предпочитаю ...
                </h1>
                <div class="image-wrapper">
                    <template v-for="card in bcards">
                        <a class="image-card" @click="addBCard(card.uuid)">
                          <img alt="Более классический" :src="card.path">
                          <h4 class="image-text">{{ card.name }}</h4>
                        </a>
                    </template>
                </div>
            </template>

            <template v-if="cards_booleans.c1">
                <h1 class="main-caption">
                    Какое изображение домашнего декора вам больше нравятся?
                </h1>

                <div class="image-wrapper">
                    <template v-for="card in c1cards">
                        <a class="image-card" @click="addCCard(card.uuid, 'c1')">
                          <img alt="Более классический" :src="card.path">
                          <h4 class="image-text">{{ card.name }}</h4>
                        </a>
                    </template>
                </div>
            </template>

            <template v-if="cards_booleans.c2">
                <h1 class="main-caption">
                    Какое изображение домашнего декора вам больше нравятся?
                </h1>

                <div class="image-wrapper">
                    <template v-for="card in c2cards">
                        <a class="image-card" @click="addCCard(card.uuid, 'c2')">
                          <img alt="Более классический" :src="card.path">
                          <h4 class="image-text">{{ card.name }}</h4>
                        </a>
                    </template>
                </div>
            </template>

            <template v-if="cards_booleans.c3">
                <h1 class="main-caption">
                    Какое изображение домашнего декора вам больше нравятся?
                </h1>

                <div class="image-wrapper">
                    <template v-for="card in c3cards">
                        <a class="image-card" @click="addCCard(card.uuid, 'c3')">
                          <img alt="Более классический" :src="card.path">
                          <h4 class="image-text">{{ card.name }}</h4>
                        </a>
                    </template>
                </div>
            </template>

            <template v-if="cards_booleans.d1">
                <h1 class="main-caption">
                    Какие цветовые решения в вашем доме, вы предпочитаете?
                </h1>

                <div class="image-wrapper">
                    <template v-for="card in d1cards">
                        <a class="image-card" @click="addDCard(card.uuid, 'd1')">
                          <img alt="Более классический" :src="card.path">
                          <h4 class="image-text">{{ card.name }}</h4>
                        </a>
                    </template>
                </div>
            </template>

            <template v-if="cards_booleans.d2">
                <h1 class="main-caption">
                    Какие цветовые решения в вашем доме, вы предпочитаете?
                </h1>

                <div class="image-wrapper">
                    <template v-for="card in d2cards">
                        <a class="image-card" @click="addDCard(card.uuid, 'd2')">
                          <img alt="Более классический" :src="card.path">
                          <h4 class="image-text">{{ card.name }}</h4>
                        </a>
                    </template>
                </div>
            </template>

            <template v-if="cards_booleans.d3">
                <h1 class="main-caption">
                    Какие цветовые решения в вашем доме, вы предпочитаете?
                </h1>
                
                <div class="image-wrapper">
                    <template v-for="card in d3cards">
                        <a class="image-card" @click="addDCard(card.uuid, 'd3')">
                          <img alt="Более классический" :src="card.path">
                          <h4 class="image-text">{{ card.name }}</h4>
                        </a>
                    </template>
                </div>
            </template>

          </div>
    </div>
</template>

<script>
  import {
       acards, bcards, c1cards, c2cards,
       c3cards, d1cards, d2cards, d3cards, cards_booleans
   }  from './index.js'
   import {
       SK, K, SKAN,
       CON, ECO, LOFT
   } from '../../utilities/results.js'

  export default {
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
              LOFT: []
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

          addACard (uuid) {
              this.selected_uuids.push(uuid)
              this.cards_booleans.a = false
              this.cards_booleans.b = true
          },

          addBCard (uuid) {
              this.selected_uuids.push(uuid)
              this.cards_booleans.b = false

              switch (this.selected_uuids.join('')) {
                  case 'A1B1':
                  case 'A1B3':
                  case 'A1B2':
                      this.cards_booleans.c1 = true
                      break;

                  case 'A2B1':
                  case 'A2B3':
                  case 'A2B2':
                      this.cards_booleans.c2 = true
                      break;

                  case 'A3B1':
                  case 'A3B3':
                  case 'A3B2':
                      this.cards_booleans.c3 = true
                      break;

                  default:
                    return
              }
          },

          addCCard (uuid, group) {
              this.selected_uuids.push(uuid)
              switch (group) {
                  case 'c1':
                      this.cards_booleans.c1 = false
                      this.cards_booleans.d1 = true
                      break;
                  case 'c2':
                      this.cards_booleans.c2 = false
                      this.cards_booleans.d2 = true
                      break;
                  case 'c3':
                      this.cards_booleans.c3 = false
                      this.cards_booleans.d3 = true
                      break;
              }
          },

          addDCard (uuid, group) {
              this.selected_uuids.push(uuid)
              switch (group) {
                  case 'd1':
                      this.cards_booleans.d1 = false
                      break;
                  case 'd2':
                      this.cards_booleans.d2 = false
                      break;

                  case 'd3':
                      this.cards_booleans.d3 = false
                      break;
                  default:

              }
              this.resultsFiltering(this.selected_uuids.join(''))
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
                  window.location.href = `/cards/${response.data.id}/rooms`
              })
          }
      }
  }
</script>

<style lang="scss" scoped>
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
