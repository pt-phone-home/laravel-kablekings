<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Gentium+Basic:400,700|PT+Sans:400,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/de93c2514e.js"></script>


    <title>@yield('title')</title>
</head>
<body class="font-body">
    <div class="w-full">
        <div class="container mx-auto flex justify-between items-center my-4 px-2">
            <div>
                <img src="/images/logo.png" alt="" class="h-12 w-auto">
            </div>
            <div>
                <p class="text-gray-800 text-2xl font-display">Website coming soon</p>
            </div>
        </div>
    </div>
    @yield('content')

    <div class="bg-black">
        <div class="container mx-auto flex justify-center items-center">
            <div class="py-16 flex justify-center"> 
                <img src="/images/crown.png" alt="" class="h-32 w-auto">
            </div>
        </div>
        <div class="container mx-auto flex justify-center items-center">
            <div class="flex justify-center text-gray-100"> 
                <p>&copy;<a href="https://www.rocketchipwebsolutions.ie" target="_blank" class="ml-4">Rocket.Chip Web Solutions</a></p>
            </div>
        </div>
       
    </div>
    

    <script src="js/app.js"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    <script> 

        @if(Session::has('success'))
    
        toastr.success("{{Session::get('success')}}")
        @endif
        
        @if(Session::has('info'))
    
        toastr.info("{{Session::get('info')}}")
        @endif
    </script>
    @yield('scripts')
    

</body>
</html>