<template>
    <p>working</p>
</template>

<script>
    export default {
        props: ['calculators'],

        created () {
            console.log(this.calculators);
        }
    }
</script>
