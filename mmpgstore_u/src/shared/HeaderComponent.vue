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
                           
                            <li>
                            <!-- Usuario logueado -->
                                <div v-if="user != null" class="d-flex align-items-center">
                                    <router-link to="/profile" class="text-uppercase mx-2">
                                    <div class="user-profile d-flex align-items-center">
                                        <img
                                        :src="url + 'users/' + user.img_profile"
                                        alt="Foto de perfil"
                                        class="rounded-circle"
                                        style="width: 40px; height: 40px; object-fit: cover; margin-right: 10px;"
                                        />
                                        <span class="text-dark">{{ user.name }}</span>
                                    </div>
                                    </router-link>
                                    <button @click="logout" class="btn btn-outline-primary btn-sm mx-2">
                                    Cerrar sesión
                                    </button>
                                </div>

                                <!-- Usuario no logueado -->
                                <router-link to="/login" class="text-uppercase mx-3" v-else>
                                    <div class="user-profile d-flex align-items-center ms-auto pe-3">
                                    <span class="text-dark fw-bold">Iniciar Sesión</span>
                                    </div>
                                </router-link>
                            </li>
                        </ul> 
                        
                          

                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
</template>

<script>
import Swal from 'sweetalert2';

export default {
  name: 'HeaderComponent',
  data() {
    return {
      user: null,
      url: 'http://localhost:8000/',
    }
  },
  mounted() {
    const storedUser = localStorage.getItem('user')
    if (storedUser) {
      this.user = JSON.parse(storedUser)
    }
  },
  methods: {
    logout() {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡Quieres cerrar sesión!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, cerrar sesión'
        }).then((result) => {
            if (result.isConfirmed) {
            localStorage.removeItem('token');
            localStorage.removeItem('user');
            this.user = null;
            this.$router.push('/');
            Swal.fire(
                '¡Cerraste sesión!',
                'Has cerrado sesión correctamente.',
                'success'
            )
            }
        })
      
    }
  }
}
</script>
