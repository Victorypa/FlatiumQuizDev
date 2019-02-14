<template>
    <nav>
      <div class="nav nav-tabs" role="tablist">
        <a class="nav-item nav-link"
           :class="{ 'active': selected === 'result' ? true : false }"
           :href="result_url"
           >
           Ваш стиль
       </a>

        <a v-if="url"
           class="nav-item nav-link"
           :href="url"
           :class="{ 'active': selected === 'calculator' ? true : false }"
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

                axios.get(`/cards/${card_id}`)
                     .then(response => {
                         if (response.data.design_skills.length === 0) {
                             this.url = `/cards/design-skills?card_id=${card_id}`
                         }

                         if (response.data.start_dates.length === 0) {
                             this.url = `/cards/start-date?card_id=${card_id}`
                         }

                         if (response.data.material_categories.length === 0) {
                             this.url = `/cards/material-category?card_id=${card_id}`
                         }

                         if (response.data.decorations.length === 0) {
                             this.url = `/cards/decoration?card_id=${card_id}`
                         }

                         if (response.data.squares.length === 0) {
                             this.url = `/cards/square?card_id=${card_id}`
                         }
                     })
            }
        }
    }
</script>
