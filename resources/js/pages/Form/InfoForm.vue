<template>

  <div>
    <app-header></app-header>
    <div class="progress-bar__wrapper">
          <progress-bar bar-color="#aad7ea " :val="progress_value"></progress-bar>
    </div>
    <div class="content-center">
        <div class="container">

            <div v-if="booleans.name">
                <h1 class="main-caption">
                  Как вас зовут?
                </h1>
                <form @submit.prevent="go('name')">
                    <div class="form-wrapper">
                        <input type="text" value=""
                               v-model="person.name"
                               required
                               autofocus
                               >
                               <label class="full-name" @click.prevent="click">Полное имя</label>
                    </div>

                    <div class="button-wrapper">
                        <button type="submit"
                                class="primary-button"
                                id="name"
                                >
                           Далее
                       </button>
                    </div>
                </form>
            </div>

            <div v-if="booleans.email">
                <h1 class="main-caption">
                  Укажите свой E-mail адрес, чтобы получить результат тестирования
                </h1>
                <form @submit.prevent="go('email')">
                    <div class="form-wrapper">
                      <input type="email"
                             v-model="person.email"
                             required
                             autofocus
                             >
                            <label class="full-name" @click.prevent="click">Ваша почта</label>
                    </div>
                    <div class="button-wrapper">
                        <button type="submit"
                                class="primary-button"
                                id="email"
                                >
                           Далее
                       </button>
                    </div>
                </form>
            </div>

            <div v-if="booleans.phone">
                <h1 class="main-caption">
                  Укажите свой телефон, для получения консультации
                </h1>

                <form @submit.prevent="go('phone')">
                    <div class="form-wrapper">
                        <vue-tel-input v-model="person.phone"
                                        placeholder = ""
                                       :preferredCountries="['ru', 'us', 'ua']"
                                       autofocus
                                       >
                       </vue-tel-input>
                        <label class="full-name full-name--tel" @click.prevent="click">Введите номер телефона</label>
                    </div>

                    <div class="button-wrapper">
                        <button type="submit"
                                class="primary-button"
                                id="phone"
                                >
                           Далее
                       </button>
                       <button type="submit"
                               class="primary-button primary-button--disabled"
                               @submit.prevent="go('phone')"
                               id="phone_pass"
                               >
                               Пропустить
                      </button>
                    </div>
                </form>
            </div>
       </div>
    </div>
  </div>

</template>

<script>
    import Vue from 'vue'
    import VueTelInput from 'vue-tel-input'
    import 'vue-tel-input/dist/vue-tel-input.css';
    import ProgressBar from 'vue-simple-progress'

    Vue.use(VueTelInput)

    export default {
      components: {
        ProgressBar
      },
        data () {
            return {
                person: {
                    name: '',
                    email: '',
                    phone: ''
                },
                booleans: {
                    name: true,
                    email: false,
                    phone: false
                },
                progress_value: 70
            }
        },

        methods: {
          click (e) {
            console.log(this.person.name, this.person.name === '');
            if (!this.person.name === '' || !this.person.email === '' || !this.person.phone === '') {
              return
            } else {
              e.target.style.top = '-6px'
              e.target.style.fontSize = '14px'
            }

          },
            go (type) {
                switch (type) {
                    case 'name':
                        if (this.person.name !== '') {
                            this.booleans.name = false
                            this.booleans.email = true
                            this.progress_value += 10
                        }
                        break;
                    case 'email':
                        if (this.person.email !== '') {
                            this.booleans.email = false
                            this.booleans.phone = true
                            this.progress_value += 20
                        }
                        break;
                    case 'phone':
                        if (this.person.name !== '' && this.person.email) {
                            let card_id = window.location.pathname.match(/\d+/g).toString()

                            axios.post(`/cards/${card_id}/form/store`, this.person)
                                 .then(response => {
                                     window.location.href = '/redirect'
                                 })
                        }
                        break;
                    default:

                }
            }
        }
    }
</script>

<style lang="scss" scoped>

.form-wrapper {
position: relative;

margin: 0 auto;
}


.logo {
  width: 120px;
  margin-top: 20px;
  margin-left: 6%;

  &__img {
    width: 100%;
    height: 100%;
  }
}

.progress-bar {
  &__wrapper {
    margin-top: 30px;
  }
}

.vue-tel-input {
  position: relative;
  display: flex;
  border: 2px solid #eee;
  border-radius: 5px;
  box-sizing: border-box;
  font-weight: 400;
  font-size: 15px;
  line-height: 1.5;
  text-indent: 0;
  letter-spacing: .025em;
  outline: none;
  padding: 14.4px;
  box-shadow: none !important;
  transition: border .15s ease-in-out;
  width: 100%;
  &:focus-within {
      border: 2px solid #eee !important;
  }
}

input {
display: block;
border: 2px solid #eee;
border-radius: 5px;
box-sizing: border-box;
font-weight: 400;
font-size: 15px;
line-height: 1.5;
text-indent: 0;
letter-spacing: .025em;
outline: none;
padding: 14.4px;

transition: border .15s ease-in-out;
width: 100%;
}

.full-name {
position: absolute;
top: 20px;
left: 16px;
background: #fff;
border-radius: 8px;
color: #ccc;
font-weight: 400;
font-size: 11px;
text-indent: 0;
letter-spacing: .1em;
padding: 0 9.6px;
transition:0.2s ease all;
text-transform: uppercase;
  &--tel {
    top: -6px;
  }
}


input:focus ~ label 		{
  top:-6px;
  font-size:14px;
}

.input-info {
font-size: 13px;
color: #738494;
margin-top: 10px;
text-align: right;
}

.login-here {
color: #738494;
font-weight: 400;
font-size: 12px;
line-height: 1.9;
padding: 18px 0 12px;
text-align: center;
}

.login-here a {
color: #738494;
display: inline-block;
margin-left: 4px;
}

.login-here a:hover {
text-decoration: none;
}

.button-wrapper {
text-align: center;
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
border-radius: 5px;

line-height: 42px;
outline: none;
cursor: pointer;
&--disabled {
  background-color: #ccc;
}
}

.primary-button:hover {
  background-color: #2e3854;
}

.content-center {
  padding: 100px 0;
}

.dropdown .open {
  &:focus {
    outline: none !important;
  }

}

.dropdown:hover:focus {
  outline: none !important;
}

@media (min-width: 700px) {
  .content-center {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    margin-top: -5%;
    height: 100vh;

    padding: 0;
  }
  .form-wrapper, .main-caption {
    width: 50%;
  }
}

</style>
