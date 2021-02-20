require('./bootstrap');

require('alpinejs');

// Vue
window.Vue = require('vue').default;

// Components
Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
});
