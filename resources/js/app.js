
 require('./bootstrap');

 window.Vue = require('vue');

 import Vuetify from '../plugins/vuetify'

 import VueAxios from 'vue-axios';
 import axios from 'axios';

 
 require('@fortawesome/fontawesome-free/js/all')
 Vue.use(VueAxios,axios);
 Vue.use(Vuetify)
 
 import router from './router'
 import Vue from 'vue';

 
 Vue.component('example-component', require('./components/ExampleComponent.vue').default);
 Vue.component('appdrawer-component', require('./App.vue').default);
 
 

 
 
 const app = new Vue({
     vuetify:Vuetify,
     router,
     el: '#app',
 });