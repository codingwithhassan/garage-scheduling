import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import ExampleComponent from './components/dashboard/App.vue';
app.component('dashboard', ExampleComponent);

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

import { createRouter, createWebHistory } from 'vue-router';
import VehiclesIndex from "./components/dashboard/vehicles/VehiclesIndex.vue";
import TimeslotsIndex from "./components/dashboard/timeslots/TimeslotsIndex.vue";
import Home from "./components/dashboard/home/Home.vue";
import BookingsIndex from "./components/dashboard/bookings/BookingsIndex.vue";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/admin/', component: Home },
        { path: '/admin/timeslots', component: TimeslotsIndex },
        { path: '/admin/vehicles', component: VehiclesIndex },
        { path: '/admin/bookings', component: BookingsIndex },
    ],
    linkActiveClass: 'active',
});

app.use(router);
app.provide('axios', axios);

app.mount('#app');
