import { createApp } from 'vue'
import App from './App.vue'

import 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'
import './template/assets/css/font-awesome.css'
import './template/assets/css/templatemo-hexashop.css'
import './template/assets/css/owl-carousel.css'
import './template/assets/css/lightbox.css'
import 'sweetalert2/dist/sweetalert2.min.css'
import router from './router'
import axios from 'axios' 
axios.defaults.baseURL = 'http://localhost:8000/api/'

createApp(App).use(router).mount('#app')
