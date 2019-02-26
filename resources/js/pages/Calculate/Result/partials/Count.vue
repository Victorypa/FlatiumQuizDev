<template>
    <h3>
        {{ filteredCount }}
    </h3>
</template>

<script>
export default {
    props: ['end'],

    data() {
        return {
            count: 0,
            interval: null
        };
    },

    computed: {
        increment() {
            return Math.ceil(this.end / 7);
        },

        filteredCount () {
            return new Intl.NumberFormat('ru-Ru').format(parseInt(this.count))
        }
    },

    mounted() {
        this.interval = setInterval(this.tick, 40);
    },

    methods: {
        tick() {
            if (this.count + this.increment >= this.end) {
                this.count = this.end;

                return clearInterval(this.interval);
            }

            this.count += this.increment;
        }
    }
};
</script>
