<template>
  <div>
      <app-header></app-header>

      <app-navigation selected="calculator"></app-navigation>

      <div class="content-center" v-if="!show">
          <div class="container">
             <div class="card-wrapper">

               <div class="card-workprice">
                 <h2>Стоимость работ</h2>
                 <div class="card-price" v-if="getTotalPrice && square">
                     <Count :end="getTotalPrice" :speed="square" />
                 </div>
                <div class="card-small-price">Стоимость за кв. м.: <strong>₽ {{ getAveragePrice }}</strong></div>

                 <div class="button-wrapper">
                     <button type="submit"
                             class="primary-button primary-button--white"
                             @click="show = !show"
                             >
                        НАЧАТЬ РЕМОНТ
                    </button>
                 </div>
                 <div id="accordion1">
                     <div class="card card-border">
                       <div class="card-header">
                         <a class="card-link card-more" data-toggle="collapse" href="#collapseOne">
                          Дополнительно
                         </a>
                       </div>
                       <div id="collapseOne" class="collapse" data-parent="#accordion1">
                         <div class="card-body">
                           <ul>
                             <li>Бесплатная адаптация проекта</li>
                             <li>Бесплатная разработка рабочей документации</li>
                             <li>Базовый комплект “Умный дом” в подарок</li>
                             <li>Контроль ремонта удаленно, через личный кабинет</li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
               </div>

               <div class="card-workmaterial">
                 <div class="tooltip-on-hover">
                   Мы предлагаем клиентам материалы на лучших условиях и с дополнительными скидками от поставщиков и производителей.
                 </div>
                   <h2>Стоимость материалов</h2>
                   <div class="card-price" v-if="getFakeMaterialPrice">
                      <Count :end="getFakeMaterialPrice"/>
                   </div>
                   <span>Лучшие цены</span>
                  <div class="card-small-price">Стоимость за кв. м.: <strong>₽ {{ getFakeAveragePrice }} </strong></div>
                     <div class="button-wrapper">
                         <button type="submit"
                                 class="primary-button"
                                 >
                            СТИЛИСТ
                        </button>
                        <div class="button-hover">
                          <div class="button-hover__title">
                        <b>  Создайте свой уникальный стиль </b> <br>
                          </div>
                          <div class="button-hover__content">
                          Интерьерный стилист профессионально подберет мебель и декор, подготовит планировочное решение и коллаж-визуализацию вашего будущего интерьера.
                          </div>
                        </div>
                     </div>
                     <div id="accordion2">
                         <div class="card card-border">
                           <div class="card-header">
                             <a class="card-link card-more" data-toggle="collapse" href="#collapseTwo">
                               Больше информации
                             </a>
                           </div>
                           <div id="collapseTwo" class="collapse" data-parent="#accordion2">
                             <div class="card-body">
                               В стоимость включены все черновые и чистовые материалы: напольное покрытие, краска для стен, межкомнатные двери, плинтуса, карнизы, молдинги; в санузле: сантехника, полотенцесушитель, керамическая плитка на пол и стены, смеситель, мебель; электрофурнитура и осветительное оборудование. А также, закупка и доставка всех материалов.
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                  </div>
                 </div>

               </div>

               <Message v-else option="design4"/>
          </div>

</template>

<script>
    import Message from '../../Message/Message'
    import Count from './partials/Count'

    export default {
      data () {
        return {
            card_id: window.location.search.match(/\d+/g).toString(),
            price: 0,
            square: 0,
            show: false
        }
      },

      components: {
          Message, Count
      },

      created () {
          this.getResult()
      },

      methods: {
          getResult () {
              axios.post(`/cards/calculate-result/${this.card_id}`)
                   .then(response => {
                       this.price = response.data.price.price
                       this.square = response.data.square
                   })
          }
      },

      computed: {
          getTotalPrice () {
              return this.square * this.price
          },

          getAveragePrice () {
              return new Intl.NumberFormat('ru-Ru').format(parseInt(this.price))
          },

          getFakeMaterialPrice () {
              if (this.square && this.price) {
                  return parseInt(this.square * this.price - 1000)
              }
          },

          getFakeAveragePrice () {
              return new Intl.NumberFormat('ru-Ru').format(parseInt(this.price) - 1000)
          },
      }
}
</script>
<style lang="scss" scoped>

