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

                            <tr v-for="card in cards" :key="card.id">
                                <td>{{ moment(card.created_at).format('DD-MM-YYYY') }}</td>

                                <template v-if="card.people.length">
                                    <td>
                                        {{ card.people[0].name }}
                                    </td>
                                    <td>
                                        {{ card.people[0].email }}
                                    </td>
                                    <td v-if="card.people[0].phone">
                                        {{ card.people[0].phone }}
                                    </td>
                                    <td v-else>Нет</td>
                                </template>

                                <td v-if="card.rooms.length">
                                    <span v-for="room in card.rooms">
                                        {{ room.name + ',' }}
                                    </span>
                                </td>

                                <td>{{ card.result }}</td>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    import Navigation from '../../components/Panel/partials/Navigation'
    export default {
        props: ['cards'],

        components: {
            Navigation
        },

        data () {
            return {
                moment  
            }
        },

        mounted () {

        }
    }
</script>
