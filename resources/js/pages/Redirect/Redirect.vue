<template>
    <div class="container">
      <div class="content-center">

            <img src="/storage/quiz/icon.svg" />

          <div class="finish-text">
            Спасибо за ваши ответы. Результаты теста будут отправлены на указанный вами e-mail адрес.
          </div>
      </div>

    </div>
</template>

<script>
    export default {
        mounted () {
            setTimeout(() => {
                window.location.href = 'http://flatium.ru'
            }, 1500)
        }

    }
</script>

<style lang="scss" scoped>
  img {
    width: 70px;
    margin: 30px auto;
  }
  .finish-text {
    font-size: 20px;
    text-align: center;
  }

.content-center {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  height: 100vh;
}
</style>
