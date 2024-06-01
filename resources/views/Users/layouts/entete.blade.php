<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-commerce Johanny</title>

    <link href="{{ asset('assets/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid mt-5">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom bg-light fixed-top">
          <div class="col-md-3  ms-3">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
              <img src="{{ asset('assets/images/logo.png') }}" height="50px" width="70px" alt="">
            </a>
          </div>

          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{ route('index') }}" class="nav-link px-2 link-secondary">Accueil</a></li>
            <li><a href="{{ route('suivi-plainte') }}" class="nav-link px-2">Suivi Plainte</a></li>
          </ul>

          <div class="col-md-3 text-end me-3">
            <img src="{{ asset('assets/images/avatar-h.png') }}" height="50px" width="50px" alt="">
          </div>
        </header>
    </div>
    <div class="">
        @yield('content')
    </div>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
