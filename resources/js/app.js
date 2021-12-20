require('./bootstrap');

import Vue from 'vue'

import app from './Vue/app'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faPlusSquare, faTrash } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faPlusSquare, faTrash)

Vue.component('font-awesome-icon', FontAwesomeIcon)

const vue = new Vue({
    el: "#app",
    components: {app}
})
