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
            <button class="button-card" @click.prevent="addRoom('Прочее')">
                  <svg class="icon-svg" width="16" height="40" viewBox="0 0 16 40" xmlns="http://www.w3.org/2000/svg"><title>Page 1</title><g stroke="#D0D6DB" stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1.942 39.2l1.306-15.405h9.023L13.577 39.2zM7 13.031v10.764m3.327-16.279c0 1.404-1.15 2.543-2.568 2.543-1.418 0-2.568-1.139-2.568-2.543 0-1.405 1.15-2.544 2.568-2.544 1.418 0 2.568 1.139 2.568 2.544z"></path><path d="M14.519 7.516c0 1.065-1.884 1.64-2.386 2.5-.519.888-.097 2.785-.993 3.299-.868.497-2.305-.799-3.38-.799-1.077 0-2.513 1.296-3.382.799-.896-.514-.474-2.411-.993-3.299C2.883 9.156 1 8.581 1 7.516c0-1.066 1.883-1.64 2.385-2.5.52-.888.098-2.786.993-3.3.869-.497 2.306.799 3.382.799 1.075 0 2.512-1.296 3.38-.798.896.513.474 2.41.993 3.298.502.86 2.386 1.435 2.386 2.5zm-5.507 9.458a4.213 4.213 0 0 0-1.218 3.54 4.304 4.304 0 0 0 3.573-1.207 4.213 4.213 0 0 0 1.218-3.54 4.305 4.305 0 0 0-3.573 1.207z"></path></g></svg>
                  <div class="image-text">Прочее</div>
            </button>
        </div>

        <div class="image-card">
            <button class="button-card" @click.prevent="addRoom('Вся квартира')">
                  <svg class="icon-svg" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><title>Fill 1</title><path d="M23.672 10.989a5.638 5.638 0 0 0-1.838-1.196c-.717-.294-1.511-.442-2.383-.442-.925 0-1.77.16-2.53.482a6.757 6.757 0 0 0-2.015 1.301l1.387 1.494c.22-.212.437-.403.647-.576.212-.171.436-.318.674-.442.238-.123.493-.218.766-.284a4.07 4.07 0 0 1 .938-.098c.573 0 1.095.09 1.566.27.471.18.872.446 1.203.8.33.351.584.788.766 1.307.18.52.27 1.119.27 1.797 0 .554-.079 1.03-.237 1.427a3.872 3.872 0 0 1-.628 1.057 5.26 5.26 0 0 1-.885.832c-.33.248-.667.498-1.011.753-.343.256-.68.528-1.01.82-.33.291-.626.636-.886 1.036s-.469.867-.627 1.4c-.159.534-.239 1.17-.239 1.91v.899h2.049c0-.503.008-.966.026-1.389.018-.421.07-.77.16-1.042.175-.529.432-.976.771-1.342a8.91 8.91 0 0 1 1.117-1.011c.404-.307.817-.618 1.235-.93.418-.313.8-.686 1.143-1.119.343-.429.625-.95.846-1.557.22-.607.33-1.366.33-2.273a5.44 5.44 0 0 0-1.605-3.884m-3.95 17.181a1.524 1.524 0 0 0-.456-.35 1.296 1.296 0 0 0-.582-.13c-.211 0-.41.043-.594.13-.185.09-.344.206-.476.35a1.64 1.64 0 0 0-.31.496 1.534 1.534 0 0 0 .006 1.176c.08.186.186.35.317.495.133.145.289.26.47.344.18.083.376.126.587.126.203 0 .392-.045.569-.133a1.47 1.47 0 0 0 .455-.35c.128-.145.23-.31.305-.495a1.56 1.56 0 0 0 .111-.583 1.654 1.654 0 0 0-.402-1.076M20 38.462c-10.18 0-18.461-8.283-18.461-18.463C1.539 9.82 9.82 1.54 20 1.54c10.18 0 18.462 8.28 18.462 18.46 0 10.18-8.282 18.463-18.462 18.463M20 0C8.972 0 0 8.972 0 20c0 11.029 8.972 20 20 20 11.029 0 20-8.971 20-20S31.03 0 20 0" fill="#A1ADB7" fill-rule="evenodd"></path></svg>
                  <div class="image-text">Вся квартира</div>
            </button>
        </div>

        <div class="image-card">
            <button @click.prevent="save" class="btn btn-primary">OK</button>
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
.body {
min-width: 320px;

}

.container {

font-family: 'Rubik', sans-serif;

max-width: 540px;

margin: 0 auto;
}

.main-caption {
text-align: center;
font-weight: 400;

line-height: 1.5;
font-size: 20px;

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

  }
  &-card {
  margin: 0 10px 20px;

  display: block;

  font-size: 14px;
  text-decoration: none;

  }
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
    margin-top: -5%;
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

</style>
