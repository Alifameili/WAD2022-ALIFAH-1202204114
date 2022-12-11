<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME ALIFAH MEILIANA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<nav class="navbar" style="background-color: #e3f2fd;">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 text-secondary">Home</a></li>        
          <li><a href="/showroom" class="nav-link px-2 text-secondary">MyCar</a></li>
          <li><a href="/tambahmobil" class="nav-link px-2 text-secondary justify">Add Car</a></li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li><a href="/login" class="nav-link px-2 text-secondary">Login</a></li>
        </ul>
      </div>
    </div>
</nav>
<body>
    <section id="home">
        <div class="container">
          <div class="d-flex gap-5 bungkus justify-content-center align-items-center">
            <div>
              <h1>Selamat Datang<br /> Di Show Room Alifah</h1>
              <p class="mt-3">Kami hadir untuk membantu melayani jual beli mobil bagus dengan harga yang pasti mahal </p>
              <div class="d-flex align-items-center gap-5 mt-5">
                <img src={{ asset('img\logo-ead.png') }} alt="logoead" style="width:100px;">
                <p style="margin-top: 20px; font-size:14px;">Alifah_1202204114</p>
              </div>
            </div>
            <img src={{ asset('img\mobillucu.png') }} alt="mobil lucu">
          </div>
        </div>
      </section>
</body>