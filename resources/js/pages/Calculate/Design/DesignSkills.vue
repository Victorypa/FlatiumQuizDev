<template>
    <div>
        <app-header></app-header>

        <app-navigation selected="calculator"></app-navigation>

        <calculate-progressbar ref="progressbar" :volumn="80"></calculate-progressbar>

      <div class="content-center" v-if="show">
          <div class="container">
            <h1 class="main-caption">
              Как бы вы оценили свой уровень, как дизайнера?
            </h1>
            <div class="image-wrapper" v-if="designs.length">

              <div class="image-card fade-in" v-for="design in designs">
                  <button class="button-card"
                          @click.prevent="selected(design.value)"
                          >
                    <div class="image-content" v-html="design.svg"></div>
                    <div class="image-text" v-text="design.title"></div>
                    <div class="image-subtitle" v-text="design.description"></div>
                  </button>
              </div>
            </div>

          </div>
      </div>

      <Message v-else
               :option="option"
               />
    </div>
</template>

<script>
    import { designs } from './index.js'
    import Message from '../../Message/Message'

    export default {
        data () {
            return {
                designs,
                show: true,
                option: ''
            }
        },

        components: {
            Message
        },

        methods: {
            selected (type) {
                let card_id = window.location.search.match(/\d+/g).toString()

                axios.post('/cards/clicks/store', {
                    'name': type
                })

                axios.post('/cards/design-skills/store', {
                    'card_id': card_id,
                    'type': type
                })

                this.show = !this.show
                setTimeout(() => {
                    window.location.href = `/cards/form?card_id=${card_id}`
                }, 2500)

                switch (type) {
                    case 'junior':
                        this.option = 'design1'
                        break;
                    case 'middle':
                        this.option = 'design2'
                        break;
                    case 'senior':
                        this.option = 'design3'
                        break;
                    default:
                        return null
                }
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
.image {
  &-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  max-width: 800px;
  margin: 0 auto;
  }
  &-card {
  margin: 0 10px 20px;
  display: block;
  font-size: 14px;
  text-decoration: none;
  }
  &-text {
    font-weight: 600;
    font-size: 12px;
    color: #1c2233;
    letter-spacing: 2px;
    line-height: 1.9;
    margin-top: 14px;
    text-align: center;
    text-transform: uppercase;
  }
  &-subtitle {
  min-height: 80px;
  text-transform: none;
  font-size: 12px;
  padding-top: 14px;
  line-height: 16px;
  color: #1c2233;
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
padding: 15px;
border: 2px solid #eee;
background: none;
color: #a1adb7;
font-size: 11px;
font-weight: 400;
height: 300px;
letter-spacing: .11em;
text-transform: uppercase;
width: 240px;
transition-duration: .2s;
box-sizing: border-box;
outline: none;
cursor: pointer;
  &:hover, &.active {
  border-color: #1c2233;
  box-shadow: 0 15px 22px 0 rgba(28,34,51,.2);
  transform: scale(1.025);
    .image-text, .image-subtitle {
    color: #000;
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
