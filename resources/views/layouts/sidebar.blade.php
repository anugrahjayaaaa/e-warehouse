<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a wire:navigate href="#" class="brand-link">
        <img src="{{ asset('AdminLTE-3.2.0/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">E-Warehouse</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                
                <li class="nav-item">
                    <a wire:navigate href="#" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-header">SUPER ADMIN</li>

                <li class="nav-item">
                    <a wire:navigate href="{{ route('superadmin.users.index') }}" class="nav-link @yield('menu-superadmin-users')">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a wire:navigate href="{{ route('superadmin.categories.index') }}" class="nav-link @yield('menu-superadmin-categories')">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Categories
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a wire:navigate href="{{ route('superadmin.stocks.index') }}" class="nav-link @yield('menu-superadmin-stocks')">
                        <i class="nav-icon fas fa-warehouse"></i>
                        <p>
                            Stocks
                        </p>
                    </a>
                </li>

                <li class="nav-header">ADMIN</li>

                <li class="nav-item">
                    <a wire:navigate href="{{ route('admin.stocks.index') }}" class="nav-link @yield('menu-admin-stocks')">
                        <i class="nav-icon fas fa-warehouse"></i>
                        <p>
                            Stocks
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
