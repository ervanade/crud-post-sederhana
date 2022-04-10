<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <span class="brand-text font-weight-light">Aplikasi Post Sederhana</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Welcome, {{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Home
                    </p>
                </a>
            </li>
                <li class="nav-item">
                    <a href="{{ route('myposts') }}" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Postingan Saya
                        </p>
                    </a>
                </li>
                    <li class="nav-item">
                        <a href="{{ route('posts.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                                List Post
                            </p>
                        </a>
                    </li>
               
                @if (auth()->user()->level == "admin")
                <li class="nav-item">
                    <a href="{{ route('usermanajemen') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            User Manajemen
                        </p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
