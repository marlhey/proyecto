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
                        <h2>Proceso de Pago</h2>
                        <span>Completa tu compra de manera segura</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Payment Section -->
    <section class="section" id="payment">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h4>Detalles de Facturación</h4>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="name">Nombre Completo</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Dirección</label>
                                <input type="text" class="form-control" id="address" required>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <h4>Método de Pago</h4>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="card">Número de Tarjeta</label>
                                <input type="text" class="form-control" id="card" required>
                            </div>
                            <div class="form-group">
                                <label for="expiry">Fecha de Expiración</label>
                                <input type="text" class="form-control" id="expiry" required>
                            </div>
                            <div class="form-group">
                                <label for="cvv">CVV</label>
                                <input type="text" class="form-control" id="cvv" required>
                            </div>
                            <button type="" class="btn btn-primary mt-5">Pagar Ahora</button>
                            <div class="col-6 float-end mt-5" id="btnPaypal"></div>
                        </form>
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
import { loadScript } from '@paypal/paypal-js';
export default{
    name:'PaymentComponent.vue',
    components:
    {
    FooterComponent,
    HeaderComponent
    },
    mounted(){
        this.pagar();
    },
    methods:{
        pagar(){
            loadScript({
                'client-id':'AX5Zh1qw8P9NrHpekjZcErALIKo1JMtY-Pmq3upa3uZ3id3KMcjHbKrxwiRJEMvm8OEdTlxzKaE9ZOw5',
                'currency':'MXN',
            }).then((paypal)=>{
                paypal.Buttons({
                    createOrder:this.createOrder,
                    onApprove:this.onApprove,  
                }).render('#btnPaypal');
            })
        },
        createOrder(data,actions){
            console.log("CREANDO ORDEN",data,actions);
            return actions.order.create({
               purchase_units: [{
                amount: {
                    value:'299.98',
                },
               }],
            }).then(function(orderId){
                console.log("ID DE ORDEN",orderId);
                return orderId;
            });
        },
        onApprove(data,actions){
            console.log("APROBANDO ORDEN",data,actions);
            alert("Pago realizado con exito");
            return actions.order.capture().then(function(details){
                console.log("Detalles de la orden",details);
                alert('Gracias por su compra,' +details.payer.name.given_name);
            });
        },
    }
}
</script>