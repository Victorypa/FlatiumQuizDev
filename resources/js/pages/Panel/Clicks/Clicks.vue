<template>
    <div>
        <Navigation></Navigation>

        <div class="container">


            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th><strong>A1</strong></th>
                        <th><strong>A2</strong></th>
                        <th><strong>A3</strong></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <strong>{{ filter('A1') }}</strong>
                        </td>
                        <td>
                            <strong>{{ filter('A2') }}</strong>
                        </td>
                        <td>
                            <strong>{{ filter('A3') }}</strong>
                        </td>
                    </tr>
                </tbody>
            </table>

            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th><strong>B1</strong></th>
                        <th><strong>B2</strong></th>
                        <th><strong>B3</strong></th>
                    </tr>

                    <tr>
                        <td>
                            <strong>{{ filter('B1') }}</strong>
                        </td>
                        <td>
                            <strong>{{ filter('B2') }}</strong>
                        </td>
                        <td>
                            <strong>{{ filter('B3') }}</strong>
                        </td>
                    </tr>
                </thead>
            </table>

            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th><strong>C11</strong></th>
                        <th><strong>C12</strong></th>
                        <th><strong>C13</strong></th>
                    </tr>

                    <tr>
                        <td>
                            <strong>{{ filter('C11') }}</strong>
                        </td>
                        <td>
                            <strong>{{ filter('C12') }}</strong>
                        </td>
                        <td>
                            <strong>{{ filter('C13') }}</strong>
                        </td>
                    </tr>
                </thead>
            </table>

            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th><strong>C21</strong></th>
                        <th><strong>C22</strong></th>
                        <th><strong>C23</strong></th>
                    </tr>

                    <tr>
                        <td>
                            <strong>{{ filter('C21') }}</strong>
                        </td>
                        <td>
                            <strong>{{ filter('C22') }}</strong>
                        </td>
                        <td>
                            <strong>{{ filter('C23') }}</strong>
                        </td>
                    </tr>
                </thead>
            </table>

            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th><strong>C31</strong></th>
                        <th><strong>C32</strong></th>
                        <th><strong>C33</strong></th>
                    </tr>

                    <tr>
                        <td>
                            <strong>{{ filter('C31') }}</strong>
                        </td>
                        <td>
                            <strong>{{ filter('C32') }}</strong>
                        </td>
                        <td>
                            <strong>{{ filter('C33') }}</strong>
                        </td>
                    </tr>
                </thead>
            </table>

            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th><strong>D11</strong></th>
                        <th><strong>D12</strong></th>
                        <th><strong>D13</strong></th>
                    </tr>

                    <tr>
                        <td>
                            <strong>{{ filter('D11') }}</strong>
                        </td>
                        <td>
                            <strong>{{ filter('D12') }}</strong>
                        </td>
                        <td>
                            <strong>{{ filter('D13') }}</strong>
                        </td>
                    </tr>
                </thead>
            </table>

            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th><strong>D21</strong></th>
                        <th><strong>D22</strong></th>
                        <th><strong>D23</strong></th>
                    </tr>

                    <tr>
                        <td>
                            <strong>{{ filter('D21') }}</strong>
                        </td>
                        <td>
                            <strong>{{ filter('D22') }}</strong>
                        </td>
                        <td>
                            <strong>{{ filter('D23') }}</strong>
                        </td>
                    </tr>
                </thead>
            </table>

            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th><strong>D31</strong></th>
                        <th><strong>D32</strong></th>
                        <th><strong>D33</strong></th>
                    </tr>

                    <tr>
                        <td>
                            <strong>{{ filter('D31') }}</strong>
                        </td>
                        <td>
                            <strong>{{ filter('D32') }}</strong>
                        </td>
                        <td>
                            <strong>{{ filter('D33') }}</strong>
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</template>

<script>
    import Navigation from '../../../components/Panel/partials/Navigation'
    export default {
        props: ['clicks'],

        components: {
            Navigation
        },

        methods: {
            filter (type) {
                return this.clicks.filter(row => row.name === type).length
            },


        },

        computed: {
            filteredClicks () {
                let data = this.clicks

                return [
                    {   'group': 'A',
                        'A1': this.filter('A1'),
                        'A2': this.filter('A2'),
                        'A3': this.filter('A3')
                    },

                    {   'group': 'B',
                        'B1': this.filter('B1'),
                        'B2': this.filter('B2'),
                        'B3': this.filter('B3')
                    },

                    {   'group': 'C1',
                        'C11': this.filter('C11'),
                        'C12': this.filter('C12'),
                        'C13': this.filter('C13')
                    },

                    {   'group': 'C2',
                        'C21': this.filter('C21'),
                        'C22': this.filter('C22'),
                        'C23': this.filter('C23')
                    },

                    {   'group': 'C3',
                        'C31': this.filter('C31'),
                        'C32': this.filter('C32'),
                        'C33': this.filter('C33')
                    },

                    {   'group': 'D1',
                        'D11': this.filter('D11'),
                        'D12': this.filter('D12'),
                        'D13': this.filter('D13')
                    },

                    {   'group': 'D2',
                        'D21': this.filter('D21'),
                        'D22': this.filter('D22'),
                        'D23': this.filter('D23')
                    },

                    {   'group': 'D3',
                        'D31': this.filter('D31'),
                        'D32': this.filter('D32'),
                        'D33': this.filter('D33')
                    }
                ]


            }
        }
    }
</script>
