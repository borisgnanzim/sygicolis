import {createRouter, createWebHistory } from "vue-router" ;

import ClientIndex from "../components/ClientIndex.vue" ;
const routes= [
    {
        path: '/dashbord',
        name: 'clients.index',
        component: ClientIndex
    }
];

export default createRouter({
    history:createWebHistory(),
    routes
});