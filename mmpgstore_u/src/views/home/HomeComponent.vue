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
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>¿Quienes Somos?</h4>
                                <span>Tú tienda en linea &amp; Favorita</span>
                                <div class="main-border-button">
                                    <a href="#">Ver más</a>
                                </div>
                            </div>
                            <img src="@/template/assets/images/quienes_somos.png" style="height: 715px;" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Mangas</h4>
                                            <span>Las mejores historias del anime</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Mangas</h4>
                                                <p>Explora el mundo de tus personajes favoritos</p>
                                                <div class="main-border-button">
                                                    <a href="#">Descubrir más </a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="@/template/assets/images/manga2.webp" style="height: 350px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Ropa</h4>
                                            <span>Encuentra el outfit perfecto para reflejar tu personalidad</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Ropa</h4>
                                                <p>La mejor calidad en las prendas </p>
                                                <div class="main-border-button">
                                                    <a href="#">Descubrir más</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="@/template/assets/images/camisa.jpeg" style="height: 350px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Accesorios</h4>
                                            <span>Agrega estilo a tus looks</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Accesorios</h4>
                                                <p>Eleva tu look con los mejores accesorios</p>
                                                <div class="main-border-button">
                                                    <a href="#">Descubrir más</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="@/template/assets/images/mochila.jpeg" style="height: 350px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Calzado</h4>
                                            <span>El calzado perfecto para cada ocasión</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Calzado</h4>
                                                <p>Encuentra gran variedad de calzados que se ajusten a tu estilo</p>
                                                <div class="main-border-button">
                                                    <a href="#">Descrubrir más</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="@/template/assets/images/calzado.avif" style="height: 350px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

      
    <!-- ***** Ropa Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Lo Último En Ropa</h2>
                        <span>Moda inspirada en anime, ropa temática y complementos.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-3 d-flex" v-for="ropa in ropas" :key="ropa.id">
                    <div class="card flex-fill" style="width: 100%;">
                        <img 
                            :src="url+'products/'+ropa.img" 
                            class="card-img-top img-fluid" 
                            alt="Categorias" 
                            style="height: 200px; object-fit: cover;"
                        >
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ ropa.name }}</h5>
                            <p class="card-text">{{ ropa.description }}</p>

                            <!-- Contenedor de estrellas y precio -->
                            <div class="stars-price-container">
                                <ul class="stars" style="display: flex; justify-content: center;">
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="price">${{ ropa.price }}</span>
                            </div>

                            <router-link :to="'/product/show/'+ropa.id" style="background-color: #800080; color: white; border-color: #800080;" class="btn btn-primary">Ver más</router-link>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ***** Accesorios Area Ends ***** -->

  
    <!-- ***** Mangas Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Últimos Mangas</h2>
                        <span>Historias originales en formato impreso.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-3 d-flex" v-for="manga in mangas" :key="manga.id">
                    <div class="card flex-fill" style="width: 100%;">
                        <img 
                            :src="url+'products/'+manga.img" 
                            class="card-img-top img-fluid" 
                            alt="Categorias" 
                            style="height: 200px; object-fit: cover;"
                        >
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ manga.name }}</h5>
                            <p class="card-text">{{ manga.description }}</p>

                            <!-- Contenedor de estrellas y precio -->
                            <div class="stars-price-container">
                                <ul class="stars" style="display: flex; justify-content: center;">
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="price">${{ manga.price }}</span>
                            </div>

                            <router-link :to="'/product/show/'+manga.id" style="background-color: #800080; color: white; border-color: #800080;" class="btn btn-primary">Ver más</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Mangas Area Ends ***** -->

    
    <!-- ***** Accesorios Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Últimos Accesorios</h2>
                        <span>Completa tu estilo con lo mejor de tus articulos favoritos </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-3 d-flex" v-for="accesorio in accesorios" :key="accesorio.id">
                    <div class="card flex-fill" style="width: 100%;">
                        <img 
                            :src="url+'products/'+accesorio.img" 
                            class="card-img-top img-fluid" 
                            alt="Categorias" 
                            style="height: 200px; object-fit: cover;"
                        >
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ accesorio.name }}</h5>
                            <p class="card-text">Descripción de la categoria</p>

                            <!-- Contenedor de estrellas y precio -->
                            <div class="stars-price-container">
                                <ul class="stars" style="display: flex; justify-content: center;">
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="price">${{ accesorio.price }}</span>
                            </div>

                            <router-link :to="'/product/show/'+accesorio.id" style="background-color: #800080; color: white; border-color: #800080;" class="btn btn-primary">Ver más</router-link>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ***** Accesorios Area Ends ***** -->

    <!-- ***** Calzados Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Últimos Calzados</h2>
                        <span>Crea el mejor conjunto que te acompañe en tu día a día</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-3 d-flex" v-for="calzado in calzados" :key="calzado.id">
                    <div class="card flex-fill" style="width: 100%;">
                        <img 
                            :src="url+'products/'+calzado.img" 
                            class="card-img-top img-fluid" 
                            alt="Categorias" 
                            style="height: 200px; object-fit: cover;"
                        >
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ calzado.name }}</h5>
                            <p class="card-text">{{ calzado.description }}</p>

                            <!-- Contenedor de estrellas y precio -->
                            <div class="stars-price-container">
                                <ul class="stars" style="display: flex; justify-content: center;">
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="price">${{ calzado.price }}</span>
                            </div>

                            <router-link :to="'/product/show/'+calzado.id" style="background-color: #800080; color: white; border-color: #800080;" class="btn btn-primary">Ver más</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Calzado Area Ends ***** -->

    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Últimos Productos</h2>
                        <span>Productos más recientes en la tienda</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-3 d-flex" v-for="product in ultimos" :key="product.id">
                    <div class="card flex-fill" style="width: 100%;">
                        <img 
                            :src="url+'products/'+product.img" 
                            class="card-img-top img-fluid" 
                            alt="Producto" 
                            style="height: 200px; object-fit: cover;"
                        >
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ product.name }}</h5>
                            <p class="card-text">{{ product.description }}</p>

                            <!-- Contenedor de estrellas y precio -->
                            <div class="stars-price-container">
                                <ul class="stars" style="display: flex; justify-content: center;">
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                    <li style="display: inline-block; margin: 0 3px;"><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="price">${{ product.price }}</span>
                            </div>

                            <router-link :to="'/product/show/'+product.id" style="background-color: #800080; color: white; border-color: #800080;" class="btn btn-primary">Ver más</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->

    <!-- ***** Explore Area Starts ***** -->
    <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h2>Explore Our Products</h2>
                        <span>You are allowed to use this HexaShop HTML CSS template. You can feel free to modify or edit this layout. You can convert this template as any kind of ecommerce CMS theme as you wish.</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i><p>You are not allowed to redistribute this template ZIP file on any other website.</p>
                        </div>
                        <p>There are 5 pages included in this HexaShop Template and we are providing it to you for absolutely free of charge at our TemplateMo website. There are web development costs for us.</p>
                        <p>If this template is beneficial for your website or business, please kindly <a rel="nofollow" href="https://paypal.me/templatemo" target="_blank">support us</a> a little via PayPal. Please also tell your friends about our great website. Thank you.</p>
                        <div class="main-border-button">
                            <a href="products.html">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="leather">
                                    <h4>Leather Bags</h4>
                                    <span>Latest Collection</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="first-image">
                                    <img src="assets/images/explore-image-01.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="second-image">
                                    <img src="assets/images/explore-image-02.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="types">
                                    <h4>Different Types</h4>
                                    <span>Over 304 Products</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Explore Area Ends ***** -->

    <!-- ***** Social Area Starts ***** -->
    <section class="section" id="social">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Social Media</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row images">
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Fashion</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-01.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>New</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-02.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Brand</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-03.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Makeup</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-04.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Leather</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-05.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Bag</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-06.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Social Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Your Name" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-2">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                            </fieldset>
                          </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li>Store Location:<br><span>Sunny Isles Beach, FL 33160, United States</span></li>
                                <li>Phone:<br><span>010-020-0340</span></li>
                                <li>Office Location:<br><span>North Miami Beach</span></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
                                <li>Email:<br><span>info@company.com</span></li>
                                <li>Social Media:<br><span><a href="#">Facebook</a>, <a href="#">Instagram</a>, <a href="#">Behance</a>, <a href="#">Linkedin</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->
    
   
    <div>
    <!-- Contenido de tu componente -->
    <FooterComponent />
  </div>


</template>

<script>
import HeaderComponent from '@/shared/HeaderComponent.vue';
import FooterComponent from '@/shared/FooterComponent.vue';
import axios from 'axios';

export default{
    name: 'HomeComponent',
    components:{
        HeaderComponent,
        FooterComponent
    },
    data:()=>{
        return {
            ultimos:[],
            mangas:[],
            accesorios:[],
            calzados:[],
            ropas:[],
            categorias:[],
            loaded:false,
            url:'http://localhost:8000/'
        }
    },
    methods:{
        refresh(){
            this.loaded=false
            axios.get('index').then((response)=>{
                console.log("Respuesta desde el backend",response.data)
                this.ultimos=response.data.ultimos
                this.mangas=response.data.mangas
                this.accesorios=response.data.accesorios
                this.calzados=response.data.calzados
                this.ropas=response.data.ropas
                this.categorias=response.data.categorias
            }).catch((error)=>{
                console.log("Error",error)
            }).finally(()=>{
                this.loaded=true
            })
            
        }
    },
    mounted(){
        this.refresh();
    },
}
</script>