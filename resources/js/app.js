require('./bootstrap');
import * as Vue from 'vue';
import * as VueRouter from 'vue-router';
import Home from './components/Home';
import routes from './routes';


const router = VueRouter.createRouter({
  history: VueRouter.createWebHistory(),
  routes,
});

Vue.createApp(Home).use(router).mount('#app');