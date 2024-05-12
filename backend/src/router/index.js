import Dashboard from "../views/Dashboard.vue"
import Login from "../views/Login.vue"
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
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;
