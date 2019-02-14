// Quiz
Vue.component('info-form', require('./pages/Form/InfoForm').default)
Vue.component('cards', require('./pages/Cards/Cards').default)
Vue.component('room', require('./pages/Room/Room').default)
Vue.component('results', require('./pages/Results/Results').default)

Vue.component('decoration', require('./pages/Calculate/Decoration/Decoration').default)
Vue.component('design-skills', require('./pages/Calculate/Design/DesignSkills').default)
Vue.component('material-category', require('./pages/Calculate/Materials/MaterialCategory').default)
Vue.component('square-count', require('./pages/Calculate/Square/SquareCount').default)
Vue.component('start-date', require('./pages/Calculate/Date/StartDate').default)
Vue.component('calculate-result', require('./pages/Calculate/Result/Result').default)

// Global Partials
Vue.component('app-header', require('./components/Header/Header').default)
Vue.component('app-navigation', require('./pages/Calculate/partials/Navigation').default)
Vue.component('calculate-progressbar', require('./pages/Calculate/partials/ProgressBar').default)

// Panel
Vue.component('panel', require('./pages/Panel/Panel').default)
Vue.component('clicks', require('./pages/Panel/Clicks/Clicks').default)
Vue.component('calculators', require('./pages/Panel/Calculators/Calculators').default)
Vue.component('calculator-prices', require('./pages/Panel/Prices/Prices').default)
