<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui-pro.svg#full"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui-pro.svg#signet"></use>
        </svg>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-title">Theme</li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{route('Admin.view_branch')}}">
                <i class="c-sidebar-nav-icon fas fa-store"></i>
                Sucursales
            </a>
        </li>
         <li class="c-sidebar-nav-item">
             <a class="c-sidebar-nav-link" href="{{route('Admin.view_store')}}">
                <i class="c-sidebar-nav-icon fas fa-industry"></i>
                Bodegas
                {{-- <span class="badge badge-info">NEW</span> --}}
            </a>
        </li>

        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">

            <i class="c-sidebar-nav-icon fas fa-boxes"></i>
            productos</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('Admin.view_products')}}"> Productos totales</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('Admin.view_products_store')}}"> Productos por Bodegas</a></li>


            </ul>
        </li>


    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-unfoldable"></button>
</div>
