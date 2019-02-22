<template>
  <div class="navbar__wrapper">
    <nav class="navbar navbar-expand-lg navbar-light">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <div class="logo">
    <a href="https://www.flatium.ru"
       class="logo__img"
       @mouseover="hovered = !hovered"
       @mouseout="hovered = !hovered"
       >

        <img :src="logoPath" alt="Flatium-logo">
    </a>
  </div>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Projects <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Shop</a>
      <a class="nav-item nav-link" href="#">Blog</a>
      <a class="nav-item nav-link" href="#">Refer & Earn</a>
      <a class="nav-item nav-link" href="#">Help</a>
    </div>
  </div> -->
</nav>
  </div>

</template>

<script>
    export default {
        data () {
            return {
                hovered: false
            }
        },

        computed: {
            logoPath () {
                return this.hovered
                ? '/storage/quiz/logo-blue.svg'
                : '/storage/quiz/logo-black.svg'
            }
        }
    }
</script>

<style lang="scss" scoped>
.navbar {
  &__wrapper {
    box-shadow: 0 5px 15px 0px #ccc;
  }
}
</style>
