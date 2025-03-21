<template>
 <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <router-link to="/" class="logo" >
                            <img src="@/template/assets/images/logommpg.jpg" style="width: 100px; height: 100px;">
                        </router-link>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#men">Ropa</a></li>
                            <li class="scroll-to-section"><a href="#women">Calzado</a></li>
                            <li class="scroll-to-section"><a href="#kids">Accesorios</a></li>
                            <li class="scroll-to-section"><a href="#kids">Mangas</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Pages</a>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="products.html">Products</a></li>
                                    <li><a href="single-product.html">Single Product</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </li>
                           
                            <li class="scroll-to-section"><a href="#explore">Explore</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
</template>

<script>
export default{
    name:'HeaderComponent'
}
</script>