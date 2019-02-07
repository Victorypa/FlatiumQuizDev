<template>
    <div>
        <Navigation></Navigation>

        <div class="container">

            <table class="table table-striped table-bordered mt-3"
                   style="width:100%"
                   v-for="(item, index) in payload"
                   :key="index"
                   >
                <thead>
                    <tr>
                        <th v-for="element in item.elements">
                            <strong class="cursor" @click.prevent="show(element)">
                                {{ element }}
                            </strong>

                            <modal :name="element">
                                <p>{{ element }}</p>
                            </modal>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td v-for="element in item.elements">
                            <strong>{{ filter(element) }}</strong>
                        </td>
                    </tr>
                </tbody>
            </table>


        </div>
    </div>
</template>

<script>
    import Navigation from '../../../components/Panel/partials/Navigation'
    import { payload } from './index'

    export default {
        props: ['clicks'],

        components: {
            Navigation
        },

        data () {
            return {
                payload: []
            }
        },

        created () {
            this.payload = payload
        },

        methods: {
            filter (type) {
                return this.clicks.filter(row => row.name === type).length
            },

            show (element) {
                this.$modal.show(element);
            },

            hide (element) {
                this.$modal.hide(element);
            }
        }
    }
</script>

<style scoped>
    .cursor {
        cursor: pointer;
    }
</style>
