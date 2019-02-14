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
                  У вас отличный дом! И у нас есть множество вариантов выбора материалов для создания вашего интерьера
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
  width: .6em;
  height: .6em;
  margin: .19em;
  background: #007DB6;
  border-radius: .6em;
  animation: loading 1s infinite alternate;
}

.loading span:nth-of-type(2) {
  background: #008FB2;
  animation-delay: 0.2s;
}
.loading span:nth-of-type(3) {
  background: #009B9E;
  animation-delay: 0.4s;
}
.loading span:nth-of-type(4) {
  background: #00A77D;
  animation-delay: 0.6s;
}
.loading span:nth-of-type(5) {
  background: #7bbfba;
  animation-delay: 0.8s;
}

@keyframes loading {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

</style>
