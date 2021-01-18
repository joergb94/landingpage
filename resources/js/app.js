/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./bootstrap-notify');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('main-page-component', require('./components/website/MainPageComponent.vue').default);
Vue.component('about-us-component', require('./components/website/AboutUsComponent.vue').default);
Vue.component('service-component', require('./components/website/ServiceComponent.vue').default);
Vue.component('testimonies-component', require('./components/website/testimonies.vue').default);
Vue.component('career-component', require('./components/website/CareerComponent.vue').default);
Vue.component('main-page', require('./components/main/MainComponent.vue').default);
Vue.component('about-us', require('./components/aboutUs/AboutUsComponent.vue').default);
Vue.component('service', require('./components/service/ServiceComponent.vue').default);
Vue.component('career', require('./components/career/CareerComponent.vue').default);
Vue.component('detail', require('./components/detail/DetailComponent.vue').default);
Vue.component('user-component', require('./components/user/UsersComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data:{
        menu: 0
    }, mounted() {
        
    }   
});
