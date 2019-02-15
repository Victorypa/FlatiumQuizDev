<template>
  <div class="">
    <app-header></app-header>

    <calculate-progressbar :volumn="60"></calculate-progressbar>
  <div class="content-center">
      <div class="container">
        <h1 class="main-caption">
           В какой комнате вы хотели бы сделать ремонт? Можете выбрать несколько комнат или во всей квартире или доме.
        </h1>
        <div class="image-wrapper" v-if="rooms.length">
          <div class="image-card fade-in" v-for="(room, index) in rooms" :key="index">
              <button class="button-card"
                      @click.prevent="addRoom(room.title)"
                      :class="{ 'active': selected_rooms.includes(room.title) }"
                      >
                      <div v-html="room.svg"></div>
                      <div class="image-text" v-text="room.title"></div>
              </button>
          </div>

          <div class="button-wrapper">
              <button type="submit"
                      class="primary-button"
                      @click.prevent="save"
                      >
                 Далее
             </button>
           </div>
        </div>

      </div>
    </div>
  </div>

</template>

<script>
    import { rooms } from './index.js'

    export default {
        data () {
            return {
                rooms,
                selected_rooms: []
            }
        },

        methods: {
            addRoom (type) {
                if (!this.selected_rooms.includes(type)) {
                    this.selected_rooms.push(type)
                } else {
                    let index = this.selected_rooms.indexOf(type)
                    if (index > -1) {
                        this.selected_rooms.splice(index, 1)
                    }
                }
            },

            save () {
                let card_id = window.location.search.match(/\d+/g).toString()
                axios.post(`/cards/rooms/store`, {
                    'card_id': card_id,
                    'data': this.selected_rooms
                })
                window.location.href = `/cards/form?card_id=${card_id}`
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

.progress-bar {
  &__wrapper {
    margin: 30px 0;
  }
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
.fill-color {
  fill: #ccc;
}

.button-card {
border: 2px solid #eee;
background: none;
color: #a1adb7;
font-size: 11px;
font-weight: 400;
height: 160px;
letter-spacing: .11em;
text-transform: uppercase;
width: 160px;
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


.primary-button {
height: 42px;
font-size: 15px;
font-weight: 400;
background-color: #0a0c12;
color: #fff;
margin: 20px 0;
padding: 0 30px;
letter-spacing: .025em;
border: 0;
border-radius: 2px;
line-height: 42px;
outline: none;
cursor: pointer;
transition: .15s ease-in-out;
}

.primary-button:hover {
  background-color: #007bff;
}

.button-wrapper {
margin: 0 auto;
}
svg {
margin-bottom: 20px;
}
svg [stroke] {
stroke: #a1adb7;
transition: stroke .15s ease-in-out;
}

.content-center {
  padding: 50px 0;
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
