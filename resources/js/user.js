/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./components/User/', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import {
    Button,
    HasError,
    AlertError,
    AlertErrors,
    AlertSuccess
} from 'vform/src/components/bootstrap4'

Vue.component(Button.name, Button)
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
Vue.component(AlertErrors.name, AlertErrors)
Vue.component(AlertSuccess.name, AlertSuccess)

import VModal from 'vue-js-modal'
Vue.use(VModal, {
    dialog: true
})

import Vue2Filters from 'vue2-filters'
Vue.use(Vue2Filters)

import {
    loadProgressBar
} from 'x-axios-progress-bar'
loadProgressBar()
import 'x-axios-progress-bar/dist/nprogress.css'

import Loading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/vue-loading.css';
Vue.use(Loading, {
    loader: 'bars',
});

import VueToast from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-sugar.css';
Vue.use(VueToast, {
    position: 'top'
});


// import HighchartsVue from 'highcharts-vue'
// Vue.use(HighchartsVue)

Vue.directive('uppercase', {
    update(el) {
        const sourceValue = el.value;
        const newValue = sourceValue.toUpperCase();

        if (sourceValue !== newValue) {
            el.value = newValue;
            el.dispatchEvent(new Event('input', {
                bubbles: true
            }));
        }
    },
});

import moment from 'moment'

Vue.filter('formatDate', function (value) {
    if (value) {
        return moment(String(value)).format('Do MMM YYYY')
    }
});


import VueClipboard from 'vue-clipboard2'
Vue.use(VueClipboard)

import VueQrcode from '@chenfengyuan/vue-qrcode';
Vue.component(VueQrcode.name, VueQrcode);

import VueCountdown from '@chenfengyuan/vue-countdown';
Vue.component(VueCountdown.name, VueCountdown);

Vue.filter('simple_date', function (value) {
    if (value) {
        return moment(String(value)).format('MMM Do YYYY')
    }
});


import route from 'ziggy';
import {
    Ziggy
} from './ziggy';

Vue.mixin({
    methods: {
        route: (name, params, absolute) => route(name, params, absolute, Ziggy),
    },
});

const app = new Vue({
    el: '#app',
});
