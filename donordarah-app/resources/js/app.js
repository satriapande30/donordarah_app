require('./bootstrap');

window.Vue = require('vue').default;
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import axios from 'axios'
import { routes } from './routes'
import VueSweetalert2 from 'vue-sweetalert2'
//import { vue } from 'laravel-mix'
import VueAxios from 'vue-axios'
import 'sweetalert2/dist/sweetalert2.min.css'

import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue);

Vue.use(VueRouter);
Vue.use(VueSweetalert2);
Vue.use(VueAxios, axios);
Vue.component('pagination', require('laravel-vue-pagination'));

const router = new VueRouter({
    mode: 'history',
    routes
});

const app = new Vue({
    el: '#app',
    router: router,
    render:h => h(App)
});
