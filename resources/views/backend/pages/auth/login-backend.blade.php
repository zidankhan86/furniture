@extends('backend.pages.auth.loginForm')

@section('loginbackend')
<div class="card shadow-lg border-0 rounded-lg mt-5">
    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
    <div class="card-body">
        <form action="{{route('login.submit')}}" method="post" enctype="multipart/form-data">

            @csrf

            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
           @endif

            <div class="form-floating mb-3">
                <input class="form-control" id="inputEmail" name="email" value="{{old('email')}}" type="email" placeholder="name@example.com" />
                <label for="inputEmail">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="password" id="inputPassword" value="{{old('password')}}" type="password" placeholder="Password" />
                <label for="inputPassword">Password</label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                {{-- <a class="small" href="password.html">Forgot Password?</a> --}}
                <button class="btn btn-primary" style="color:black" type="submit" >Login</button>
            </div>
        </form>
    </div>

    <div class="card-footer  py-3">
        <div class="small text-right" >Click <a href="{{route('home')}}"> here</a> to go  <i class="fa fa-home btn btn-success"></i> </div>
    </div>

</div>

@endsection