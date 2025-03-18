import {createRouter, createWebHistory} from "vue-router";
//const HomeComponent =
import HomeComponent from "@/views/home/HomeComponent.vue";
import ContactComponent from "@/views/contact/ContactComponent.vue";
import ProductSingleComponent from "@/views/products/ProductSingleComponent.vue";
import ProductComponent from "@/views/products/ProductComponent.vue";
import PaymentComponent from "@/views/payment/PaymentComponent.vue";
import CarShoppingComponent from "@/views/car_shopping/CarShoppingComponent.vue";


const routes= [
    {path:'/',name:"index",component:HomeComponent},
    {path:'/contact',name:"contact",component:ContactComponent},
    {path:'/product/show',name:"product", component: ProductSingleComponent},
    {path:'/product',name:"product_all", component: ProductComponent},
    {path:'/payment',name:"payment", component: PaymentComponent},
    {path:'/carshopping',name:"carshopping", component: CarShoppingComponent},
]

const router = createRouter({
    history: createWebHistory(),
    routes
})
export default router