require('./bootstrap');
window.Vue = require('vue');

Vue.component('fetchdata', require('./components/fetchdata.vue'));

const app = new Vue({
    el: '#app'
});