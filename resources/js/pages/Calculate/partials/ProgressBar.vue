<template>
    <div class="progress-bar__wrapper">
        <progress-bar bar-color="#aad7ea " :val="volumn"></progress-bar>
    </div>
</template>

<script>
    import ProgressBar from 'vue-simple-progress'

    export default {
        data () {
            return {
                volumn: 10
            }
        },

        components: {
          ProgressBar
        },

        methods: {
            increment (value) {
                this.volumn += value
            }
        }
    }
</script>
