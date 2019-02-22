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
<<<<<<< HEAD

=======
>>>>>>> 3643a8f75df3c2648517f91924e2aa8d40eddbfa
<style lang="scss" scoped>
.progress-bar {
  &__wrapper {
    box-shadow: 0 15px 15px -15px #ccc;
  }
}
</style>
