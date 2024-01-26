        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-2">{{ auth()->user()->name }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="">Dashboard</span></a>
            </li>

            <li class="nav-item {{ Request::is('user*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="">User</span></a>
                    
            </li><li class="nav-item {{ Request::is('item*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('item.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="">Item</span></a>
            </li>
            </li><li class="nav-item {{ Request::is('category*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('category.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="">Category</span></a>
            </li>

            {{-- </li><li class="nav-item {{ Request::is('home*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('home.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="">Home</span></a>
            </li> --}}


            <!-- Nav Item - Tables -->






            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->
