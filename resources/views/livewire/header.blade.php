<div>

 <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="">
                <a href="{{ route('dashboard') }}">
                    <b class=""><img src="" alt=""></b>
                    <span class=""><img src="" alt=""></span>
                    <img src="{{ url('/frontend/logo.jpg') }}" alt="" style="width: 100px; height: 80px; margin-left: 50px;"> <!-- Adjust margin as needed -->
                </a>
            </div>
        </div>
        
        
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                       
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                       
                        
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="{{asset ('images/user/1.png') }}" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                       
                                        
                                        <li><a href="{{ route('logout') }}"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

    </div>