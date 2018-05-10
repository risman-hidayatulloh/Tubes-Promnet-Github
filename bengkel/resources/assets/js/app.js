//load masing masing library
require('./bootstrap');

window.Vue = require('vue');

window.VueRouter=require('vue-router').default;

window.VueAxios=require('vue-axios').default;

window.Axios=require('axios').default;

let AppLayout=require('./components/App.vue');

//penggilan masing masing template
const List=Vue.component('List',require('./components/List.vue'));


//variabel utnuk penampung dekalrasi
const routes = [
	{
		name : 'List',
		path : '/',
		component : List
	}
]


//registring Modules
Vue.use(VueRouter,VueAxios,axios);

const router = new VueRouter({mode : 'history' , routes : routes});

new Vue(
		Vue.util.extend(
				{router}, AppLayout
			)

	).$mount('#app');