   <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <br>
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="fa-solid fa-hospital"></i>
                </div>
                <div class="sidebar-brand-text mx-3">San Cristobal <sup>app</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>



            <!-- Divider -->


            <!-- Heading -->

            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">
                <i class="fa-solid fa-house fa-fw"></i>
                    <span>Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('pacientes.index')}}">
                <i class="fas fa-users fa-fw "></i>
                    <span>Pacientes</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('doctores.index')}}">
                <i class="fa-solid fa-user-doctor fa-fw"></i>
                    <span>Doctores</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Configuración
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Administración</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="buttons.html"><i class="fas fa-users fa-fw "></i> Usuarios</a>
                        <a class="collapse-item" href="cards.html"><i class="fas fa-id-card fa-fw "></i> Roles</a>
                        <a class="collapse-item" href="cards.html"><i class="far fa-hand-paper fa-fw "></i> Permisos</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            
        </ul>
        <!-- End of Sidebar -->