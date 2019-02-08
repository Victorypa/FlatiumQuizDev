<template>
    <div>
        <navigation />

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
                            {{ calculator.price }}
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
