<template>
    <tr>
        <td>
            {{ moment(card.created_at).format('DD-MM-YYYY') }}
        </td>

        <template v-if="card.people[0]">
            <td >{{ card.people[0].name }}</td>
            <td>{{ card.people[0].email }}</td>
            <td>{{ card.people[0].phone }}</td>
        </template>
        <template v-else>
            <td></td>
            <td></td>
            <td></td>
        </template>

        <td v-if="card.rooms.length">
            <span v-for="room in card.rooms">
                {{ room.name + ',' }}
            </span>
        </td>
        <td v-else>
            &nbsp;
        </td>

        <td>{{ card.result }}</td>
    </tr>
</template>

<script>
    export default {
        props: ['card'],

        data () {
            return {
                moment
            }
        }
    }
</script>
