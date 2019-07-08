<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="/css/custom.css">
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
    

    <script src="js/app.js"></script>
    @yield('scripts')
    

</body>
</html>