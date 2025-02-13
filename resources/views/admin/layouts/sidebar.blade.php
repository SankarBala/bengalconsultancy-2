<div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('admin.home') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.client.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Clients
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.client-status.index') }}" class="nav-link">
                    <i class="nav-icon fab fa-gg"></i>
                    <p>
                        Client status
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.country.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-globe"></i>
                    <p>
                        Countries
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.popular.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-bookmark"></i>
                    <p>
                        Popular
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.combo.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-bookmark"></i>
                    <p>
                        Combo Promotions
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.news.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-bookmark"></i>
                    <p>
                        News
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.query') }}" class="nav-link">
                    <i class="nav-icon fas fa-search"></i>
                    <p>
                        Queries
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.contactRequest') }}" class="nav-link">
                    <i class="nav-icon fas fa-address-card"></i>
                    <p>
                        Contact request
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.subscription') }}" class="nav-link">
                    <i class="nav-icon fas fa-envelope-open-text"></i>
                    <p>
                        Subscription
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.export') }}" class="nav-link">
                    <i class="nav-icon fas fa-file-excel"></i>
                    <p>
                        Export
                    </p>
                </a>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
