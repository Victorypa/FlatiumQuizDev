<template>
    <div>
        <Navigation></Navigation>

        <div class="container">
            <div class="row mt-4">
                <div class="col-md-12">
                    <table class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Дата и время</th>
                                <th>Имя</th>
                                <th>E-mail</th>
                                <th>Телефон</th>
                                <th>Выбор по комнатам</th>
                                <th>Результат</th>
                            </tr>
                        </thead>
                        <tbody v-if="cards.length">
                            <card v-for="card in cards" :card="card" :key="card.id"></card>
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

            }
        },

        created () {

        }
    }
</script>
