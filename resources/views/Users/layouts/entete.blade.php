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
    <div class="container-fluid">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom fixed-top bg-light">
          <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
              <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>
          </div>

          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="#" class="nav-link px-2">Features</a></li>
            <li><a href="#" class="nav-link px-2">Pricing</a></li>
            <li><a href="#" class="nav-link px-2">FAQs</a></li>
            <li><a href="#" class="nav-link px-2">About</a></li>
          </ul>

          <div class="col-md-3 text-end me-4">

            <a href="{{ route('connexion') }}" type="button" class="btn btn-outline-primary me-2">Se connecter</a>
            <button type="button" class="btn btn-primary">S'inscrire</button>
            <img src="" alt="">
          </div>
        </header>
      </div>
    <div class="container-fluid">
        @yield('content')
    </div>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
