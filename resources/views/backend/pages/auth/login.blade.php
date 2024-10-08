@extends('frontend.master')

  @section('content')

  <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>Login</h2>
                <div class="page_link">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ url('login-frontend') }}">Login</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Login Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .login-container {
            margin-top: 100px;
        }
        .login-form-1 {
            padding: 5%;
            box-shadow: 0px 0px 15px 0px #0000001a;
            border-radius: 10px;
            background: #fff;
        }
        .login-heading {
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 50px;
            padding: 25px;
        }
        .btn-login {
            border-radius: 50px;
            padding: 10px;
            font-weight: bold;
            background: #0062cc;
            color: #fff;
        }
        .btn-login:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container login-container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-form-1">
                    <h3 class="text-center login-heading">Login</h3>
                    <form action="{{route('login.submit')}}" method="post">
                      @csrf
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-login btn-block">Login</button>
                        </div>
                        <div class="form-group text-center">
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><br><br>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection