<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>| 3KA30 | Kelompok 5</title>
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
                        <a class="nav-link nav-link-hover active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-hover" href="#footer" tabindex="-1" aria-disabled="true">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-hover" href="#caroseul" tabindex="-1" aria-disabled="true">Go Explore</a>
                    </li>
                </ul>
                <a href="/signup" type="button" class="btn1 btn-primary btn-sm me-2 shadow" style="text-decoration: none; color: #112F65;">Sign Up</a>
                <a href="login" type="button" class="btn2 btn-secondary btn-sm shadow" style="color:white; text-decoration: none;">Login</a>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- hero section start-->
    <section id="hero">
            <div class="container">
                <div class="d-flex align-items-center flex-md-row flex-column-reverse">
                    <div class="col-12 col-md-8">
                        <div class="item">
                            <p class="fw-bold col-lg-10 col-md-6" style="font-size: 50px; margin-top:100px;">Jelajahi Keindahan Indonesia hanya dengan satu sentuhan</p>
                            <h1 class="col-lg-10 col-md-6" style="font-size: 23px; line-height: 35px; color:#141067;">Jelajahi Indonesia yang indah, dan nikmati rekomendasi wisata dari kami dimana saja dan kapan saja</h1>
                            <a href="#caroseul" class="btn btn-sm fs-4 mt-5 p-3 rounded-4" style="background-color: #141067;"><span class="p-4 shadow-lg" style="color: #EAF4F9;">Jelajahi Sekarang</span></a>
                        </div> 
                    </div>
                    <div class="col-12 col-md-4 d-flex justify-content-md-end justify-content-center">
                        {{-- <img src="{{asset('storage/images/image 2.png')}}" alt="..." class="me-5 mt-5 z-2"> --}}
                    </div>
                </div>
            </div>
            <img src="{{asset('images/layer.svg')}}" alt="..." class="position-absolute" style="top: -90px; left: -140px; z-index: -2">
            <img src="{{asset('images/imageHero.svg')}}" alt="..." class="position-absolute" style="margin-top: -420px; right: 50px; z-index: 1;">
    </section>
    <!-- hero section end -->

    <!-- caroseul start -->
    @foreach ($data as $item)
    <section id="caroseul">
            <div class="container">
                <p class="destination p-3 fw-bold" style="color: white; text-shadow: 1px 1px 2px #EAF4F9;">Destination Highlight</p>
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row justify-content-center p-3">
                                    <div class="card mx-2" style="max-width: 500px;">
                                        <div class="row g-0">
                                            <div class="col-md-4 p-1">
                                            <img src="{{ asset('gambar').'/'.$item->thumbnail }}" class="img-fluid rounded-start" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title fw-bold fs-4">{{ $item->judul }}</h5>
                                                <p class="card-text">{{ implode(' ', array_slice(explode(' ', $item->deskripsi), 0, 32)) }}</p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
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
                    <!-- Travel Inspiration Start-->
                <p class="destination p-3 fw-bold" style="color: white; text-align: center; text-shadow: 1px 1px 2px #EAF4F9;">Travel Inspiration</p>
                <div class="row justify-content-between">
                    <div class="card p-3 shadow" style="width: 20rem; border: none;">
                        <img src="{{ asset('gambar').'/'.$item->thumbnail }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2>⭐⭐⭐⭐⭐</h2>
                            <h2 class="card-text fw-bold">{{ $item->judul }}</h2>
                            <a href="{{ url('/frontend/'.$item->id_wisata) }}" class="btn btn-primary mt-5" style="background-color: #141067; border: none;">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Travel Inspiration End-->
            </div>
    </section>
    @endforeach
    
    <!-- caroseul end -->

    <!-- subscribe start-->
    <section id="subscribe">
            <div class="container" style="margin-top: 500px">
                <h1 class="text-light fw-bold p-4" style="text-align: center;">Subscribe for more Information</h1>
                <form class="row g-5 justify-content-center p-4 align-items-center">
                    <div class="col-auto">
                      <label for="inputEmail" class="visually-hidden">Email</label>
                      <input type="email" class="form-control rounded-5 fs-4" style="width: 450px; height: 70px;" id="inputEmail" placeholder="Enter your Email Address">
                    </div>
                    <div class="col-auto">
                      <button type="submit" class="btn rounded-5 fs-4" style="background-color: #141067; color:white; width: 200px; height: 50px;">Subscribe</button>
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
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 me-0">
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="/login" tabindex="-1" aria-disabled="true">Login</a>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center align-items-center" style="gap: 40px;">
                        <a href="https://www.facebook.com/profile.php?id=100009457752082"><img src="{{asset('images/facebook.svg')}}" alt="facebook" style="width:35px;"></a>
                        <a href="https://www.instagram.com/dmulyana_/"><img src="{{asset('images/instagram.svg')}}" alt="instagram" style="width:35px;"></a>
                        <a href="https://twitter.com/dmulyana_"><img src="{{asset('images/twitter.svg')}}" alt="twitter" style="width:35px;"></a>
                    </div>
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
