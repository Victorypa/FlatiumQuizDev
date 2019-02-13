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
            <tbody>
                <tr>
                    <td>
                        LOFT
                    </td>
                    <td>
                        standard
                    </td>
                    <td>
                        old
                    </td>
                    <td>
                        100
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
