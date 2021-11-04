<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sistem Informasi Kelautan</title> 
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
    >
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/features/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/heroes/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/jumbotron/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/footers/">
    <style>
      body{
            background-color: rgb(0, 0, 0);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
        }
        .title{
            text-align: center;
            font-size: 2.5em;
            color: #000;
        }
        .google-maps {
          position: relative;
          padding-bottom: 65%; 
          height: 0;
          overflow: hidden;
      }
      .google-maps iframe {
          position: absolute;
          top: 0;
          left: 0;
          width: 100% !important;
          height: 100% !important;
      }
    </style>
</head>
<body>
  <div class="container-xxl">
    <div class="row">
    </div>
    <div class="row bg-dark">
      <div class="col-6 col-md-4"></div>
      <div class="col-6 col-md-6"><font style="color: white; font-size: 15px;">Universitas Pendidikan Indonesia Kampus Serang</font></div>
      <div class="col-6 col-md-1">
        <form class="d-flex">
        <img src="R.png" alt="" width="30" height="24">
        <select name="bahasa">
          <option selected>IND</option>
          <option value="1">English</option>
          <option value="2">Malay</option>
          <option value="3">China</option>
        </select>
        </form>
      </div>
    </div>
  </div>
  <div class="container-xxl">
    <div class="row bg-light">
      <div class="col-sm-1 col-md-1">
        <a class="navbar-brand" href="https://www.upi.edu/">
          <img src="upilogo.png" alt="" width="74" height="74" class="d-inline-block align-text-top">
        </a>
      </div>
      <div class="col-sm-7">
        <h3>
        <font style="color: black;font-family:'Times New Roman', Times, serif;">
          Sistem Informasi Kelautan
        </font>
        </h3>
        <font style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"></font>
          UPI Kampus Serang
        </font>
      </div>
      <div class="col"></div>
      <div class="col-sm-3">
        <img src="SIK.jpg" class="img-fluid" alt="" >
      </div>
    </div>
  </div>
  <div class="container-xxl bg-dark.bg-gradient">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link"><font style="color: white;">Beranda</font></a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <font style="color: white;">Profile</font></a>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="profile.html">Sejarah</a></li>
            <li><a class="dropdown-item" href="profile.html">Visi dan Misi</a></li>
            <li><a class="dropdown-item" href="profile.html">Struktur Organisasi</a></li>
            <li><a class="dropdown-item" href="struktur.html">Dosen & Staff</a></li>
          </ul>
        </li>
        <li class="nav-item"><a href="akademik.html" class="nav-link"><font style="color: white;">Akademik</font></a></li>
        <li class="nav-item"><a href="akreditasi.html" class="nav-link"><font style="color: white;">Akreditasi</font></a></li>
        <li class="nav-item"><a href="#" class="nav-link"><font style="color: white;">FAG</font></a></li>
      </ul>
    </header>
  </div>
  <div id="carouselExampleCaptions" class="carousel slide " carousel-control-width="50%" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="selamatdatang.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="himataska.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="pmb.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <button type="button" class="btn btn-primary">Info Selengkapnya</button>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <span class="d-block p-2 bg-dark.bg-gradient text-white"></span>
  <div class="container px-4 py-5 bg-light p-5 mb-4 bg-light rounded-3" id="featured-3">
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <a class="navbar-brand" href="">
            <img src="1.png" class="img-fluid" alt="" >
          </a>
        </div>
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <a class="navbar-brand" href="">
          <img src="2.png" class="img-fluid" alt="" >
          </a>
        </div>
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <a class="navbar-brand" href="">
          <img src="3.png" class="img-fluid" alt="" >
          </a>
        </div>
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>
    </div>
  </div>
  <span class="d-block p-2 bg-dark.bg-gradient text-black"></span>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-white text-decoration-none">
        <span class="fs-4">Rilis Berita</span>
      </a>
    </header>
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <div class="row">
        <div class="col">
        <h1 class="display-5 fw-bold">UPI Gelar Workshop Revitalisasi Digital</h1>
        <p class="col-md-8 fs-4">Direktorat Sistem dan Teknologi Informasi (STI) Universitas Pendidikan Indonesia (UPI) menyelenggarakan Workshop Revitalisasi Pembelajaran Digital .</p>
        <button class="btn btn-primary btn-lg" type="button">Selengkapnya</button>
        </div>
        <div class="col">
          <img src="Berita1.jpg" class="img-fluid" alt="...">
        </div>
      </div>
      </div>
    </div>
    <div class="p-5 mb-4 bg-light rounded-3">
    <div class="row">
    <div class="col-md-6 bg-light">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Mahasiswa,Pestasi</strong>
          <h3 class="mb-0">Program Pejuang Muda 2021</h3>
          <div class="mb-1 text-muted">Oktober 26, 2021</div>
          <p class="card-text mb-auto"> Pejuang Muda adalah laboratorium sosial bagi ..</p>
          <a href="#" class="stretched-link">Lanjutkan Membaca ..</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="Berita2.jpg" class="bd-placeholder-img" width="200" height="250" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></svg><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></svg>
        </div>
      </div>
    </div>
    <div class="col-md-6 bg-light">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Dosen Tamu</strong>
          <h3 class="mb-0">Dosen Tamu Oseanografi</h3>
          <div class="mb-1 text-muted">Oktober 16, 2021</div>
          <p class="mb-auto">Dosen yang diundang untuk mengisi ..</p>
          <a href="#" class="stretched-link">Lanjutkan Membaca ..</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="Berita3.jpg" class="bd-placeholder-img" width="200" height="250" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></svg>

        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <span class="d-block p-2 bg-light.bg-gradient text-light"></span>
  <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom text-white">Recognation</h2>
    <div class="row g-3 py-4 row-cols-3 row-cols-lg-4 text-white">
      <div class=" col">
          <a class="navbar-brand" href="https://spot.upi.edu">
          <img src="spot.png" class="img-fluid" alt="" width="160" height="120" >
          </a>
        </div>
      <div class="col">
          <a class="navbar-brand" href="http://humas.upi.edu/">
            <img src="humas.jpg" class="img-fluid" alt="" width="160" height="120" >
            </a>
      </div>
      <div class="col">
          <a class="navbar-brand" href="http://ppid.upi.edu/">
            <img src="ppid.jpg" class="img-fluid" alt="" width="160" height="120" >
            </a>
      </div>
      <div class="col">
        <a class="navbar-brand" href="http://tv.upi.edu/">
          <img src="TVUPI.jpeg" class="img-fluid" alt="" width="160" height="120" >
          </a>
      </div>
      </div>
      <div class="row g-3 py-4 row-cols-3 row-cols-lg-4 text-white">
        <div class=" col">
            <a class="navbar-brand" href="http://lapor.upi.edu/">
            <img src="LAPOR.jpg" class="img-fluid" alt="" width="160" height="120" >
            </a>
          </div>
        <div class="col">
            <a class="navbar-brand" href="http://ult.upi.edu/">
              <img src="ult.jpg" class="img-fluid" alt="" width="160" height="120" >
              </a>
        </div>
      </div>
    </div>
  </div>
  <span class="d-block p-2 bg-light.bg-gradient"></span>
  <div class="container-xxl bg-light">
    <div class="container-lg bg-light">
      <footer class="py-5">
        <div class="row">
          <div class="col-4">
            <h4 class=" text-black">TAUTAN</h4>
            <table align="left">
              <td>
                  <tr>
                    <ul class="nav flex-column">
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">UPI Bandung</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kampus UPI Serang</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kampus UPI Cibiru</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kampus UPI Tasikmalaya</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kampus UPI Purwakarta</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kampus UPI Sumedang</a></li>
                      </ul>
                  </tr>
              </td>
            </table>
          </div> 
          <div class="col-3">
            <h4 class=" text-black">CONTACT US</h4>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Universitas Pendidikan Indonesia Kampus Serang</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Jalan Ciracas 38, Serang </a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">(0254) 2002777</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">sik_kdserang@upi.edu</a></li>
            </ul>
          </div>
    
          <div class="col-4 offset-1">
            <div class="col px-2 py-3">
              <div class="google-maps">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.0370422558185!2d106.14447451430932!3d-6.125717661768984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418adaa4f7f563%3A0x950ec58123df8596!2sUniversitas%20Pendidikan%20Indonesia%20(UPI)%20Kampus%20Serang!5e0!3m2!1sen!2sid!4v1635955511218!5m2!1sen!2sid" width="600" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
        </div>
    
        <div class="d-flex justify-content-between py-1 my-1 border-top">
          <p class="text-center">&copy; 2021 Sistem Informasi Kelautan UPI, Inc. All rights reserved.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
          </ul>
        </div>
      </footer>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    </script>
</body>
</html>

