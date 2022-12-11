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
    <section id="list">
        <div class="container">
          <div>
            <h1>My Show Room</h1>
            <p>List Show Room ALIFAH MEILIANA - 1202204114</p>
            <div class="row g-2">
                @foreach ($car as $item)
                <div class="col-4">
                    <div class="card">
                        <img src="{{ asset($item->foto_mobil) }}" class="card-img-top" alt="uknown">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama_mobil }}</h5>
                            <p class="card-text">{{ $item->deskripsi }}</p>  
                            <div class="d-flex justify-content-start">
                                <div class="row">
                                    <div class="col">
                                        <a href="itemdetail.php?id_mobil=" class="btn btn-primary rounded-4">Detail</a>
                                    </div>
                                    <div class="col">
                                        <a href="/delete/{id}" class="btn btn-danger rounded-4">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        @endforeach
                
          </div>
        </div>
      </section>
</body>