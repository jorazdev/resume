import { createRouter, createWebHistory } from 'vue-router'

const routes = [
    {
        path: '/',
        name: 'home',
        component: () => import('../views/home/HomeIndex.vue')
    },
    {
        path: '/about',
        name: 'about',
        component: () => import('../views/about/AboutIndex.vue')
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router
