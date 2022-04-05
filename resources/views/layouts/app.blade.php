
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Photo||Gallery</title>
</head>
<body>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Photo Gallery</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/albums">Albums</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/photos">Photos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/albums/create">Create Albums</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/albums/create">Create Photos</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>

            <main class="py-4">
            <div class="container">
                @include('inc.messages')
                @yield('content')
            </div>
            </main>
        </div>
</body>
</html>
