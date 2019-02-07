<template>
    <div>
        <Navigation></Navigation>
    </div>
</template>

<script>
    import Navigation from '../../../components/Panel/partials/Navigation'
    export default {
        props: ['clicks'],

        components: {
            Navigation
        },

        created () {
            console.log(this.clicks);
        },

        methods: {
            filter (type) {
                return this.clicks.filter(row => row.name === type).length
            }
        }
    }
</script>
