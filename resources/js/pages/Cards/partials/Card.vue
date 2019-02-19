<template>
    <div class="mt-5">
        <h1 class="main-caption">
            {{ title }}
        </h1>

        <div class="image-wrapper">
            <template v-for="card in cards">
                <a class="image-card"
                   :class="card.classname"
                   @click.prevent="handle(card.uuid, card.id, card.path, type)"
                   >
                  <img alt="Более классический" :src="card.path">
                  <h4 class="image-text">{{ card.name }}</h4>
                </a>
            </template>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'title', 'cards', 'type'
        ],

        methods: {
            handle (uuid, id, path, type) {
                this.addCard(uuid, type)
                this.addId(id, path)
            },

            addCard (uuid, type) {
                this.$emit('selected-card', {uuid, type})
            },

            addId (id, path) {
                if (id) {
                    axios.post('/cards/clicks/store', {
                        'name': id,
                        'path': path
                    })
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


.fade-in.one {
  animation-delay: 0.3s;
}

.fade-in.two {
  animation-delay: 0.6s;
}

.fade-in.three {
  animation-delay: 0.9s;
}

.progress-bar {
  &__wrapper {
    margin-top: 30px;
  }
}

.image {
  &-wrapper {
  display: flex;
  justify-content: center;
  }
  &-card {
  width: 90%;
  height: 100%;

  display: block;
  border: 2px solid #eee;


  padding: 18px;
  margin-left: 30px;

  font-size: 14px;
  text-decoration: none;

  outline: none;
  transition-duration: .6s;
  cursor: pointer;
  &:first-child {
    margin-left: 0;
  }
    &:hover {
    border: 2px solid #000;
    box-shadow: 0 15px 22px 0 rgba(28,34,51,.2);
    transform: scale(1.025);
    }
    img {
    height: auto;
    width: 100%;

    }
  }
  &-text {
  margin: 0;
  padding: 0;
  font-size: 12px;
  color: #1c2233;
  letter-spacing: 2px;
  line-height: 1.9;
  margin-top: 14px;

  text-align: center;
  text-transform: uppercase;
  }

}
.content-center {
  padding: 30px 0;
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
  }
  .image-card {
    margin-bottom: 20px;
    margin-left: 0px;
  }
}
</style>
