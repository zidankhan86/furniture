<div>
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">

                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Home</div>

                    <a class="nav-link collapsed" href="" data-bs-toggle="collapse"
                        data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="far fa-list-alt"></i>
                        </div>
                        Categories
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('category.list') }}"> Category</a>
                        </nav>

                    </div>


                    <a class="nav-link collapsed" href="{{ route('product.list') }}"
                        data-bs-target="#collapsePages" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fab fa-product-hunt"></i></div>
                        Product
                    </a>
                   

                    <a class="nav-link" href="{{ route('order.list') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-sort-amount-up-alt"></i></div>
                        Orders
                    </a>
                   

                    <a class="nav-link" href="{{ route('contact.list') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-comment"></i></div>
                        Feedback
                    </a>
                    <a class="nav-link" href="{{ route('report') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-print"></i></div>
                         Report
                    </a>
                    <a class="nav-link" href="{{ route('logo.list') }}">
                        <div class="sb-nav-link-icon"><i class="fab fa-pied-piper-alt"></i></div>
                        Logo
                    </a>
                    <a class="nav-link" href="{{ route('website.form') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-heading"></i></div>
                         WEB TITLE
                    </a>
                   
                    <hr>
                  

                   


                    <a class="nav-link" href="{{ route('logout') }}" style="color: red">
                        <div class="sb-nav-link-icon" style="color: red"><i class="fas fa-sign-out-alt"></i></div>
                        <b>Logout</b>
                    </a>
                </div>
            </div>
         
        </nav>
    </div>

</div>
