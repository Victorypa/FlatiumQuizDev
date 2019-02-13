<template>
    <div>
      <app-header></app-header>

      <app-navigation></app-navigation>

      <calculate-progressbar :volumn="40"></calculate-progressbar>

      <div class="content-center">
          <div class="container">
            <h1 class="main-caption">
              Расскажите какая текущая  отделка в помещении
            </h1>
            <div class="image-wrapper" v-if="decorations.length">
              <div class="image-card fade-in" v-for="(decoration, index) in decorations">
                  <button class="button-card" @click.prevent="selectDecoration(decoration.value)">
                      <div v-html="decoration.svg"></div>
                      <div class="image-text">{{ decoration.name }}</div>
                  </button>
              </div>
            </div>
          </div>
        </div>
    </div>

</template>

<script>
    import { decorations } from './index'
    export default {
        data () {
            return {
                decorations
            }
        },

        methods: {
            selectDecoration (decoration) {
                let card_id = window.location.search.match(/\d+/g).toString()

                axios.post('/cards/clicks/store', {
                    'name': decoration
                }).then(resposne => {
                    axios.post(`/cards/decoration/store`, {
                        'card_id': card_id,
                        'type': decoration
                    }).then(response => {
                        window.location.href = `/cards/material-category?card_id=${card_id}`
                    })
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
  flex-wrap: wrap;
  justify-content: space-between;
  max-width: 600px;
  margin: 0 auto;
  }
  &-card {
  margin: 0 10px 20px;
  display: block;
  font-size: 14px;
  text-decoration: none;
  }
}
.main-caption {
  max-width: 600px;
  margin-bottom: 30px;
}
.content-center {
  margin: 50px 0;
}

.fill-color {
  fill: #ccc;
}

.button-card {
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

svg {
margin-bottom: 20px;
}
svg [stroke] {
stroke: #a1adb7;
transition: stroke .15s ease-in-out;
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
