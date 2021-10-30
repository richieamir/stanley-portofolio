
import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './pages/Home.vue';
import About from './pages/About.vue';
import Works from './pages/Works.vue';
import Contact from './pages/Contact.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path:'/works',
            name:'works',
            component:Works
        },
        {
            path:'/contact',
            name:'contact',
            component:Contact
        }
    ]
});

export default router;