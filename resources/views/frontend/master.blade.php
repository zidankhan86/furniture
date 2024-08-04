<!DOCTYPE html>
<html lang="en">
    <head>
		@notifyCss
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
		@php
        $title = App\Models\Title::latest()->first();
        @endphp
    	<title>{{optional($title)->title}}</title>
        <link rel="icon" type="image/png" href="frontend/src/images/favicon/favicon-16x16.png" />
        <link rel="stylesheet" href="{{url('frontend/src/lib/css/swiper-bundle.min.css')}}" />
        <link rel="stylesheet" href="{{url('frontend/src/lib/css/bvselect.css')}}" />
        <link rel="stylesheet" href="{{url('frontend/src/lib/css/venobox.css')}}" />
        <link rel="stylesheet" href="{{url('frontend/src/lib/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{url('frontend/src/css/style.css')}}" />
    </head>

    <body>
        

        @include('frontend.components.navLayer')

       

		@yield('content')
		@include('notify::components.notify')


       

		@include('frontend.components.footer')

        

        <script src="{{asset ('frontend/src/lib/js/jquery.min.js') }}"></script>
        <script src="{{asset ('frontend/src/lib/js/jquery.min.js') }}"></script>
        <script src="{{asset ('frontend/src/lib/js/jquery.min.js') }}"></script>
        <script src="{{asset ('frontend/src/lib/js/jquery.min.js') }}"></script>
        <script src="{{asset ('frontend/src/lib/js/jquery.min.js') }}"></script>
        <script src="{{asset ('frontend/src/lib/js/jquery.min.js') }}"></script>
        <script src="{{asset ('frontend/src/lib/js/jquery.min.js') }}"></script>
        <script src="{{asset ('frontend/src/lib/js/jquery.min.js') }}"></script>
        <!-- Purchase Button -->
        @notifyJs
    </body>
</html>
