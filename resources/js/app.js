import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { createApp } from "vue";

import ClientIndex from "./components/ClientIndex.vue";

import router from "./router";

createApp({
    components: {
        ClientIndex
    }
})
.use(router)
.mount('#app');
