<template>
    <div class="content-center">
        <div class="container">

            <h1 class="main-caption">
                {{ filteredOption }}
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

</template>

<script>
    export default {
      props: ['option'],

      data () {
        return {
            titles: {
                decoration: 'У вас отличный дом! И у нас есть множество вариантов выбора материалов для создания вашего интерьера',
                design1: 'Мы идем к вам на помощь!',
                design2: 'Ура! Мы любим помогать и расширять кругозор наших клиентов',
                design3: 'Отлично! Вы наш коллега и мы отлично сработаемся.'
            }
        }
    },

    computed: {
        filteredOption () {
            switch (this.option) {
                case 'decoration':
                    return this.titles.decoration
                    break;

                case 'design1':
                    return this.titles.design1
                    break;

                case 'design2':
                    return this.titles.design2
                    break;

                case 'design3':
                    return this.titles.design3
                    break;
                default:
                    return null
            }
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

  background: #000;
  border-radius: .6em;
  animation: loading 1s infinite alternate;
  transform: translateY(-60px);
}

.loading span:nth-of-type(2) {
  background: #122139;
  animation-delay: 0.2s;
  transform: translateY(-45px);
}
.loading span:nth-of-type(3) {
  background: #00a4d187;
  animation-delay: 0.4s;
    transform: translateY(-40px);
}
.loading span:nth-of-type(4) {
  background: #ccc;
  animation-delay: 0.6s;
      transform: translateY(-45px);
}
.loading span:nth-of-type(5) {
  background: #c288009c;
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
