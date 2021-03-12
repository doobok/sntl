require('./bootstrap');

require('alpinejs');

// мультиязычность
import './ml';

// Vue
window.Vue = require('vue').default;

// Components
Vue.component('nav-bar', require('./components/NavBar.vue').default);
Vue.component('mp-cases', require('./components/MPcases.vue').default);


const app = new Vue({
    el: '#app',
});
