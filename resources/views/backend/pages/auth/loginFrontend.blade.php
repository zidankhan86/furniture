
<link rel="stylesheet" href="{{asset ('https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{asset ('https://unpkg.com/bs-brain@2.0.3/components/logins/login-6/assets/css/login-6.css') }}">

<!-- Login 6 - Bootstrap Brain Component -->
<section class="bg-primary p-3 p-sm-4 p-xl-3"><br><br>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6 col-lg-6 col-md-7">
        <div class="card border-0 shadow-sm rounded-4">
          @notifyCss

          @yield('login')
          @include('notify::components.notify')

          @notifyJs
        </div>
      </div>
    </div>
  </div><br><br><br><br>
 
</section>

