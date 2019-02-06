require('./bootstrap');

window.Vue = require('vue');

require('./plugins')

require('./components')

const app = new Vue({
    el: '#app',
});
