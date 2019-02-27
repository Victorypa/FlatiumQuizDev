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
                        <strong>Цена (работа)</strong>
                    </th>

                    <th>
                        <strong>Цена (материал)</strong>
                    </th>
                </tr>
            </thead>
            <tbody v-if="prices.length">
                <Price v-for="price in prices"
                       :price="price"
                       :key="price.id"
                       />
            </tbody>
        </table>
    </div>
</template>

<script>
    import Price from './partials/Price'

    export default {
        props: ['prices'],

        components: {
            Price
        }
    }
</script>
