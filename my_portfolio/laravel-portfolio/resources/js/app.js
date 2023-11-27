require('./bootstrap');

import { createApp } from 'vue';
import router from './router.js';
import store from './store.js';
import AppComponent from '../components/AppComponent.vue';

createApp({
	components: {
		AppComponent,
	}
})
	.use(router)
	.use(store)
	.mount('#app');