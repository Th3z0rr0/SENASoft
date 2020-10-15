<header class="c-header c-header-light c-header-fixed">
    <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
            <i class="c-icon c-icon-lg fas fa-bars text-info"></i>
    </button><a class="c-header-brand text-white" href="#"></a>
    <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
        <i class="c-icon c-icon-lg fas fa-bars text-info"></i>
    </button>
    <ul class="c-header-nav d-md-down-none">
    <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="{{route('Admin.index')}}">Inicio</a></li>
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
    </ul>
    <ul class="c-header-nav mfs-auto">
        <li class="c-header-nav-item px-3 c-d-legacy-none">
            <button class="c-class-toggler c-class-toggler c-header-nav-btn" type="button" id="header-tooltip" data-target="body" data-class="c-dark-theme" data-toggle="c-tooltip" data-placement="bottom" title="Toggle Light/Dark Mode">
                    <i class="fas fa-moon"></i>
            </button>
        </li>
    </ul>
    <ul class="c-header-nav">
        <li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="c-icon fas fa-bell"></i>
                    <span class="badge badge-pill badge-danger">5</span></a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                <div class="dropdown-header bg-light"><strong>You have 5 notifications</strong></div><a class="dropdown-item" href="#">
                    <svg class="c-icon mfe-2 text-success">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-follow"></use>
                    </svg> New user registered</a><a class="dropdown-item" href="#">
                    <svg class="c-icon mfe-2 text-danger">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-unfollow"></use>
                    </svg> User deleted</a><a class="dropdown-item" href="#">
                    <svg class="c-icon mfe-2 text-info">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart"></use>
                    </svg> Sales report is ready</a><a class="dropdown-item" href="#">
                    <svg class="c-icon mfe-2 text-success">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-basket"></use>
                    </svg> New client</a><a class="dropdown-item" href="#">
                    <svg class="c-icon mfe-2 text-warning">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                    </svg> Server overloaded</a>
                <div class="dropdown-header bg-light"><strong>Server</strong></div><a class="dropdown-item d-block" href="#">
                    <div class="text-uppercase mb-1"><small><b>CPU Usage</b></small></div><span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</span><small class="text-muted">348 Processes. 1/4 Cores.</small>
                </a><a class="dropdown-item d-block" href="#">
                    <div class="text-uppercase mb-1"><small><b>Memory Usage</b></small></div><span class="progress progress-xs">
<div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
</span><small class="text-muted">11444GB/16384MB</small>
                </a><a class="dropdown-item d-block" href="#">
                    <div class="text-uppercase mb-1"><small><b>SSD 1 Usage</b></small></div><span class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
</span><small class="text-muted">243GB/256GB</small>
                </a>
            </div>
        </li>
        <li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            
            <i class="c-sidebar-nav-icon fas fa-envelope"></i>
            <span class="badge badge-pill badge-info">7</span></a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                <div class="dropdown-header bg-light"><strong>You have 4 messages</strong></div><a class="dropdown-item" href="#">
                    <div class="message">
                        <div class="py-3 mfe-3 float-left">
                            <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                        </div>
                        <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">Just now</small></div>
                        <div class="text-truncate font-weight-bold"><span class="text-danger">!</span> Important message</div>
                        <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                    </div>
                </a><a class="dropdown-item" href="#">
                    <div class="message">
                        <div class="py-3 mfe-3 float-left">
                            <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"><span class="c-avatar-status bg-warning"></span></div>
                        </div>
                        <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">5 minutes ago</small></div>
                        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                        <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                    </div>
                </a><a class="dropdown-item" href="#">
                    <div class="message">
                        <div class="py-3 mfe-3 float-left">
                            <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/5.jpg" alt="user@email.com"><span class="c-avatar-status bg-danger"></span></div>
                        </div>
                        <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                        <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                    </div>
                </a><a class="dropdown-item" href="#">
                    <div class="message">
                        <div class="py-3 mfe-3 float-left">
                            <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"><span class="c-avatar-status bg-info"></span></div>
                        </div>
                        <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">4:03 PM</small></div>
                        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                        <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                    </div>
                </a><a class="dropdown-item text-center border-top" href="#"><strong>View all messages</strong></a>
            </div>
        </li>
        <li class="c-header-nav-item dropdown">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="c-avatar ml-3">
                    <i class="c-sidebar-nav-icon fas fa-address-card"></i>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
                <div class="dropdown-header bg-light py-2"><strong>Account</strong></div><a class="dropdown-item" href="#">
                    <svg class="c-icon mfe-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                    </svg> Perfil<span class="badge badge-info mfs-auto">42</span></a>
                <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div><a class="dropdown-item" href="#">
                    <svg class="c-icon mfe-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                    </svg> Settings</a><a class="dropdown-item" href="#">
                    <svg class="c-icon mfe-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                    </svg> Projects<span class="badge badge-primary mfs-auto">42</span></a>
                    <a class="dropdown-item" href="#"><i class="c-icon mfe-2 fas fa-sign-out-alt"></i>Logout</a> 
            </div>
        </li>
        <button class="c-header-toggler c-class-toggler mfe-md-3" type="button" data-target="#aside" data-class="c-sidebar-show"> 
            <i class="c-sidebar-nav-icon fas fa-ellipsis-v"></i>
        </button>
    </ul>
</header>
