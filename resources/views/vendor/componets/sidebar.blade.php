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
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="index.html">

                <i class="c-sidebar-nav-icon fas fa-desktop"></i>
                Dashboard<span class="badge badge-info">NEW</span></a></li>

        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('landing.generarventas')}}">

            <i class="c-sidebar-nav-icon fas fa-wine-bottle"></i>
             
             Generar Ventas <span class="badge badge-info"></span></a></li>
             <li class="c-sidebar-nav-item t"><a class="c-sidebar-nav-link" href="{{ route('landing.generarfactura')}}">
             <i class="c-sidebar-nav-icon fas fa-print"></i>
             Consultar Facturas <span class="badge badge-info"></span></a></li>
             <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="">
             <i class="c-sidebar-nav-icon fas fa-boottle fas fa-crutch"></i>
             Consultar Productos <span class="badge badge-info"></span></a></li>


        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                </svg> Base</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/breadcrumb.html"> Breadcrumb</a></li>

            </ul>
        </li>


    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-unfoldable"></button>
</div>
