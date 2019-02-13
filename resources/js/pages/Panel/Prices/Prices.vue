<template>
    <div class="container">
        <table class="table table-striped table-bordered mt-3" style="width:100%">
            <thead>
                <tr>
                    <th>
                        <strong>Стиль</strong>
                    </th>
                    <th>
                        <strong>Категория</strong>
                    </th>
                    <th>
                        <strong>Тип</strong>
                    </th>
                    <th>
                        <strong>Цена</strong>
                    </th>
                </tr>
            </thead>
            <tbody v-if="prices.length">
                <tr v-for="price in prices">
                    <td>
                        {{ translations[price.style] }}
                    </td>
                    <td>
                        {{ translations[price.category] }}
                    </td>
                    <td>
                        {{ translations[price.type] }}
                    </td>
                    <td>
                        {{ price.price }} Р
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import { translations } from './index.js'
    export default {
        props: ['prices'],

        data () {
            return {
                translations,
            }
        },

        created () {
            console.log(this.translations['LOFT']);
        }
    }
</script>
