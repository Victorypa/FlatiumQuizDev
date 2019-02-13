<template>
<div class="">
      <app-header></app-header>

      <app-navigation></app-navigation>

      <calculate-progressbar :volumn="60"></calculate-progressbar>

      <div class="content-center">
          <div class="container">
            <h1 class="main-caption">
              Выберете категорию материалов по вашему бюджету
            </h1>
            <div class="image-wrapper" v-if="categories.length">
              <div class="image-card fade-in" v-for="category in categories">
                  <button class="button-card"
                          @click.prevent="selectedCategory(category.value)"
                          >
                            <div class="image-picture">
                              <img :alt="category.name"
                                   :src="category.svg">
                            </div>
                            <div class="image-text"
                                 v-text="category.name"
                                 >
                            </div>
                  </button>

                  <div class="image-subtitle">
                    <ul v-if="category.comments.length">
                      <li v-for="comment in category.comments" v-text="comment.title" />
                    </ul>
                  </div>
              </div>
            </div>

          </div>
        </div>
</div>

</template>

<script>
    import { categories } from './index.js'
    export default {
        data () {
            return {
                categories
            }
        },

        methods: {
            selectedCategory (type) {
                let card_id = window.location.search.match(/\d+/g).toString()
                axios.post('/cards/material-category/store', {
                    'card_id': card_id,
                    'type': type
                }).then(response => {
                    window.location.href = `/cards/start-date?card_id=${card_id}`
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

.image {
  &-wrapper {
  display: flex;
  justify-content: space-between;
  max-width: 800px;
  margin: 0 auto;
  }
  &-card {
  margin: 0 10px 20px;
  display: block;
  flex-basis: 300px;
  font-size: 14px;
  text-decoration: none;
  }
  &-text {
  padding-top: 30px;
  }
  &-subtitle {
  text-transform: none;
  font-size: 10px;
  padding-top: 40px;
  line-height: 16px;
  color: #738494;
  ul {
    text-align: center;
    list-style: none;
    margin: 0;
    padding: 0;
  }
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
min-height: 350px;
letter-spacing: .11em;
text-transform: uppercase;
width: 100%;
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
