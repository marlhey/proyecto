import {createRouter, createWebHistory} from "vue-router";
//const HomeComponent =
import HomeComponent from "@/views/home/HomeComponent.vue";
import ContactComponent from "@/views/contact/ContactComponent.vue";


const routes= [
    {path:'/',name:"index",component:HomeComponent},
    {path:'/contact',name:"contact",component:ContactComponent}
]

const router = createRouter({
    history: createWebHistory(),
    routes
})
export default router