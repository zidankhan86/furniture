
<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.fixed.style')

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

       
 <!-- Header -->
 <livewire:header/>


       

<!-- Sidebar -->
<livewire:sidebar/>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            @yield('content')
            @include('sweetalert::alert')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
           <!-- Footer -->
           <livewire:footer/>



    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

   


<!-- Script -->
@include('backend.fixed.script')
</body>

</html>
