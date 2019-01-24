require('./bootstrap');

window.Vue = require('vue');

Vue.component('info-form', require('./pages/Form/InfoForm').default);
Vue.component('a-card', require('./pages/Cards/ACard').default);

const app = new Vue({
    el: '#app',
});
