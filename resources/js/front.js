
require('./bootstrap');

window.Vue = require('vue');

import App from './components/App.vue';
import Vue from 'vue';
Vue.component('App', require('./components/App.vue'));

const root = new Vue({
    el: '#root',
    render: h => h(App)
})