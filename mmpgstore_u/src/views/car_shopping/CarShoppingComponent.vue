<template>

 <!-- Header -->
 <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <HeaderComponent/>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Page Heading -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Carrito de Compras</h2>
                        <span>Revisa los productos en tu carrito antes de proceder al pago</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Cart Section -->
    <section class="section" id="cart">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Precio Unitario</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr  v-for="product in productCar" :key="product.id">
                                    <td><img src="assets/images/product-01.jpg" alt=""> {{ product.name }}</td>
                                    <td>{{ product.precio }}</td>
                                    <td><input type="number" :value=" product.cantidad "></td>
                                    <td>{{ product.precio * product.cantidad }}</td>
                                    <td><button class="btn btn-danger" @click="eliminarProducto(index)">Eliminar</button></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-total">
                        <h4>Total a pagar: <span>${{ totalAPagar.toFixed(2) }}</span></h4>
                        <router-link :to="'/payment'" style="background-color: #800080; color: white; border-color: #800080;" class="btn btn-primary">Proceder al Pago</router-link>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
     <div>
    <FooterComponent/>
    </div>
</template>

<script>
import FooterComponent from '@/shared/FooterComponent.vue';
import HeaderComponent from '@/shared/HeaderComponent.vue';
export default{
    name:'CarShoppingComponent',
    components:
    {
        FooterComponent,
        HeaderComponent
    },
    data:()=>{
        return {
            productCar:[]
        }
    },
    mounted(){
        if(localStorage.getItem("carrito")){
                this.productCar = JSON.parse(localStorage.getItem("carrito"))
            }
    },
    computed: {
    totalAPagar() {
        return this.productCar.reduce((total, product) => {
            return total + (product.precio * product.cantidad);
        }, 0);
    }
   },
   methods: {
    eliminarProducto(index) {
        this.productCar.splice(index, 1); // elimina el producto del arreglo
        localStorage.setItem("carrito", JSON.stringify(this.productCar)); // actualiza el localStorage
    }
}
  }

</script>