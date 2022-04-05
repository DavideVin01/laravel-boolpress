
require('./bootstrap');

window.Vue = require('vue');
axios = require('axios');

import router from './routes.js'
import App from './components/App.vue';
import Vue from 'vue';

const root = new Vue({
    el: '#root',
    router,
    render: h => h(App)
})