import {createRouter, createWebHistory} from "vue-router";

import authLayout from "../auth/layout/layout.vue";
import login from "../auth/pages/login.vue";
import registration from "../auth/pages/registration.vue";
import forgot from "../auth/pages/forgot.vue";
import reset from "../auth/pages/reset.vue";

import portalLayout from "../portal/layout/layout.vue";
import home from "../portal/pages/home.vue";

const logo = window.core.APP_NAME;
const root_url = "/user/";
const routes = [
    {
        path: root_url + 'auth/', name: 'authLayout', component: authLayout,
        children: [
            {path: 'login', name: 'login', component: login, meta: {title: logo + 'login'}},
            {path: 'registration', name: 'registration', component: registration, meta: {title: logo + 'registration'}},
            {path: 'forgot', name: 'forgot', component: forgot, meta: {title: logo + 'forgot'}},
            {path: 'reset', name: 'reset', component: reset, meta: {title: logo + 'reset'}},
        ]
    },
    {
        path: root_url + 'portal/', name: 'portalLayout', component: portalLayout,
        children: [
            {path: 'home', name: 'home', component: home, meta: {title: logo + 'home'}},
        ]
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior(to, from, savedPosition) {
        if (to.hash) {
            return {
                el: to.hash,
                behavior: 'smooth',
            };
        } else {
            return {top: 0, behavior: 'smooth'};
        }
    }
});

// router.beforeEach((to, from, next) => {
//     const isAuthenticated = window.core.user !== null;
//
//     if (to.matched.some(record => record.name === 'authLayout')) {
//         if (isAuthenticated) {
//             // Redirect authenticated users from auth routes to home
//             next({ name: 'post' });
//         } else {
//             next(); // Allow access to auth routes
//         }
//     } else if (to.matched.some(record => record.name === 'portalLayout')) {
//         if (!isAuthenticated) {
//             // Redirect unauthenticated users from profile routes to log in
//             next({ name: 'login' });
//         } else {
//             next(); // Allow access to profile routes
//         }
//     } else {
//         next(); // Allow access to other routes
//     }
// });

export default router;
