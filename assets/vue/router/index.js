import { createRouter, createWebHistory } from 'vue-router'

const routes = [
    {
        path: '/',
        name: 'resume',
        component: () => import('../views/resume/ResumeIndex.vue')
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
