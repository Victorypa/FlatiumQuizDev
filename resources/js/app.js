require('./bootstrap');

window.Vue = require('vue');

Vue.component('info-form', require('./pages/Form/InfoForm').default);
Vue.component('card', require('./pages/Cards/Card').default);
Vue.component('room', require('./pages/Room/Room').default);
Vue.component('redirect', require('./pages/Redirect/Redirect').default);

const app = new Vue({
    el: '#app',
});
