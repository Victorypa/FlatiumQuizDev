<template>
    <div class="progress-bar__wrapper">
        <progress-bar bar-color="#aad7ea " :val="volumn"></progress-bar>
    </div>
</template>

<script>
    import ProgressBar from 'vue-simple-progress'

    export default {
        props: ['volumn'],

        components: {
          ProgressBar
        }
    }
</script>

<style lang="scss" scoped>
.progress-bar {
  &__wrapper {
    box-shadow: 0 15px 15px -15px #ccc;
  }
}
</style>
