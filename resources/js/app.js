require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router';
import { routes } from './routes';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes
});

Vue.component('fetchdata', require('../components/fetchdata.vue'));

const app = new Vue({
    el: '#app',
    router: router,
});