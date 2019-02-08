<template>
    <div>
        <navigation />

        <div class="container">
            <div class="row mt-4">
                <div class="col-md-12">
                    <table class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th><strong>SK</strong></th>
                                <th><strong>K</strong></th>
                                <th><strong>SKAN</strong></th>
                                <th><strong>CON</strong></th>
                                <th><strong>ECO</strong></th>
                                <th><strong>LOFT</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <strong>{{ filterCard('SK') }}</strong>
                                </td>
                                <td>
                                    <strong>{{ filterCard('K') }}</strong>
                                </td>
                                <td>
                                    <strong>{{ filterCard('SKAN') }}</strong>
                                </td>
                                <td>
                                    <strong>{{ filterCard('CON') }}</strong>
                                </td>
                                <td>
                                    <strong>{{ filterCard('ECO') }}</strong>
                                </td>
                                <td>
                                    <strong>{{ filterCard('LOFT') }}</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-4">
                <div class="col-md-12">
                    <table class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th class="cursor" @click.prevent="sortByDate = !sortByDate">
                                    Дата и время
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

    export default {
        props: ['cards'],

        components: {
            Card
        },

        data () {
            return {
                sortByDate: false
            }
        },

        methods: {
            filterCard (type) {
                return this.cards.filter(card => card.result === type).length
            }
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
