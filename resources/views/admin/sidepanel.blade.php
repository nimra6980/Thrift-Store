
        
        <!-- start section sidebar -->
        <aside class="left-panel nicescroll-box">
            <nav class="navigation">
                <ul class="list-unstyled main-menu">
                    <li class="has-submenu active">
                        <a href="{{route ('dashboard')}}">
                            <i class="fas fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript:void()" class="has-arrow mm-collapsed">
                            <i class="fa fa-table"></i>
                            <span class="nav-label">Category</span>
                            <span class="badge bg-danger rounded-pill ms-2">New</span>
                        </a>
                        <ul class="list-unstyled mm-collapse">
                            <li><a href="{{route ('view_category')}}">View Category</a></li>
                        
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript:void()" class="has-arrow mm-collapsed">
                            <i class="fa fa-table"></i>
                            <span class="nav-label">Product</span>
                            
                        </a>
                        <ul class="list-unstyled mm-collapse">
                            <li><a href="{{route ('view_product')}}">View Product</a></li>
                            <li><a href="{{route('add_product')}}">Add Product</a></li>
                        </ul>
                    </li>
            
                    <li class="has-submenu">
                        <a href="{{route('order')}}">
                            <i class="fas fa-calendar-plus"></i>
                            <span class="nav-label">order</span>
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{route('deliverd_show')}}">
                            <i class="fas fa-calendar-plus"></i>
                            <span class="nav-label">Deliverd Orders</span>
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{route('cancelorders')}}">
                            <i class="fas fa-calendar-plus"></i>
                            <span class="nav-label">Cancelled Orders</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="sidebar-widgets">
          
                <div class="copyright text-center">
                    <p class="mb-0"> Hexashop Admin Dashboard</p>
                    <p class="mb-0"> © 2023 </p>
                </div>
            </div>
        </aside>
        <!-- End section sidebar -->