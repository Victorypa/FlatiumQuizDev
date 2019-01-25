<template>
    <div class="container">
        <div class="row">
            <img src="/storage/quiz/icon.svg" />
        </div>
        <div class="row">
            <div class="col-12">
                <span>страница спасибо. в две строчки и иконка над ними.</span>
            </div>
            <div class="col-12">
                <span>
                    Спасибо за ваши ответы. Результаты теста будут отправлены на указанный вами e-mail адрес.
                </span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted () {
            setTimeout(() => {
                window.location.href = 'http://flatium.ru'
            }, 3000)
        }

    }
</script>

<style scoped>

</style>
