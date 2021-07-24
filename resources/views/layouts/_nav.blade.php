<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <div class="nav-link">
          <div class="profile-image">
            <img src="https://avatars.githubusercontent.com/u/58192704?s=60&v=4" alt="image"/>
          </div>
          <div class="profile-name">
            <p class="name">
              Bienvenid@ {{ auth()->user()->name }}
            </p>
            <p class="designation text-white">
              {{ auth()->user()->roles()->pluck('name')->implode('') }}
            </p>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
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
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#usuarios" aria-expanded="false" aria-controls="usuarios">
          <i class="fa fa-users menu-icon"></i>
          <span class="menu-title">Usuarios</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="usuarios">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">Usuarios</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('roles.index') }}">Roles</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('permissions.index') }}">Permisos</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#reportes" aria-expanded="false" aria-controls="reportes">
          <i class="fa fa-file-alt menu-icon"></i>
          <span class="menu-title">Reportes</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="reportes">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('reports.day') }}">Reporte por dia</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('reports.date') }}">Reporte por fecha</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#configuraciones" aria-expanded="false" aria-controls="configuraciones">
          <i class="fa fa-cog menu-icon"></i>
          <span class="menu-title">Configuraciones</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="configuraciones">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('business.index') }}">Empresa</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('printers.index') }}">Impresora</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>