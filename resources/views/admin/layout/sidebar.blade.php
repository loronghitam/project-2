<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{url('/dashboard')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('/products')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Product
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('/blogs')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Blog
                </p>
            </a>
        </li>
        <li class="nav-item ">
            <form action="{{ url('/logout') }}" method="POST">
                @csrf
                    <button type="submit" class="btn btn-block btn-danger">Logout</button>
            </form>
        </li>
    </ul>

</nav>
<!-- /.sidebar-menu -->
