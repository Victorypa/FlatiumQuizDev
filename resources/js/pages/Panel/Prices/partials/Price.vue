<template>
    <tr>
        <td>
            {{ translations[price.style] }}
        </td>
        <td>
            {{ translations[price.category] }}
        </td>
        <td>
            {{ translations[price.type] }}
        </td>
        <td class="clickable text-center"
            v-if="!work_show"
            @click="work_show = !work_show"
            >
            {{ price.price }} Р
        </td>
        <td v-else>
            <form @submit.prevent="updatePrice()">
                <input type="text"
                       v-model="price.price"
                       />
                <button type="submit" class="btn btn-sm btn-primary">Сохранить</button>
            </form>
        </td>

        <td class="clickable text-center"
            v-if="!material_show"
            @click="material_show = !material_show"
            >
            {{ price.material_price }} Р
        </td>
        <td v-else>
            <form @submit.prevent="updatePrice()">
                <input type="text"
                       v-model="price.material_price"
                       />
                <button type="submit" class="btn btn-sm btn-primary">Сохранить</button>
            </form>
        </td>

    </tr>
</template>

<script>
    import { translations } from '../../../../utilities/translations.js'

    export default {
        props: ['price'],

        data () {
            return {
                translations,
                work_show: false,
                material_show: false
            }
        },

        methods: {
            updatePrice () {
                axios.patch(`/panel/prices/${this.price.id}`, {
                    'price': this.price.price,
                    'material_price': this.price.material_price
                }).then(response => {
                    this.material_show = false
                    this.work_show = false
                })
            }
        }
    }
</script>


<style scoped>
    .clickable {
        cursor: pointer;
    }
</style>
