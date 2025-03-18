import { createApp } from 'vue'
import App from './App.vue'

import 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'
import './template/assets/css/font-awesome.css'
import './template/assets/css/templatemo-hexashop.css'
import './template/assets/css/owl-carousel.css'
import './template/assets/css/lightbox.css'
import router from './router'

createApp(App).use(router).mount('#app')
