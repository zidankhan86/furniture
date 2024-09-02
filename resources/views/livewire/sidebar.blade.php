


 <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    
                    <li class="mega-menu mega-menu-sm">
                        <a href="{{ route('category.list') }}">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Category</span>
                        </a>
                       
                    </li>
                   
                    <li>
                        <a href="{{ route('product.list') }}" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Product</span>
                        </a>
                     
                    </li>
                   
                    <li>
                        <a href="{{ route('order.list') }}" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i> <span class="nav-text">Orders</span>
                        </a>
                      
                    </li>
                   
                    <li>
                        <a href="{{ route('report') }}" aria-expanded="false">
                            <i class="icon-grid menu-icon"></i><span class="nav-text">Report</span>
                        </a>
                     
                    </li>
                    <li>
                        <a href="{{ route('contact.list') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Feedback</span>
                        </a>
                    </li>
                 
                  
                    <li class="nav-label"></li>
                    <li>
                        <a href="{{ route('logout') }}" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Logout</span>
                        </a>
                       
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->