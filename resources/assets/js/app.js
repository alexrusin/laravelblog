
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



Vue.component('example', require('./components/Example.vue'));

Vue.component('projects', require('./components/Projects.vue'));


const app = new Vue({
    el: '#app', 

    data: {
    	skills: []
    },

    mounted() {

    	axios.get('/api/skills')
		  .then((response) => {
		  	 this.skills = response.data;
		  })
		  .catch(function (error) {
		    console.log(error);
		  });

    }
});

Vue.component('input-component', require('./components/Input.vue'));
const inp =  new Vue ({
	el: '#inp'
});
