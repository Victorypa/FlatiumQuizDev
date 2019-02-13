<template>
    <div>
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-12">
                    <table class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <!-- <tr>
                                <th v-for="(type, index) in types">
                                    <strong>{{ type }}</strong>
                                </th>
                            </tr> -->
                        </thead>
                        <tbody>
                            <!-- <tr>
                                <td v-for="(type, index) in types">
                                    <strong>{{ filterCard(type) }}</strong>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="container">
            <table class="table table-striped table-bordered mt-3" style="width:100%">
                <thead>
                    <tr>
                        <th v-for="(header, index) in headers">
                            <strong class="cursor">
                                {{ header.ru }}
                            </strong>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="calculator in calculators">
                        <td>
                            {{ calculator.id }}
                        </td>
                        <td>
                            {{ calculator.square }}
                        </td>
                        <td>
                            {{ calculator.type }}
                        </td>
                        <td>
                            {{ calculator.style }}
                        </td>
                        <td>
                            {{ calculator.category }}
                        </td>
                        <td>
                            {{ calculator.phone }}
                        </td>
                        <td>
                            {{ calculator.name }}
                        </td>
                        <td>
                            {{ new Intl.NumberFormat('ru-Ru').format(calculator.price) }} Р
                        </td>
                        <td>
                            {{ moment(calculator.created_at).format('MM-DD-YYYY') }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    import { headers } from './index.js'

    export default {
        props: ['calculators'],

        data () {
            return {
                headers,
                moment
            }
        },
    }
</script>
