<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body {
            background: #F9F9F9;
            font-family: 'Arial', sans-serif;
        }
        form {
            width: 50%;
            margin: 50px auto;
            background: #FFFFFF;
            padding: 30px 50px;
            text-align: left;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 40px;
        }
        label {
            display: block;
            margin: 20px 0 10px;
            position: relative;
        }
        .label-txt {
            font-size: 1em;
            color: #666;
            transition: ease .3s;
        }
        .input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            transition: ease .3s;
        }
        .input:focus {
            border-color: #333;
        }
        .line-box {
            position: relative;
            height: 2px;
            background: #BCBCBC;
            margin-top: 10px;
        }
        .line {
            position: absolute;
            width: 0%;
            height: 2px;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            background: #8BC34A;
            transition: ease .6s;
        }
        .input:focus + .line-box .line {
            width: 100%;
        }
        .label-active {
            color: #333;
        }
        button {
            width: 100%;
            padding: 15px;
            background: #8BC34A;
            font-weight: bold;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: ease .3s;
        }
        button:hover {
            background: #7AA92A;
        }
        .btn-home {
            background: #333;
            color: white;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <form action="{{route('registration.submit')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <a href="{{ route('home') }}" class="btn btn-home float-right">HOME</a>
        <h1>REGISTER HERE</h1>

        <label>
            <p class="label-txt">ENTER YOUR EMAIL</p>
            <input type="text" class="input" value="{{old('email')}}" name="email">
            <div class="line-box">
                @error('email')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="line"></div>
            </div>
        </label>

        <label>
            <p class="label-txt">ENTER YOUR PHONE</p>
            <input type="text" class="input" value="{{old('phone')}}" name="phone">
            <div class="line-box">
                @error('phone')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="line"></div>
            </div>
        </label>

        <label>
            <p class="label-txt">ENTER YOUR ADDRESS</p>
            <input type="text" class="input" value="{{old('address')}}" name="address">
            <div class="line-box">
                @error('address')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="line"></div>
            </div>
        </label>

        <label>
            <p class="label-txt">ENTER YOUR NAME</p>
            <input type="text" class="input" name="name" value="{{old('name')}}">
            <div class="line-box">
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="line"></div>
            </div>
        </label>

        <label>
            <p class="label-txt">ENTER YOUR PASSWORD</p>
            <input type="password" class="input" value="{{old('password')}}" name="password">
            <div class="line-box">
                @error('password')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="line"></div>
            </div>
        </label>

        <button type="submit" class="btn btn-info">submit</button>
    </form>

    <script>
        $(document).ready(function(){
            $('.input').focus(function(){
                $(this).siblings('.label-txt').addClass('label-active');
            });

            $('.input').focusout(function(){
                if ($(this).val() === '') {
                    $(this).siblings('.label-txt').removeClass('label-active');
                }
            });
        });
    </script>
</body>
</html>
