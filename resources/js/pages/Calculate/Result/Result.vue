<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="logo">
        <a href="https://www.flatium.ru" class="logo__img">
          <img src="/storage/quiz/logo-black.svg" alt="Flatium-logo">
        </a>
      </div>
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href=""></a>
        </div>
      </div> -->
</nav>

    <!-- <app-header></app-header> -->

    <!-- <app-navigation selected="calculator"></app-navigation> -->

      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link" id="nav-result" data-toggle="tab" href="#nav-result" role="tab" aria-controls="nav-result" aria-selected="true">Ваш стиль</a>
          <a class="nav-item nav-link" id="nav-needs" data-toggle="tab" href="#nav-needs" role="tab" aria-controls="nav-needs" aria-selected="false">Рассчёт ремонта</a>
          <a class="nav-item nav-link active" id="nav-needs" data-toggle="tab" href="#nav-needs" role="tab" aria-controls="nav-needs" aria-selected="false">Стоимость</a>
        </div>
      </nav>

      <div class="content-center">
          <div class="container">
             <div class="card-wrapper">
               <div class="card-workprice">
                 <h2>Стоимость работ</h2>
                 <div class="card-price">
                   ₽ 240 000
                 </div>
                <div class="card-small-price">Стоимость за кв. м.: <strong>₽ 12 3546</strong></div>

                 <div class="button-wrapper">
                     <button type="submit"
                             class="primary-button primary-button--white"
                             >
                        НАЧАТЬ РЕМОНТ
                    </button>
                 </div>
                 <div id="accordion1">
                     <div class="card card-border">
                       <div class="card-header">
                         <a class="card-link card-more" data-toggle="collapse" href="#collapseOne">
                            Больше информации
                         </a>
                       </div>
                       <div id="collapseOne" class="collapse" data-parent="#accordion1">
                         <div class="card-body">
                           <ul>
                             <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</li>
                             <li>incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</li>
                             <li>nostrud exercitation ullamco laboris nisi ut aliquip</li>
                             <li>ex ea commodo consequat.</li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
               </div>
               <div class="card-workmaterial">
                   <h2>Стоимость материалов</h2>
                   <div class="card-price">
                     ₽ 240 000
                   </div>
                   <span>Best Match</span>
                  <div class="card-small-price">Стоимость за кв. м.: <strong>₽ 12 3546 </strong></div>
                     <div class="button-wrapper">
                         <button type="submit"
                                 class="primary-button"
                                 >
                            СТИЛИСТ
                        </button>
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
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="card-hover">
                         <div class="card-hover__title">
                         BEST MATCH
                         </div>
                         <div class="card-hover__content">
                         For dining rooms we suggest the Havenly Full package, which comes with a room layout floorplan.
                         </div>
                       </div>
                      </div>
               </div>

             </div>

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
  &-hover {
    position: absolute;

    top: 5%;
    right: 20%;

    width: 250px;

    padding: 15px;
    box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.3);
    background-color: #fff;

    border-radius: 5px;
    opacity: 0;
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

      border-top: 6px solid #a1adb7;
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
    position: relative;
    overflow: hidden;

    &:hover {
      .card-hover {
        opacity: 1;
        transition: 0.5s;
      }
    }

    &:before {
      border-top: 6px solid #dbc997;
    }

    span {
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

      background-color: #1c2233;
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

.primary-button {
  width: 70%;

  margin-top: 24px;
  letter-spacing: .1em;
  text-transform: uppercase;
  &:hover {
    background-color: #2e3854;
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

ul {
  list-style: none;
  margin-left: 0;
  padding: 0;
  li {
    border-bottom: 1px solid #ccc;
    padding: 10px 0;
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
    height: auto;
  }
}
</style>
