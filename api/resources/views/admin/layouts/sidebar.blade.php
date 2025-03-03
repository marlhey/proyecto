<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <link rel="stylesheet" href="{{ asset('logo/styleAside.css')}}" />
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
      <!--begin::Brand Link-->
      <a href="./index.html" class="brand-link">
        <!--begin::Brand Image-->
        <img
          src="{{ asset('logo/logoMMPG.jpg') }}" 
          alt="MMPG Store Logo"
          class="brand-image opacity-75 shadow"
        />
        <!--end::Brand Image-->
        <!--begin::Brand Text-->
        <span class="brand-text fw-light">MMPG Store</span>
        <!--end::Brand Text-->
      </a>
      <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
      <nav class="mt-2">
        <!--begin::Sidebar Menu-->
        <ul
          class="nav sidebar-menu flex-column"
          data-lte-toggle="treeview"
          role="menu"
          data-accordion="false"
        >
          <li class="nav-item">
            <a href="{{url('/admin')}}" class="nav-link">
              <i class="nav-icon bi bi-house-door"></i>
              <p>
                Home
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/admin/categories')}}" class="nav-link">
              <i class="nav-icon bi bi-journal-bookmark-fill"></i>
              <p>
                Categorias
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{url('/admin/products')}}" class="nav-link">
              <i class="nav-icon bi bi-list"></i>
              <p>
                Productos
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/admin/discounts')}}"  class="nav-link">
              <i class="nav-icon bi bi-receipt"></i>
              <p>
                Descuentos
              </p>
            </a>
          </li>

        
          <li class="nav-item">
            <a href="{{url('/admin/payments')}}" class="nav-link">
              <i class="nav-icon bi bi-cash"></i>
              <p>
                Pagos
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/admin/sales')}}" class="nav-link">
              <i class="nav-icon bi bi-bag-fill"></i>
              <p>
                Ventas
              </p>
            </a>
          </li>
        
         <li class="nav-item">
            <a href="{{url('/admin/shipments')}}" class="nav-link">
              <i class="nav-icon bi bi-truck"></i>
              <p>
                Envios
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/admin/customers')}}" class="nav-link">
              <i class="nav-icon bi bi-person-arms-up"></i>
              <p>
                Clientes
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/admin/suppliers')}}" class="nav-link">
              <i class="nav-icon bi bi-person-rolodex"></i>
              <p>
                Proveedores
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/admin/users')}}" class="nav-link">
              <i class="nav-icon bi bi-people-fill"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
    
        </ul>
        <!--end::Sidebar Menu-->
      </nav>
    </div>
    <!--end::Sidebar Wrapper-->
  </aside>