.container {
  max-width: 900px;
  font-family: 'Open Sans', sans-serif;
  position: relative;
}

.content-center {
  display: flex;
  align-items: center;
  justify-content: center;

  margin: 50px 70px;
  // height: 100vh;
  background-color: #f8f8f8;
}

.main-caption {
  padding-bottom: 60px;
}

.card {
  &-body {
    font-size: 14px;
  }

  &-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
    h2 {
      font-size: 22px;
      letter-spacing: .025em;
      font-weight: 600;

      margin: 15px;
    }
  }

  &-border {
    border: none;
  }

  &-workmaterial, &-workprice {
    &:before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;

      border-top: 6px solid #122139;
    }

    position: relative;
    width: 380px;

    align-self: flex-start;
    background-color: #fff;

    padding: 70px 28px 30px;
    margin: 15px;

    text-align: center;
    box-shadow: 0 8px 8px rgba(28,34,51,.1);
    cursor: pointer;
  }
  &-workmaterial {
    // position: relative;
    overflow: hidden;

    &:before {
      border-top: 6px solid #c28800;
    }

    span {
      &:hover {
        .card-small-price {
        display: none;
        }
      }

      &::after{
        width: 12px;
        content: "i";
        display: inline-block;

        font-size: 6px;
        height: 12px;
        line-height: 12px;
        text-align: center;
        vertical-align: middle;

        border: 1px solid #fff;
        border-radius: 50%;

        margin-left: .5em;
      }

      width: 175px;

      position: absolute;
      right: -45px;
      top: 25px;

      background-color: #122139;
      border: 1px solid #fff;
      color: #fff;

      font-size: 9px;
      letter-spacing: 1px;
      line-height: 33px;
      text-transform: uppercase;

      transform: rotate(45deg);
      cursor: pointer;
    }
  }

  &-price {
    span {
      font-size: 12px;
      color: #1c2233;
    }
      font-size: 28px;
      font-weight: 400;

  }
  &-parameters {
    width: 70%;
    font-size: 13px;
    text-align: justify;
    color: #5b6788;

    margin: 0 auto;
    padding: 30px 0;
    div  {
      padding: 8px 0;
    }
  }
  &-small-price {
    color: #5b6788;
    font-size: 11px;
  }
  &-header {
    background-color: transparent;
    border: none;
  }
  &-more {
    display: block;

    font-size: 13px;
    color: #a1adb7;
    text-align: center;
    text-transform: uppercase;

    margin: 0 auto;
    &:hover {
      color: #c28800;
    }
  }
}

strong {
  color: #1c2233;
}

.button {
  &-hover {
    position: absolute;

    bottom: 75%;
    font-size: 14px;

    padding: 15px;
    box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.3);
    background-color: #fff;

    border-radius: 5px;
    opacity: 0;
    z-index: 1000;
  }
}


.primary-button {
  width: 70%;

  margin-top: 24px;
  letter-spacing: .1em;
  text-transform: uppercase;
  &:hover {
    background-color: #122139;

  }
  &--white {
    color: #1c2233;
    background: #fff;
    box-shadow: 0 2px 7px rgba(28,34,51,.2);
    &:hover {
      background: #f2f2f2;
    }
  }
}

.button-wrapper {
  position: relative;

  &:hover {
    .button-hover {
      opacity: 1;
      transition: 0.5s;
    }
  }
}

ul {
  list-style: none;
  margin-left: 0;
  padding: 0;
  li {
    border-bottom: 1px solid #ccc;
    padding: 10px 0;
  }
}

.tooltip-on-hover {
  position: absolute;

  font-size: 12px;

  width: 250px;
  height: 120px;

  right: -40%;
  top: 1%;
  opacity: 0;

  z-index: 999;

  border-radius: 6px;
  padding: 15px;
  transition: .3s;
  box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.3);
  &:hover {
    background-color: #fff;
    opacity: 1;

      right: 1%;
  }

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

@media (max-width: 860px) {
  .content-center {
    margin: 0;
  }
}
</style>
