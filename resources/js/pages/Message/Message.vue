<template>
  <div class="">
          <app-header></app-header>
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link" id="nav-result" data-toggle="tab" href="#nav-result" role="tab" aria-controls="nav-result" aria-selected="true">Ваш стиль</a>
              <a class="nav-item nav-link active" id="nav-needs" data-toggle="tab" href="#nav-needs" role="tab" aria-controls="nav-needs" aria-selected="false">Рассчёт ремонта</a>
            </div>
          </nav>
          <div class="progress-bar__wrapper">
                <progress-bar bar-color="#aad7ea " val="50"></progress-bar>

          </div>
          <div class="content-center">
          <div class="container">

              <h1 class="main-caption">
                {{name.title1}}
              </h1>
              <div class="loading">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
        </div>
      </div>
  </div>

</template>

<script>
    import ProgressBar from 'vue-simple-progress'
    export default {
      components: {
        ProgressBar
      },
      data () {
        return {
            name: {
                title1: 'У вас отличный дом! И у нас есть множество вариантов выбора материалов для создания вашего интерьера',
                title2: 'Отлично! Вы наш коллега и мы отлично сработаемся.',
                title3: 'Ура! Мы любим помогать и расширять кругозор наших клиентов',
                title4: 'Мы идем к вам на помощь!',

            },

    }
  }
}
</script>

<style lang="scss" scoped>
.content-center {
  margin: 50px 0;
}
.loading {
  text-align: center;
}
.loading span {
  display: inline-block;
  vertical-align: middle;
  width: 1em;
  height: 1em;
  margin: .5em;

  background: #007DB6;
  border-radius: .6em;
  animation: loading 1s infinite alternate;
  transform: translateY(-60px);
}

.loading span:nth-of-type(2) {
  background: #008FB2;
  animation-delay: 0.2s;
  transform: translateY(-45px);
}
.loading span:nth-of-type(3) {
  background: #0275b1c7;
  animation-delay: 0.4s;
    transform: translateY(-40px);
}
.loading span:nth-of-type(4) {
  background: #549dff;
  animation-delay: 0.6s;
      transform: translateY(-45px);
}
.loading span:nth-of-type(5) {
  background: #7bbfba;
  animation-delay: 0.8s;
  transform: translateY(-60px);
}

@keyframes loading {
  0% {
    transform: translateY(0px);
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.main-caption {
  padding-bottom: 100px;
  max-width: 540px;
}

.content-center {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: -5%;
  height: 100vh;
}

</style>
