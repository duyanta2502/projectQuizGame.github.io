import { createRouter, createWebHistory } from 'vue-router';
import Register from '../components/auth/Register.vue'

const routes = [
    {  
        path: '/register', 
        name: 'Register',
        component: Register,
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;