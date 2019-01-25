<template>
<div class="content-center">
    <div class="container">
      <h1 class="main-caption">
         В какой комнате вы хотели бы сделать ремонт? Можете выбрать несколько комнат или во всей квартире или доме.
      </h1>
      <div class="image-wrapper">
        <div class="image-card">
            <button class="button-card" @click.prevent="addRoom('Гостиная')" :class="{ 'active': selected_rooms.includes('Гостиная') }">
                  <svg class="icon-svg" width="52" height="30" viewBox="0 0 52 30" xmlns="http://www.w3.org/2000/svg"><title>living room</title><g transform="translate(1 1)" fill="none" fill-rule="evenodd"><path stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" d="M6.713 16.66h36.016V.592H6.712zm36.017.001h6.647v-6.61H42.73zm-42.73 0h6.648v-6.61H0z"></path><path stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" d="M0 23.49h49.442v-6.829H0zm6 0v4.71m36-4.71v4.71"></path><ellipse fill="#FFF" cx="14" cy="5" rx="1" ry="1"></ellipse><ellipse fill="#FFF" cx="25" cy="5" rx="1" ry="1"></ellipse><ellipse fill="#FFF" cx="36" cy="5" rx="1" ry="1"></ellipse><ellipse fill="#FFF" cx="36" cy="12" rx="1" ry="1"></ellipse><ellipse fill="#FFF" cx="25" cy="12" rx="1" ry="1"></ellipse><ellipse fill="#FFF" cx="14" cy="12" rx="1" ry="1"></ellipse></g></svg>
                  <div class="image-text">Гостиная</div>
            </button>
        </div>

        <div class="image-card">
            <button class="button-card" @click.prevent="addRoom('Столовая')" :class="{ 'active': selected_rooms.includes('Столовая') }">
                  <svg class="icon-svg" width="42" height="39" viewBox="0 0 42 39" xmlns="http://www.w3.org/2000/svg"><title>dinning room</title><path d="M8.479 21h24.824M21 21.44v16.636M16.515 38h8.752M1 16.506v21.57m10.98 0V27.29H1m40-10.784v21.57m-10.84 0V27.29h10.98M21 1.603v6.73m-4.95 4.844a4.843 4.843 0 1 1 9.683 0h-9.684zm5.797 0v.562a.956.956 0 1 1-1.912 0v-.562" stroke="#D0D6DB" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                  <div class="image-text">Столовая</div>
            </button>
        </div>

        <div class="image-card">
            <button class="button-card" @click.prevent="addRoom('Спальня')" :class="{ 'active': selected_rooms.includes('Спальня') }">
              <svg class="icon-svg" width="51" height="30" viewBox="0 0 51 30" xmlns="http://www.w3.org/2000/svg"><title>bedroom</title><g stroke="#D0D6DB" stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M47.217 11.105l2.666 2.639a.753.753 0 0 1 .224.535v8.453H1.602V14.28c0-.2.081-.393.224-.535l2.667-2.639a.771.771 0 0 1 .54-.221h41.643a.77.77 0 0 1 .54.221zM3 23v6.264M49 23v6.264M5.51 10.883H46.2V1.692H5.51z"></path><path d="M6.567 7.166c-.584 0-1.057.469-1.057 1.046v1.625c0 .578.473 1.047 1.057 1.047h17.23c.585 0 1.058-.469 1.058-1.047V8.212c0-.577-.473-1.046-1.057-1.046H6.567zm21.345 0c-.584 0-1.057.469-1.057 1.046v1.625c0 .578.473 1.047 1.057 1.047h17.23c.585 0 1.058-.469 1.058-1.047V8.212c0-.577-.473-1.046-1.057-1.046h-17.23z"></path></g></svg>
              <div class="image-text">Спальня</div>
            </button>
        </div>

        <div class="image-card">
            <button class="button-card" @click.prevent="addRoom('Детская')" :class="{ 'active': selected_rooms.includes('Детская') }">
                  <svg class="icon-svg" width="41" height="35" viewBox="0 0 41 35" xmlns="http://www.w3.org/2000/svg"><title>Page 1</title><g stroke="#D0D6DB" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1.728 21.993c10.552 9.817 26.932 9.817 37.484 0 .277-.258.728-.055.728.323v2.752c0 .354-.141.698-.397.944-10.647 10.234-27.499 10.234-38.146 0A1.31 1.31 0 0 1 1 25.068v-2.752c0-.378.451-.58.728-.323zm28.373-5.598s2.727-1.162 4.09 1.754l2.261-1.745s-1.39-2.588-4.223-2.588c-2.835 0-3.705 1.874-3.705 1.874" stroke-width="1.5"></path><path d="M9.388 27.035c1.076-3.793 5.63-6.641 11.082-6.641 5.453 0 10.007 2.848 11.082 6.642" stroke-width="1.5"></path><path d="M35.177 25.106s-3.166-6.849-4.883-8.538c-1.717-1.69-4.823-.735-8.665-.735-3.843 0-3.924-1.308-4.497-3.848C14.844 2.633 6.697 2.18 6.697 2.18L5.452 1l-.089 1.96c-.317.476-2.427 4.368-3.367 5.742-.25.366-.45.78-.45 1.257 0 1.118.907 2.025 2.025 2.025.433 0 .904-.208 1.164-.369 1.01-.625 4.068-2.293 4.068-2.293 1.571 3.732.344 7.65.344 7.65-1.068 1.474-4.013 7.721-4.013 7.721" stroke-width="1.5"></path><path d="M18.103 14.796s.72-3.923-.943-7.165c-1.662-3.243-5.411-6.246-11.303-6.246"></path><path d="M4.555 6.992a.635.635 0 1 1 1.272 0" stroke-width=".5"></path><path d="M2.29 8.254s2.479.799 2.932 3.037" stroke-width="1.5"></path><path d="M4.822 10.246s4.626-4.312 5.28-7.142"></path><path d="M8.545 8.771S7.604 5.5 5.363 2.961" stroke-width="1.5"></path></g></svg>
                  <div class="image-text">Детская</div>
            </button>
        </div>

        <div class="image-card">
            <button class="button-card" @click.prevent="addRoom('Кабинет')" :class="{ 'active': selected_rooms.includes('Кабинет') }">
                <svg class="icon-svg" width="54" height="27" viewBox="0 0 54 27" xmlns="http://www.w3.org/2000/svg"><title>office</title><path d="M30 17h19V1H30zM1 1h52M5 1v25.2M49 9v17.2M36 5h7m-7 8h7M30 9h19" stroke-width="1.5" stroke="#D0D6DB" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                <div class="image-text">Кабинет</div>
            </button>
        </div>

        <div class="image-card">
            <button class="button-card" @click.prevent="addRoom('Кухня')" :class="{ 'active': selected_rooms.includes('Кухня') }">
                <svg class="icon-svg" width="49" height="35" viewBox="0 0 49 35" xmlns="http://www.w3.org/2000/svg"><title>Page 1</title><g stroke="#D0D6DB" stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 33.853h24.69V7.496H1z"></path><path d="M25.689 33.853h21.87V7.496h-21.87zM1 12h24.69M4.837 30h17.015V16.14H4.837zm3.496-12h10.023M7 8.9v2.017M11 8.9v2.017M15 8.9v2.017M19 8.9v2.017m17-3.42v26.356m-2-15.887v3.098m4-3.098v3.098"></path><path d="M32.643 2.122c0-.695-.561-1.259-1.253-1.259-.692 0-1.253.564-1.253 1.259v5.375m0-2.382h-.99v-.757"></path></g></svg>
                <div class="image-text">Кухня</div>
            </button>
        </div>

        <div class="image-card">
            <button class="button-card" @click.prevent="addRoom('Санузел')" :class="{ 'active': selected_rooms.includes('Санузел') }">
                  <svg class="icon-svg" width="49" height="33" viewBox="0 0 49 33" xmlns="http://www.w3.org/2000/svg"><title>Page 1</title><g stroke="#D0D6DB" stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M21.699 14.165h26.454zM1.6 14h10.358M9.065 32h31.623M2.927 14.165s.308 10.632 7.865 17.839m36.034-17.839s-.308 10.632-7.865 17.839m-27.003-7.291h9.74V12.164h-9.74zm0-3.713H21.7M37.05 6.398c0-2.654 2.179-4.806 4.866-4.806s4.98 2.152 4.98 4.806c0 1.708-.376 5.031-2.47 7.767"></path><path d="M34.779 8.645c0-1.24 1.016-2.244 2.271-2.244s2.272 1.004 2.272 2.244h-4.544z"></path></g></svg>
                  <div class="image-text">Санузел</div>
            </button>
        </div>

        <div class="image-card">
            <button class="button-card" @click.prevent="addRoom('Прочее')" :class="{ 'active': selected_rooms.includes('Прочее') }">
                  <svg class="icon-svg" width="16" height="40" viewBox="0 0 16 40" xmlns="http://www.w3.org/2000/svg"><title>Page 1</title><g stroke="#D0D6DB" stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1.942 39.2l1.306-15.405h9.023L13.577 39.2zM7 13.031v10.764m3.327-16.279c0 1.404-1.15 2.543-2.568 2.543-1.418 0-2.568-1.139-2.568-2.543 0-1.405 1.15-2.544 2.568-2.544 1.418 0 2.568 1.139 2.568 2.544z"></path><path d="M14.519 7.516c0 1.065-1.884 1.64-2.386 2.5-.519.888-.097 2.785-.993 3.299-.868.497-2.305-.799-3.38-.799-1.077 0-2.513 1.296-3.382.799-.896-.514-.474-2.411-.993-3.299C2.883 9.156 1 8.581 1 7.516c0-1.066 1.883-1.64 2.385-2.5.52-.888.098-2.786.993-3.3.869-.497 2.306.799 3.382.799 1.075 0 2.512-1.296 3.38-.798.896.513.474 2.41.993 3.298.502.86 2.386 1.435 2.386 2.5zm-5.507 9.458a4.213 4.213 0 0 0-1.218 3.54 4.304 4.304 0 0 0 3.573-1.207 4.213 4.213 0 0 0 1.218-3.54 4.305 4.305 0 0 0-3.573 1.207z"></path></g></svg>
                  <div class="image-text">Прочее</div>
            </button>
        </div>

        <div class="image-card">
            <button class="button-card" @click.prevent="addRoom('Вся квартира')" :class="{ 'active': selected_rooms.includes('Вся квартира') }">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  	 width="50px" height="50px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
                  <g>
                  	<path class="fill-color" d="M597.656,4.781H14.344C6.417,4.781,0,11.207,0,19.125v459c0,7.918,6.417,14.344,14.344,14.344H344.25
                  		c7.928,0,14.344-6.426,14.344-14.344s-6.416-14.344-14.344-14.344H229.5v-38.25c0-7.918-6.417-14.344-14.344-14.344
                  		s-14.344,6.426-14.344,14.344v38.25H28.688v-229.5h172.125v76.5c0,7.918,6.417,14.344,14.344,14.344s14.344-6.426,14.344-14.344
                  		v-19.125h181.688c7.928,0,14.344-6.426,14.344-14.344s-6.416-14.344-14.344-14.344H229.5V90.844
                  		c0-7.918-6.417-14.344-14.344-14.344s-14.344,6.426-14.344,14.344v114.75H28.688V33.469h554.625v229.5h-76.5v-38.25
                  		c0-7.918-6.416-14.344-14.344-14.344s-14.344,6.426-14.344,14.344v52.594c0,7.918,6.416,14.344,14.344,14.344h90.844v286.875H459
                  		v-95.625c0-7.918-6.416-14.344-14.344-14.344s-14.344,6.426-14.344,14.344v109.969c0,7.918,6.416,14.344,14.344,14.344h153
                  		c7.928,0,14.344-6.426,14.344-14.344V19.125C612,11.207,605.584,4.781,597.656,4.781z"/>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  </svg>

                  <div class="image-text">Вся квартира</div>
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
</template>

<script>
    export default {
        data () {
            return {
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
                let card_id = window.location.pathname.match(/\d+/g).toString()
                axios.post(`/cards/${card_id}/rooms/store`, {
                    'data': this.selected_rooms
                }).then(response => {
                    window.location.href = `/cards/${card_id}/form`
                })
            }
        }
    }
</script>

<style lang="scss" scoped>
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
}
.content-center {
  padding: 50px 0;
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
}
.primary-button:hover {
background-color: #2e3854;
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
@media (min-width: 700px) {
  .content-center {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
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
