<template>
    <div>
        <Navigation></Navigation>

        <div class="container">
            <div class="row mt-4">
                <div class="col-md-12">
                    <table class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th class="cursor" @click.prevent="sortByDate = !sortByDate">
                                    Дата и время
                                    <span>
                                        <font-awesome-icon icon="coffee" />
                                    </span>
                                </th>
                                <th>Имя</th>
                                <th>E-mail</th>
                                <th>Телефон</th>
                                <th>Выбор по комнатам</th>
                                <th>Результат</th>
                            </tr>
                        </thead>
                        <tbody v-if="cards.length">
                            <card v-for="card in filteredCards" :card="card" :key="card.id"></card>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    import Card from './partials/Card'
    import Navigation from '../../components/Panel/partials/Navigation'

    export default {
        props: ['cards'],

        components: {
            Navigation, Card
        },

        data () {
            return {
                sortByDate: false
            }
        },

        created () {

        },

        methods: {

        },

        computed: {
            filteredCards () {
                let data = this.cards

                this.sortByDate ? data = _.orderBy(data, ['created_at'], ['desc']) : data = _.orderBy(data, ['created_at'], ['asc'])

                return data
            }
        }
    }
</script>

<style scoped>
    .cursor {
        cursor: pointer;
    }
</style>
