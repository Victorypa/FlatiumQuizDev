require('./bootstrap');

window.Vue = require('vue');

Vue.component('app-form', require('./pages/Form/Form'));

const app = new Vue({
    el: '#app',
});
