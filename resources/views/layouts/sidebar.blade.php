<aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-no-expand">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link bg-primary">
        <img src="{{ asset('dist/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Kinerja Produk</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
            <div class="image">
                {{-- <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image"> --}}
                <img src="{{ asset('dist/img/default-avatar.jpg') }}" class="img-circle elevation-2 img-fluid" alt="User Image">
            </div>
            <div class="info">
                <a class="d-block user-select-none">
                    @if (Auth::check())
                        {{ Auth::user()->name }}
                    @else
                        Nama User
                    @endif
                </a>
                <a class="d-block text-sm user-select-none">
                    @if (Auth::check())
                        {{ Auth::user()->role->name }}
                    @else
                        Role User
                    @endif
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                @if (in_array(Auth::user()->role->name, ['admin', 'superadmin', 'member']))
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link {{ (request()->segment(1) == 'dashboard') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                @endif
                @if (in_array(Auth::user()->role->name, ['superadmin']))
                    <li class="nav-item">
                        <a href="{{ route('super.index') }}" class="nav-link {{ (request()->segment(1) == 'superadmin') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>Super Admin</p>
                        </a>
                    </li>
                @endif
                @if (in_array(Auth::user()->role->name, ['admin', 'superadmin']))
                    <li class="nav-item">
                        <a href="{{ route('admin.index') }}" class="nav-link {{ (request()->segment(1) == 'admin') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>Admin</p>
                        </a>
                    </li>
                @endif
                @if (in_array(Auth::user()->role->name, ['admin', 'superadmin', 'member']))
                    <li class="nav-item">
                        <a href="{{ route('member.index') }}" class="nav-link {{ (request()->segment(1) == 'member') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>Member</p>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>