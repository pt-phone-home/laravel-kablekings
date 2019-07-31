<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125112334-8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125112334-8');
</script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Gentium+Basic:400,700|PT+Sans:400,700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>

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
            <div class="py-16 w-3/5 flex justify-around items-center">
                <a href="https://twitter.com/kablekings?lang=en" target="_blank"><i class="fab fa-twitter text-gray-100 text-3xl"></i></a>
                <img src="/images/crown.png" alt="" class="h-16 w-auto">
                <a href="https://www.instagram.com/kablekings.ie/" target="_blank"><i class="fab fa-instagram text-gray-100 text-3xl"></i></a>
                <a href="https://www.facebook.com/kablekings/" target="_blank"><i class="fab fa-facebook text-gray-100 text-3xl"></i></a>
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
