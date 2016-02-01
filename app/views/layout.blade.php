<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LaraCMS Authentication</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css') }}" />
    <script src="{{asset('assets/bootstrap/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>

</head>
<body>
<div class="container">


	
	 

    <!-- check for flash notification message -->
    @if(Session::has('flash_notice'))

    <div class="alert alert-success fade in">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('flash_notice') }}
    </div>

    @endif


    @yield('content')
</div>

</body>

</html>