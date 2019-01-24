require('./bootstrap');

window.Vue = require('vue');

Vue.component('info-form', require('./pages/Form/InfoForm').default);

const app = new Vue({
    el: '#app',
});
