require('./bootstrap');

window.Vue = require('vue');

window.VueRouter=require('vue-router').default;

window.VueAxios=require('vue-axios').default;

window.Axios=require('axios').default;

let AppLayout= require('./components/App.vue');

const List = Vue.component('List',require('./components/List.vue'));


//registring Modules
Vue.use(VueRouter,VueAxios,axios);


const example = require('./components/ExampleComponent.vue');
const sample = require('./components/SampleComponent.vue');
//variabel utnuk penampung dekalrasi
const routes = [
	{ name : 'List', path : '/mekanik', component : List },
	{ path: '/example', component: example },
    { path: '/sample', component: sample },
]

const router = new VueRouter({ mode: 'history', routes: routes});


new Vue(
 Vue.util.extend(
 { router },
 //AppLayout
 )
).$mount('#app');

