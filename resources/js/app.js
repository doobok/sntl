require('./bootstrap');

require('alpinejs');

// Vue
window.Vue = require('vue').default;

// Components
Vue.component('nav-bar', require('./components/NavBar.vue').default);
Vue.component('nav-menu', require('./components/NavBarMenu.vue').default);
Vue.component('mp-cases', require('./components/MPcases.vue').default);


const app = new Vue({
    el: '#app',
});
