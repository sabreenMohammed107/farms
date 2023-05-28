<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>  مزارع جمال جمعة</title>

   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>

   <!-- Fonts -->
   <link rel="dns-prefetch" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

   <!-- Styles -->
   <link href="{{ asset('css/appAr.css') }}" rel="stylesheet">
   <style>
    #containerfooter {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  background-color: #fff;
 }

    </style>
</head>
<body style="direction: rtl;background: #e4f3d2;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">

                   <img alt="Logo" src="{{ asset('img/logo.PNG') }}" class="max-h-50px logo-default "
                    style="height: 120px" />
                </a>
                <div class="row" style="width: 70%">
                    <div class="col-md-8 offset-md-2">
                      <h2 style="color:#02572f ; font-weight: 700">مزارع جمال جمعة</h2>
                    </div>
                  </div>
                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}

                {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">

                    </ul>


                </div> --}}
            </div>
        </nav>

        <main class="py-4" style="background: #e4f3d2;">
            @yield('content')
        </main>

    </div>
    <div id="containerfooter">
        <div class="text-dark order-2 order-md-1" style="margin: auto;padding:20px 0;text-align: center">
            <span class="text-muted fw-bold me-2">2023©</span>
            <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Senior Consulting </a>
        </div>
    </div>
</body>
</html>
