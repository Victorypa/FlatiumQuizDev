import { library } from '@fortawesome/fontawesome-svg-core'
import { faCoffee } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import VModal from 'vue-js-modal'

Vue.use(VModal)

library.add(faCoffee)

Vue.component('font-awesome-icon', FontAwesomeIcon)
