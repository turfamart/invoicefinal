import { createRouter, CreateWebHistory } from 'vue-router';

import invoiceIndex from '../components/invoices/index.vue'

import notFound from '../components/NotFound.vue'
import Components from 'laravel-mix/src/components/Components';

const routes = [
    {
        path:'/',
        Component:invoiceIndex
    },
    {
        path:'/:pathMatch(.*)*',
        Component:notFound
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router