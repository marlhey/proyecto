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
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="assets/images/product-01.jpg" alt=""> Camiseta Anime</td>
                                    <td>$20.00</td>
                                    <td><input type="number" value="1" min="1"></td>
                                    <td>$20.00</td>
                                    <td><button class="btn btn-danger">Eliminar</button></td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/product-02.jpg" alt=""> Figura Coleccionable</td>
                                    <td>$50.00</td>
                                    <td><input type="number" value="1" min="1"></td>
                                    <td>$50.00</td>
                                    <td><button class="btn btn-danger">Eliminar</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-total">
                        <h4>Total a pagar: <span>$70.00</span></h4>
                        <a href="checkout.html" class="btn btn-primary">Proceder al Pago</a>
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
    }
}
</script>