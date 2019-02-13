<template>
<div class="">
    <app-header></app-header>

    <app-navigation></app-navigation>

    <calculate-progressbar :volumn="80"></calculate-progressbar>

      <div class="content-center">
          <div class="container">
            <h1 class="main-caption">
              Когда бы вы хотели начать ремонт?
            </h1>
            <div class="image-wrapper" v-if="blocks.length">

              <div class="image-card fade-in" v-for="block in blocks">
                  <button class="button-card"
                          @click.prevent="selected(block.value)"
                          >
                          <div v-html="block.svg"></div>
                          <div class="image-text">{{ block.title }}</div>
                  </button>
              </div>


            </div>
          </div>
        </div>
</div>

</template>

<script>
    import { blocks } from './index.js'

    export default {
        data () {
            return {
                blocks
            }
        },

        methods: {
            selected (type) {
                let card_id = window.location.search.match(/\d+/g).toString()

                axios.post('/cards/start-date/store', {
                    'card_id': card_id,
                    'type': type
                }).then(response => {
                    window.location.href = `/cards/design-skills?card_id=${card_id}`
                })
            }
        }
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


svg {
fill: #a1adb7;
height: auto;
}

.image {
  &-wrapper {
  display: flex;
  justify-content: space-around;
  margin: 0 auto;
  }
  &-card {
  margin: 0 10px 20px;
  display: block;
  font-size: 14px;
  text-decoration: none;
  }
  &-text {
    padding-top: 22px;
    font-size: 8px;
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
  padding: 0px 20px;
  border: 2px solid #eee;
  background: none;
  color: #a1adb7;
  font-size: 11px;
  font-weight: 400;
  height: 300px;
  letter-spacing: .11em;
  text-transform: uppercase;
  width: 175px;
  transition-duration: .2s;
  box-sizing: border-box;
  outline: none;
  cursor: pointer;
    &:hover, &.active {
    border-color: #1c2233;
    box-shadow: 0 15px 22px 0 rgba(28,34,51,.2);
    transform: scale(1.025);
      .image-text {
      color: #000;
      }
      .icon-svg [stroke] {
      stroke: #1c2233;
      }
      .fill-color {
        fill:#000;
      }
    }
}

@media (min-width: 700px) {
  .content-center {
    display: flex;
    align-items: center;
    justify-content: center;
  }
}
@media (max-width: 800px) {
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
