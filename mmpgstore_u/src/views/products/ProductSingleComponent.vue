<template>


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <HeaderComponent/>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" style="" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Página de Producto</h2>
                        <span>Descubre todos los detalles de este producto</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product" v-if="producto!=null">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <div class="left-images">
                    <img 
                            :src="url+'products/'+producto.img" 
                            class="card-img-top img-fluid" 
                            alt="Producto" 
                            style="height: 400px; max-width: 100%; object-fit: contain;"
                        >
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <h4>{{ producto.name }}</h4>
                    <span class="price">${{ producto.price }}</span>
                    <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>{{ producto.description }}</span>
                    
                    <div class="quantity-content">
                        <div class="left-content">
                            <h6>Cantidad</h6>
                        </div>
                        <div class="right-content">
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus" @click="disminuir()">
                                <input type="number" step="1" min="1" max="" name="quantity" :value="cantidad" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                                <input type="button" value="+" class="plus" @click="aumentar()">
                            </div>
                        </div>
                    </div>
                    <div class="total">
                        <h4>Total: ${{ producto.price * cantidad}}</h4>
                        <div class="main-border-button">
                            <button style="background-color: #800080; color: white; border-color: #800080;" class="btn btn-primary" @click="agregar()">Agregar al Carrito</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- ***** Product Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <div>
      <FooterComponent/>  
    </div>
    

</template>

<script>
import FooterComponent from '@/shared/FooterComponent.vue';
import HeaderComponent from '@/shared/HeaderComponent.vue';

import { useRoute } from 'vue-router'
import axios from 'axios';
export default{
    name:'ProductSingleComponent',
    components:
    {
        FooterComponent,
        HeaderComponent
    
    },
    data:()=>{
        return {
            producto:null,
            id:0,
            loaded:false,
            url:'http://localhost:8000/',
            cantidad: 1,
            carrito: []
        }
    },
    methods:{
        refresh(){
            this.loaded=false
            axios.get('products/'+this.id).then((response)=>{
                console.log("Respuesta desde el backend",response.data)
                this.producto = response.data.data
            }).catch((error)=>{
                console.log("Error",error)
            }).finally(()=>{
                this.loaded=true
            })
            
        },
        aumentar(){
            this.cantidad ++
        },
        disminuir(){
            if(this.cantidad > 1){
            this.cantidad --
            }
        },
        agregar(){
         this.carrito.push({
            id: this.producto.id, 
            name: this.producto.name,
            precio: this.producto.price,
            cantidad: this.cantidad
         }) 
         localStorage.setItem("carrito", JSON.stringify(this.carrito))
         this.$router.push('/carshopping');
        }


    },
    mounted(){
        const route = useRoute()
        this.id = route.params.id
        this.refresh();
        if(localStorage.getItem("carrito")){
                this.carrito = JSON.parse(localStorage.getItem("carrito"))
            }
    },

}
</script>