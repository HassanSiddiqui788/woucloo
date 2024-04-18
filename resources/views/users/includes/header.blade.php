
  <link href="{{ asset('userassets') }}/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="icon" href="{{ asset('userassets') }}/images/logo1.png" type="image/png" sizes="114*114">
  <link href="{{ asset('userassets') }}/css/custom.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('userassets') }}/css/animate.css" rel="stylesheet" type="text/css">
  <!-- link owl carasoul  -->
  <link href="{{ asset('userassets') }}/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('userassets') }}/css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
  <!-- link slick carasoul  -->
  <link href="{{ asset('userassets') }}/css/slick.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('userassets') }}/css/slick-theme.css" rel="stylesheet" type="text/css">

  <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
</head>

<body>

  <div id="cursor" class="cursor">
    <div class="ring">
      <div><!--Border--></div>
    </div>
    <div class="ring">
      <div><!--Pointer--></div>
    </div>
  </div>



  <div class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="{{ asset('userassets') }}/images/logo.png" class="logo1" alt="img"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{route('index.get')}}">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('message.get')}}">TOP TRADERS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('account.get')}}">PACKAGES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('filter.get')}}">WANT WEAR</a>
            </li>
          </ul>
          <span class="nav_glass">
            <div class="icon-input">
              <input class="icon-input__text-field" placeholder="Search" type="text">
              <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="nav_glass1">
              <i class="fa-regular fa-cart-shopping"></i>
            </div>
            <div class="nav_glass1">
              <i class="fa-regular fa-user"></i>
            </div>
          </span>

        </div>
      </div>
    </nav>
  </div>