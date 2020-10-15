<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none">
        <svg class="c-sidebar-brand-full "alt="CoreUI Logo">
            <img class="img-fluid" src="img/siigo_white.png" alt="Responsive image">
        </svg>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-title">Theme</li>
        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle">

            <i class="c-sidebar-nav-icon fas fa-store"></i>
            Sucursal</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('Admin.view_branch')}}"> ver sucursales</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('Admin.create_branch')}}">Agregar sucursales</a></li>
            </ul>
        </li>
        
        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle">

            <i class="c-sidebar-nav-icon fas fa-industry"></i>
            Bodegas</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('Admin.view_store')}}"> Ver bodegas</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('Admin.create_store')}}"> Agregar bodegas</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle">

            <i class="c-sidebar-nav-icon fas fa-boxes"></i>
            productos</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('Admin.view_products')}}"> Productos totales</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('Admin.view_products_store')}}"> Productos por Bodegas</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle">

            <i class="c-sidebar-nav-icon fas fa-address-card"></i>
            Empleados</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('Admin.create_workers')}}">Crear empleados</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('Admin.view_workers')}}">Ver empleados</a></li>


            </ul>
        </li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-unfoldable"></button>
</div>
