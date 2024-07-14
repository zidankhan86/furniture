@extends('backend.pages.auth.loginFrontend')

@section('login')

<br><br><br><div class="card-body p-3 p-sm-4 p-xl-3">
    <div class="row">
      <div class="col-12">
        <div class="mb-4">
          <h3 class="fw-bold">Log in</h3>
        </div>
      </div>
    </div>
    <form action="{{route('login.submit')}}" method="post">
    @csrf
      <div class="row gy-3 overflow-hidden">
        <div class="col-12">
          <div class="form-floating mb-3">
             <input type="text" class="form-control" name="email" placeholder="Your Email" required="required">
            <label for="email" class="form-label">Email</label>
          </div>
        </div>
        <div class="col-12">
          <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            <label for="password" class="form-label">Password</label>
          </div>
        </div>
        
        <div class="col-12">
          <div class="d-grid">
            <button style="color: rgb(9, 9, 15)" class="btn btn-info" type="submit">Log in now</button>
          </div>
        </div>
      </div>
    </form>
    <div class="row">
      <div class="col-12">
        <hr class="mt-4 mb-3 border-secondary-subtle">
        <div class="d-flex gap-3 gap-md-4 flex-column flex-md-row justify-content-md-end">
          <a href="{{ route('registration') }}" class="link-secondary text-decoration-none">Create new account</a>
          <a href="{{route('password.request')}}" class="link-secondary text-decoration-none">Forgot password</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="mt-4 mb-3">Click <a href="{{ route('home') }}" style="color: blue">here</a> to go home</p>
        <div class="d-flex gap-3 flex-column">
        
        
         
        </div>
      </div>
    </div>
  </div>

@endsection