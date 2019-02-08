<template>
    <div>
        <navigation />

        <div class="container">
            <table class="table table-striped table-bordered mt-3" style="width:100%">
                <thead>
                    <tr>
                        <th v-for="(header, index) in headers">
                            <strong class="cursor">
                                {{ header }}
                            </strong>
                        </th>
                    </tr>
                </thead>
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
                headers
            }
        },

        computed: {
            filteredCalculators () {
                let data = this.calculators


            }
        }
    }
</script>
