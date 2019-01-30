require('./bootstrap');

window.Vue = require('vue');

Vue.component('info-form', require('./pages/Form/InfoForm').default);
Vue.component('cards', require('./pages/Cards/Cards').default);
Vue.component('room', require('./pages/Room/Room').default);
Vue.component('redirect', require('./pages/Redirect/Redirect').default);
Vue.component('panel', require('./pages/Panel/Panel').default);


Vue.component('app-header', require('./components/Header/Header').default);

const app = new Vue({
    el: '#app',
});
