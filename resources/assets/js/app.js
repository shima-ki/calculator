import Vue from 'vue'
import VueRouter from 'vue-router'

require('./bootstrap');

Vue.use(VueRouter)

const router = new VueRouter({
	mode: 'history',
	routes: [
		{ path: '/', component: require('./components/calculation.vue') },
	]
})

const app = new Vue({
	router,
    el: '#app'
});
