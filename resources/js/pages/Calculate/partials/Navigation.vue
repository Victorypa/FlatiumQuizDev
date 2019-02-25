<template>
    <nav>
      <div class="nav nav-tabs" role="tablist">
        <a class="nav-item nav-link"
           :class="{ 'active': selected === 'result' ? true : false, 'nav-link-black': selected === 'result' ? true : false }"
           :href="result_url"
           >
           Ваш стиль
       </a>

        <a class="nav-item nav-link"
           :href="url"
           :class="{ 'active': selected === 'calculator' ? true : false, 'nav-link-black': selected === 'calculator' ? true : false  }"
           >
            Рассчёт ремонта
        </a>
      </div>
    </nav>
</template>

<script>
    export default {
        props: ['selected'],

        data () {
            return {
                result_url: '',
                url: ''
            }
        },

        created () {
            this.checkCalculateUrl()
        },

        methods: {
            checkCalculateUrl () {
                let card_id = window.location.search.match(/\d+/g).toString()

                this.result_url = `/cards/result?card_id=${card_id}`

                this.url = `/cards/square?card_id=${card_id}`

                // axios.get(`/cards/${card_id}`)
                //      .then(response => {
                //          // if (response.data.design_skills.length === 0) {
                //          //     this.url = `/cards/design-skills?card_id=${card_id}`
                //          // }
                //          //
                //          // else if (response.data.start_dates.length === 0) {
                //          //     this.url = `/cards/start-date?card_id=${card_id}`
                //          // }
                //          //
                //          // else if (response.data.material_categories.length === 0) {
                //          //     this.url = `/cards/material-category?card_id=${card_id}`
                //          // }
                //          //
                //          // else if (response.data.decorations.length === 0) {
                //          //     this.url = `/cards/decoration?card_id=${card_id}`
                //          // }
                //          //
                //          // else if (response.data.squares.length === 0) {
                //          //     this.url = `/cards/square?card_id=${card_id}`
                //          // }
                //
                //          // else {
                //          //     this.url = `/cards/square?card_id=${card_id}`
                //          // }
                //          this.url = `/cards/square?card_id=${card_id}`
                //      })
            }
        }
    }
</script>

<style lang="scss" scoped>

a {
    color: #00a4d1;
}

.nav-link-black {
    color: black;
}

.nav-link-blue {
    color: #00a4d1;
}

.nav-tabs .nav-link {
 position: relative;
 text-transform: uppercase;
 padding: 20px;
 letter-spacing: 2px;
 border-top-left-radius: 0 !important;
 border-top-right-radius: 0 !important;
 &.done {
   padding-right: 45px;
   &:after {
     content: url('/storage/quiz/tick-inside-circle.svg');
     position: absolute;
     right: 15px;
     top: 20px;
   }
 }

 &:hover {
   background-color: #c1bebe42;
 }
}
</style>
