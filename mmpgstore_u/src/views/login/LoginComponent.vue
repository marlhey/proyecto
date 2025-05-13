<template>

<link rel="stylesheet" href="{{ asset('dashboard/css/adminlte.css')}}" />
<link rel="stylesheet" href="{{ asset('logovue/styles.css')}}" />

  <body class="login-page bg-body-secondary py-5">
    <div class="d-flex justify-content-center">
      <div class="card card-outline card-primary">
        <div class="card-header">
          <a
            href="#"
            class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover"
          >
            <img src="/logovue/logoMMPG.jpg" alt="Logo" style="width: 80%; height: 80%; display: block; margin: auto; margin-top: 10%;" />
          </a>
        </div>
        <div class="card-body login-card-body">
          <p class="login-box-msg">Iniciar sesión</p>
          <form @submit.prevent="login">
            <div class="input-group mb-1">
              <div class="form-floating">
                <input
                  id="loginEmail"
                  type="email"
                  class="form-control"
                  v-model="email"
                  placeholder="Email"
                  required
                />
                <label for="loginEmail">Email</label>
              </div>
              <div class="input-group-text">
                <span class="bi bi-envelope"></span>
              </div>
            </div>
            <div class="input-group mb-1">
              <div class="form-floating">
                <input
                  id="loginPassword"
                  type="password"
                  class="form-control"
                  v-model="password"
                  placeholder="Password"
                  required
                />
                <label for="loginPassword">Password</label>
              </div>
              <div class="input-group-text">
                <span class="bi bi-lock-fill"></span>
              </div>
            </div>
            <div class="row">
              <div class="col-8 d-inline-flex align-items-center">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember" />
                  <label class="form-check-label" for="remember"> Remember Me </label>
                </div>
              </div>
              <div class="col-4">
                <div class="d-grid gap-2">
                  <button type="button" @click="login()" class="btn btn-primary">Login</button>
                </div>
              </div>
            </div>
          </form>

          <div v-if="error" class="text-danger text-center mt-3">{{ error }}</div>

          <div class="social-auth-links text-center mb-3 d-grid gap-2">
            <p>- OR -</p>
            <a href="#" class="btn btn-primary">
              <i class="bi bi-facebook me-2"></i> Iniciar sesión con Facebook
            </a>
            <a href="#" class="btn btn-danger">
              <i class="bi bi-google me-2"></i> Iniciar sesión con Google+
            </a>
          </div>

          <p class="mb-1">
            <a href="forgot-password.html">Olvidé mi contraseña</a>
          </p>
          <p class="mb-0">
            <a href="/register" class="text-center"> Registrarme </a>
          </p>
        </div>
      </div>
    </div>
  </body>
</template>

<script>

import axios from 'axios';
 export default{
    name:'LoginComponent',
    data(){
        return{
            email:'',
            password:'',
            errorMessage:'',
        }
    },
    methods:{
        login(){
            axios.post('login', {
                email: this.email,
                password: this.password
            }).then(response => {
                console.log('Inicio de Seión exitoso', response.data);
                localStorage.setItem('token', response.data.token);
                localStorage.setItem('user', JSON.stringify(response.data.user));
                this.$router.push('/');
              
            }).catch(error => {
                // Manejar el error
                console.error(error);
                alert("Credenciales incorrectas");
                
            });
            
        }
    }
 }
</script>
