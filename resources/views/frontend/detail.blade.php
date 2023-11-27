<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="body">
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light fs-5 shadow p-3 bg-body z-10">
        <div class="container">
            <img src="{{asset('images/logoVizthaGo.svg')}}" alt="..." class="shadow rounded-pill">
            <a class="navbar-brand ms-2" href="#">ViztaGo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#caroseul" tabindex="-1" aria-disabled="true">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#caroseul" tabindex="-1" aria-disabled="true">Go Explore</a>
                    </li>
                </ul>
                <a href="" type="button" class="btn1 btn-primary btn-sm me-2 shadow" style="text-decoration: none; color: #112F65;">Sign In</a>
                <a href="login" type="button" class="btn2 btn-secondary btn-sm shadow" style="color:white; text-decoration: none;">Login</a>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    {{-- Hero Section Start --}}
    <section id="detail">
        <div class="container">
            <div class="row justify-content-between">
                <img src="{{asset('images/burung.jpg')}}" class="col-6" alt="..." style="max-width: 500px; margin-top: 110px; margin-left: 60px">
                <div class="row col-6 me-5 g-4" style="margin-top: 110px;">
                    <img src="{{asset('images/burung.jpg')}}" class="col-6 mt-0" alt="..." style="max-width:500px;">
                    <img src="{{asset('images/burung.jpg')}}" class="col-6 mt-0" alt="..." style="max-width:500px;">
                    <img src="{{asset('images/burung.jpg')}}" class="col-6" alt="..." style="max-width:500px;">
                    <img src="{{asset('images/burung.jpg')}}" class="col-6" alt="..." style="max-width:500px;">
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Section End --}}

    {{-- Detail Deskripsi Start --}}
    <section id="detail-deskripsi">
        <div class="container" style="margin-top: 100px;">
            <h2 class="fw-bold fs-2">Jatim Park</h2>
            <div class="row justify-content-between">
                <h2 class="col-8">Malang, Jawa Timur</h2>
                <div class="row col-4">
                    <div class="form-check form-check-inline col-4 fs-4">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Bagikan</label>
                      </div>
                      <div class="form-check form-check-inline col-4 fs-4">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Simpan</label>
                      </div>
                </div>
            </div>
            <div>
                <h2 style="width: 1240px; height: 1px;">_____________________________________________________________</h2>
            </div>
            <div class="mt-5 mx-5">
                <p class="fs-3">Jatim Park 1, Jatim Park 2 dan Jatim Park 3 merupakan taman bermain yang berada di Kota Batu. Taman ini menawarkan puluhan wahana yang unik  dan cocok untuk anak-anak dan dewasa. Dengan harga tiket yang dipilih, mulai dari Rp. 30.000 hingga Rp. 170.000 per orang. 
                    <br>
                    <br>
                Di jatim Park 1, kamu bisa bermain sampai puas aneka wahana yang disajikan. Selanjutnya di Jatim Park 2, kamu bisa menikmati dua atraksi yang menarik. Pertama ada Batu Secret Zoo yang berisi banyak satwa dari berbagai dunia dan yang kedua adalah museum satwa yang berisi koleksi hewan yang telah mati dan diawetkan untuk keperluan edukasi.
                <br>
                <br>
                Sedangkan Jatim Park 3 merupakam tempat wisata terbaru yang mereka miliki. Ada beberapa zona di dalamnya: Little Amsterdam, Kampung Jepang, India, Korea, Forbidden City China, Dino Park, Zombie World dan masih banyak lagi. Selain berfoto, beberapa area memeiliki atraksi permainan khusus.</p>
            </div>
            <div>
                <h2 style="width: 1240px; height: 1px;">_____________________________________________________________</h2>
            </div>
        </div>
    </section>
    {{-- Detail Deskripsi End --}}

    {{-- Rekomendasi Start --}}
    <section id="rekomendasi">
        <div class="container" style="margin-top: 100px; margin-bottom: 100px">
            <h1 class="fw-bold">Rekomendasi wisata lain</h1>
            <div class="row justify-content-between mx-5 mt-5">
                <div class="card" style="width: 20rem; border: none;">
                    <img src="{{asset('images/burung.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2 class="card-title">⭐⭐⭐⭐</h2>
                      <h2 class="card-text fw-bold">Pantai Klanyar</h2>
                      <a href="detail" class="btn btn-primary mt-5" style="background-color: #141067; border: none;">Lihat Detail</a>
                    </div>
                </div>
                <div class="card" style="width: 20rem; border: none;">
                    <img src="{{asset('images/burung.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2 class="card-title">⭐⭐⭐⭐⭐</h2>
                      <h2 class="card-text fw-bold">Candi Penataran</h2>
                      <a href="detail" class="btn btn-primary mt-5" style="background-color: #141067; border: none;">Lihat Detail</a>
                    </div>
                </div>
                <div class="card" style="width: 20rem; border: none;">
                    <img src="{{asset('images/burung.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2 class="card-title">⭐⭐⭐⭐⭐</h2>
                      <h2 class="card-text fw-bold">Gili Labak</h2>
                      <a href="detail" class="btn btn-primary mt-5" style="background-color: #141067; border: none;">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Rekomendasi End --}}

    <!-- subscribe start-->
    <section id="subscribe">
        <div class="container mb-0" style="margin-top: 100px">
            <h1 class="text-light fw-bold p-4" style="text-align: center;">Subscribe for more Information</h1>
            <form class="row g-5 justify-content-center p-4 align-items-center">
                <div class="col-auto">
                  <label for="inputEmail" class="visually-hidden">Email</label>
                  <input type="email" class="form-control" style="" id="inputEmail" placeholder="Enter your Email Address">
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn" style="background-color: #141067; color:white;">Subscribe</button>
                </div>
            </form>
        </div>
</section>
<!-- subscribe end-->


{{-- Footer Start --}}
<section id="footer">
    <nav class="navbar navbar-expand-lg fs-5 p-3 z-10">
        <div class="container">
            <img src="{{asset('images/logoVizthaGo.svg')}}" alt="..." class="shadow rounded-pill">
            <a class="navbar-brand ms-2" style="color: white;" href="#">ViztaGo</a>
            <div class="collapse navbar-collapse me-0" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0 me-0">
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="#" tabindex="-1" aria-disabled="true">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="#" tabindex="-1" aria-disabled="true">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="#" tabindex="-1" aria-disabled="true">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h5 class="p-5" style="text-align: center; color: white;">Copyright by Kelompok 5 All Right Reserved.</h5>
    </div>
</section>
{{-- Footer End --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
