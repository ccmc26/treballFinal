import ResetPassword from "../views/ResetPassword.vue";
import Dashboard from "../views/Dashboard.vue"
import Login from "../views/Login.vue"
import RequestPassword from "../views/RequestPassword.vue";
import {createRouter, createWebHistory} from "vue-router";


const routes = [
    {
        path: '/dashboard',
        name: 'dashboard',
        component: Dashboard
    },
    {
        path: '/login',
        name: 'login',
        component: Login
    },
    {
        path: '/request-password',
        name: 'requestPassword',
        component: RequestPassword,
        meta: {
            requiresGuest: true
        }
    },
    {
        path: '/reset-password/:token',
        name: 'resetPassword',
        component: ResetPassword,
        meta:{
            requiresGuest: true
        }
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;
