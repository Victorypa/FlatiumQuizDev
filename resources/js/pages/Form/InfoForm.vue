<template>
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
                               <label class="full-name">Полное имя</label>
                        <!-- <div class="input-info">*Пожалуйста, введите свое имя и фамилию, чтобы продолжить</div> -->
                    </div>

                    <div class="button-wrapper">
                        <button type="submit"
                                class="primary-button"
                                >
                           Далее
                       </button>
                    </div>
                </form>
            </div>

            <div v-if="booleans.email">
                <h1 class="main-caption">
                  Укажите свой E-mail адрес,<br> чтобы получить результат тестирования
                </h1>
                <form @submit.prevent="go('email')">
                    <div class="form-wrapper">
                      <input type="email"
                             placeholder="Ваша почта"
                             v-model="person.email"
                             required
                             autofocus
                             >
                      <!-- <div class="input-info">*Пожалуйста, введите всвой E-mail адрес, чтобы продолжить</div> -->
                    </div>
                    <div class="button-wrapper">
                        <button type="submit"
                                class="primary-button"
                                >
                           Далее
                       </button>
                    </div>
                </form>
            </div>

            <div v-if="booleans.phone">
                <h1 class="main-caption">
                    Укажите свой телефон,<br> если вы хотите проконсультироваться <br> по вопросу ремонта <br>  или услуг интерьерного стилиста.
                </h1>

                <form @submit.prevent="go('phone')">
                    <div class="form-wrapper">
                        <vue-tel-input v-model="person.phone"
                                       placeholder="Ваш номер телефона"
                                       :preferredCountries="['ru', 'us', 'ua']"
                                       autofocus
                                       >
                       </vue-tel-input>
                    </div>

                    <div class="button-wrapper">
                        <button type="submit"
                                class="primary-button"
                                >
                           Далее
                       </button>
                       <button type="submit"
                               class="primary-button"
                               @submit.prevent="go('phone')"
                               >
                               Пропустить
                      </button>
                    </div>
                </form>
            </div>
       </div>
    </div>
</template>

<script>
    import Vue from 'vue'
    import VueTelInput from 'vue-tel-input'
    import 'vue-tel-input/dist/vue-tel-input.css';

    Vue.use(VueTelInput)

    export default {
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
                }
            }
        },

        methods: {
            go (type) {
                switch (type) {
                    case 'name':
                        if (this.person.name !== '') {
                            this.booleans.name = false
                            this.booleans.email = true
                        }
                        break;
                    case 'email':
                        if (this.person.email !== '') {
                            this.booleans.email = false
                            this.booleans.phone = true
                        }
                        break;
                    case 'phone':
                        if (this.person.name !== '' && this.person.email) {
                            let card_id = window.location.pathname.match(/\d+/g).toString()

                            axios.post(`/cards/${card_id}/form/store`, this.person)
                                 .then(response => {
                                     // window.location.href = '/redirect'
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
left: 20px;
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
border-radius: 2px;

line-height: 42px;
outline: none;
cursor: pointer;

}

.primary-button:hover {
background-color: #2e3854;
}

.content-center {
    padding: 100px 0;
}

.vue-tel-input {
  box-shadow: none !important;
  border: 1px solid black;
  &:focus {
      border: 1px solid black;
  }

}

.dropdown {
  outline: none;
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
