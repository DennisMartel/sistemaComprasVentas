<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <div class="nav-link">
          <div class="profile-image">
            <img src="{{ asset('images/faces/face5.jpg') }}" alt="image"/>
          </div>
          <div class="profile-name">
            <p class="name">
              Bienvenido Dennis
            </p>
            <p class="designation">
              Administrador
            </p>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index-2.html">
          <i class="fa fa-tachometer-alt menu-icon"></i>
          <span class="menu-title">Escritorio</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('categories.index') }}">
          <i class="fa fa-tags menu-icon"></i>
          <span class="menu-title">Categorias</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('providers.index') }}">
          <i class="fa fa-truck menu-icon"></i>
          <span class="menu-title">Proveedores</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('products.index') }}">
          <i class="fa fa-cubes menu-icon"></i>
          <span class="menu-title">Productos</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('clients.index') }}">
          <i class="fa fa-users menu-icon"></i>
          <span class="menu-title">Clientes</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('purchases.index') }}">
          <i class="fa fa-shopping-basket menu-icon"></i>
          <span class="menu-title">Compras</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('sales.index') }}">
          <i class="fa fa-cart-arrow-down menu-icon"></i>
          <span class="menu-title">Ventas</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
          <i class="fab fa-trello menu-icon"></i>
          <span class="menu-title">Page Layouts</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="page-layouts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="pages/layout/boxed-layout.html">Boxed</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/layout/rtl-layout.html">RTL</a></li>
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="pages/layout/horizontal-menu.html">Horizontal Menu</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/documentation.html">
          <i class="far fa-file-alt menu-icon"></i>
          <span class="menu-title">Documentation</span>
        </a>
      </li> --}}
    </ul>
  </nav>