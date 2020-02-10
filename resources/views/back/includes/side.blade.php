
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-bold text-center">BUNDLE BOOKS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item {{ Request::is('/cms/admins') ? "active" : " " }}">
                    <a href="{{ route('admins.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>
                            Admins
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('/cms/categories') ? "active" : " " }}">
                    <a href="{{ route('categories.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Categories
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('/cms/products') ? "active" : " " }}">
                    <a href="{{ route('products.index') }}" class="nav-link">
                        <i class="nav-icon fab fa-product-hunt"></i>
                        <p>
                            Products
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('/cms/users') ? "active" : " " }}">
                    <a href="{{ route('users.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('/cms/reviews') ? "active" : " " }}">
                    <a href="{{ route('reviews.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>
                            Reviews
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('/cms/orders') ? "active" : " " }}">
                    <a href="{{ route('orders.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Orders
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('/cms/payments') ? "active" : " " }}">
                    <a href="{{ route('payments.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-credit-card"></i>
                        <p>
                            Payments
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
