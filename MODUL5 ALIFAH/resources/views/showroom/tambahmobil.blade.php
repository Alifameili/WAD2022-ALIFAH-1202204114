<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Mobil</title>
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

    <!-- Form -->
    <section id='form'>
      <div class="container">
        <h1 class="tambahh1">Tambah Mobil</h1>
        <p class="tambahp">Tambah Mobil Baru Anda Ke List Show Room</p>
        <div class="row">
        <form action="addmobil" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                  <label for="nama_mobil" class="form-label">Nama mobil</label>
                  <input type="text" class="form-control" id="nama_mobil"  name="nama_mobil">
                  </div>
                <div class="mb-3">
                  <label for="pemilik_mobil" class="form-label">Nama pemilik</label>
                  <input type="text" class="form-control" id="pemilik_mobil" name="pemilik_mobil">
                </div>
                <div class="mb-3">
                  <label for="merk_mobil" class="form-label">Merk</label>
                  <input type="text" class="form-control" id="merk_mobil" name="merk_mobil">
                </div>
                <div class="mb-3">
                    <label for="tanggal_beli" class="form-label fw-bold">Tanggal</label>
                    <input type="date" name="tanggal_beli" class="form-control" id="tanggal_beli" required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                </div>
                <div class="mb-3">
                    <label for="foto_mobil" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="formFile" name="foto_mobil">
                </div>
                <div class="mb-3">
                    <label for="status_pembayaran" class="form-label fw-bold">Status Pembayaran</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status_pembayaran" id="flexRadioDefault1" value="Lunas">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Lunas
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="status_pembayaran" id="flexRadioDefault2" checked value="Belum Lunas">
                        <label class="form-check-label" for="flexRadioDefault2">
                          Belum Lunas
                        </label>
                      </div>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary px-4">Submit</button>
        </form>
      </div>
      </div>
    </section>
    <!-- Form End -->
  
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>