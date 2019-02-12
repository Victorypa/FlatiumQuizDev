<template>
<div class="">
      <app-header></app-header>

      <app-navigation></app-navigation>

      <calculate-progressbar ref="progressbar"></calculate-progressbar>

      <div class="content-center">
          <div class="container">
            <h1 class="main-caption">
              Выберете категорию материалов по вашему бюджету
            </h1>
            <div class="image-wrapper">
              <div class="image-card fade-in one">
                  <button class="button-card active">
                    <div class="image-picture">
                      <img src="https://s3.amazonaws.com/static.havenly.com/user-profile-images/Clean_Slate.svg" alt="material-one">
                    </div>
                      <div class="image-text">Стандарт</div>

                  </button>
                  <div class="image-subtitle">
                    <ul>
                      <li>
                        Некоторые комплектующие:
                      </li>
                      <li>
                        - Ламинат Tarkett Germany
                      </li>
                      <li>
                        - Бумажные обои МОФ
                      </li>
                      <li>
                        - Тумба с раковиной Triton Локо
                      </li>
                      <li>-
                         Глухое дверное полотно Фортунато </li>
                    </ul>
                  </div>
              </div>

              <div class="image-card fade-in two">
                  <button class="button-card">
                    <div class="image-picture">
                      <img src="https://s3.amazonaws.com/static.havenly.com/user-profile-images/Partway_There.svg" alt="material-second">
                    </div>
                    <div class="image-text">Комфорт</div>

                  </button>
                  <div class="image-subtitle">
                    <ul>
                      <li>
                        Некоторые комплектующие:
                      </li>
                      <li>
                        - Ламинат Tarkett Artisan
                      </li>
                      <li>
                        - Флизелиновые обои Rasсh
                      </li>
                      <li>
                        - Тумба с раковиной Sanflor Софи
                      </li>
                      <li>
                         - Межкомнатная дверь Profildoors, эмаль
                        </li>
                    </ul>
                  </div>
              </div>

              <div class="image-card fade-in three">
                  <button class="button-card">
                    <div class="image-picture">
                      <img src="https://s3.amazonaws.com/static.havenly.com/user-profile-images/Finishing_Touches.svg" alt="material-third">
                    </div>
                  <div class="image-text">Премиум</div>

                  </button>
                  <div class="image-subtitle">
                    <ul>
                      <li>
                        Некоторые комплектующие:
                      </li>
                      <li>
                        - Паркетная доска Polarwood Space
                      </li>
                      <li>
                        - Акцентная стена из декор. штукатурки
                      </li>
                      <li>
                        - Флизелиновые обои Виктория Стенова
                      </li>
                      <li>
                         - Тумба с раковиной Jacob Delafon Struktura
                        </li>
                    </ul>
                  </div>
              </div>
            </div>

          </div>
        </div>
</div>

</template>

<script>
import ProgressBar from 'vue-simple-progress'
export default {
  components: {
    ProgressBar,
  },
}
</script>

<style lang="scss" scoped>
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fade-in {
  opacity:0;  /* make things invisible upon start */;
  animation:fadeIn ease-in 1;
  animation-fill-mode:forwards;
  animation-duration: 0.7s;
}

.fade-in.one {
  animation-delay: 0.2s;
}

.fade-in.two {
  animation-delay: 0.4s;
}

.fade-in.three {
  animation-delay: 0.5s;
}

.image {
  &-wrapper {
  display: flex;
  justify-content: space-between;
  max-width: 800px;
  margin: 0 auto;
  }
  &-card {
  margin: 0 10px 20px;
  display: block;
  flex-basis: 300px;
  font-size: 14px;
  text-decoration: none;
  }
  &-text {
  padding-top: 30px;
  }
  &-subtitle {
  text-transform: none;
  font-size: 10px;
  padding-top: 40px;
  line-height: 16px;
  color: #738494;
  ul {
    text-align: center;
    list-style: none;
    margin: 0;
    padding: 0;
  }
}

}
.main-caption {
  max-width: 600px;
  margin-bottom: 30px;
}
.content-center {
  margin: 50px 0;
}

.button-card {
padding: 15px;
border: 2px solid #eee;
background: none;
color: #a1adb7;
font-size: 11px;
font-weight: 400;
min-height: 350px;
letter-spacing: .11em;
text-transform: uppercase;
width: 100%;
transition-duration: .2s;
box-sizing: border-box;
outline: none;
cursor: pointer;
  &:hover, &.active {
  border-color: #1c2233;
  box-shadow: 0 15px 22px 0 rgba(28,34,51,.2);
  transform: scale(1.025);
    .image-text, .image-subtitle {
    color: #000;
    }
  }
}

.primary-button {
height: 42px;
font-size: 15px;
font-weight: 400;
background-color: #0a0c12;
color: #fff;
margin: 20px 0;
padding: 0 30px;
letter-spacing: .025em;
border: 0;
border-radius: 2px;
line-height: 42px;
outline: none;
cursor: pointer;
transition: .15s ease-in-out;
}
.primary-button:hover {
  background-color: #aad7ea;
}
.button-wrapper {
margin: 0 auto;
}

@media (min-width: 700px) {
  .content-center {
    display: flex;
    align-items: center;
    justify-content: center;
  }
}
@media (max-width: 700px) {
.image-wrapper  {
flex-wrap: wrap;
justify-content: center;
}
.image-card {
margin-bottom: 20px;
margin-left: 0px;
}
}
@media (max-width: 540px) {
  .button-wrapper {
    width: 100%;
    text-align: center;
  }
}
</style>
