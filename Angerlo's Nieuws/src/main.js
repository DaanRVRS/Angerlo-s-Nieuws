import './assets/main.css'
import './assets/buttons.css'
import './assets/pages.css'

import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import App from './App.vue'

import angerloHomePage from './components/angerloHomePage.vue'
import angerloLatestNews from './components/angerloLatestNews.vue'
import angerloLatestEditions from './components/angerloLatestEditions.vue'
import contact from './components/angerloContact.vue'

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', component: angerloHomePage },
        { path: '/laatste-nieuws', component: angerloLatestNews },
        { path: '/laatste-edities', component: angerloLatestEditions },
        { path: '/contact', component: contact },
    ]
});

const app = createApp(App);
app.use(router);
app.mount('#app')
