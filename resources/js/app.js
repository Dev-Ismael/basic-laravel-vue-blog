

require('./bootstrap');      // use Bootstrap in project form node_modules
window.Vue = require('vue'); // use Vue.js in project form node_modules

// import Vue from 'vue' // use it if not use window.Vue = require('vue'); 
import VueRouter from 'vue-router' // import vue router in project
Vue.use(VueRouter)   // use vue router

import GlobalHome from "./components/GlobalHome.vue";  // import this component
Vue.component('global-home', require('./components/GlobalHome.vue').default);

import routes from "./routes/routes"  // all routes in this file

const router = new VueRouter({  // component whice use as routes
    routes,
    mode: "history"   // to delete #hash from links 
})
  

const app = new Vue({
    el: '#app',
    router ,            // use router const (which as routes)
    components:{          // in this instace register component as normal componant
        GlobalHome ,
    }
});