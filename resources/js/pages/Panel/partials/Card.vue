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

        <td v-if="card.squares[0]">
            {{ card.squares[0].area }} кв.м
        </td>
        <td v-else>
            &nbsp;
        </td>

        <td v-if="card.decorations[0]">
            {{ translations[card.decorations[0].type] }}
        </td>
        <td v-else>
            &nbsp;
        </td>

        <td v-if="card.material_categories[0]">
            {{ translations[card.material_categories[0].type] }}
        </td>
        <td v-else>
            &nbsp;
        </td>

        <td v-if="card.start_dates[0]">
            {{ translations[card.start_dates[0].type] }}
        </td>
        <td v-else>
            &nbsp;
        </td>

        <td v-if="card.design_skills[0]">
            {{ translations[card.design_skills[0].type] }}
        </td>
        <td v-else>
            &nbsp;
        </td>
    </tr>
</template>

<script>
    import { translations } from '../../../utilities/translations.js'

    export default {
        props: ['card'],

        data () {
            return {
                moment, translations
            }
        }
    }
</script>
