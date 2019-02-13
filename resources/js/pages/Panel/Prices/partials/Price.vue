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
        <td class="clickable" v-if="!show" @click="show = !show">
            {{ currentPrice }} Р
        </td>
        <td v-else>
            <form @submit.prevent="updatePrice(price.id)">
                <input type="text"
                       v-model="currentPrice"
                       />
                <button type="submit" class="btn btn-sm btn-primary">Сохранить</button>
            </form>
        </td>
    </tr>
</template>

<script>
    import { translations } from '../index.js'

    export default {
        props: ['price'],

        data () {
            return {
                translations,
                currentPrice: this.price.price,
                show: false
            }
        },

        methods: {
            updatePrice (id) {
                axios.patch(`/panel/prices/${id}`, {
                    'price': this.currentPrice
                }).then(response => {
                    this.show = false
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
