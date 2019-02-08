<template>
    <div>
        <navigation />

        <div class="container">
            <table class="table table-striped table-bordered mt-3"
                   style="width:100%"
                   v-for="(item, index) in payload"
                   :key="index"
                   >
                <thead>
                    <tr>
                        <th v-for="(element, index) in item.elements">
                            <strong class="cursor" @click.prevent="show(element.name)">
                                {{ element.name }}
                            </strong>

                            <modal :name="element.name"
                                    height="auto"
                                    :scrollable="true"
                                    >
                                <div class="container">
                                    <div class="row">
                                        <img :src="'/storage/quiz/' + item.group + '/' + element.link" alt="" >
                                    </div>
                                </div>
                            </modal>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td v-for="element in item.elements">
                            <strong>{{ filter(element.name) }}</strong>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    import { payload } from './index'

    export default {
        props: ['clicks'],

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
