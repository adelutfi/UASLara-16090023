<!doctype html>
<html lang="en">
<!--

Page    : index / MobApp
Version : 1.0
Author  : Colorlib
URI     : https://colorlib.com

 -->

<head>
    <title>Sistem Pendaftaran KPPS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">

    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assetfroent/css/bootstrap.min.css')}}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('assetfroent/css/themify-icons.css')}}">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{asset('assetfroent/css/owl.carousel.min.css')}}">
    <!-- Main css -->
    <link href="{{asset('assetfroent/css/style.css')}}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">

    <!-- Nav Menu -->

    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <a class="navbar-brand" href="index.html"><img src="{{asset('assetfroent/images/logokpps.png')}}" class="img-fluid" alt="logo"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link active" href="#home">HOME <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#features">PERSYARATAN</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#tatacara">TATA CARA</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#contact">CONTACT</a> </li>
                                 <li class="nav-item"> <a class="nav-link" href="{{route('form.login')}}">LOGIN</a> </li>
                                <li class="nav-item"><a href="{{url('formulir')}}" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Silakan Pendaftaran</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <header class="bg-gradient" id="home">
        <div class="container mt-5">
            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Berhasil</strong> {{Session::get('success')}}
            </div>
            @endif
            <h1>Selamat Datang Di Web Kami</h1>
            <p class="tagline">Pendaftaran KPPS atau Kelompok Penyelenggara Pemungutan Suara adalah organisasi yang mengkoordinir jalannya proses pemilu di semua TPS (Tempat Pemungutan Suara) dengan cakupan wilayah yang lebih luas dari PPS.</p>
        </div>
        <div class="img-holder mt-3"><img src="{{asset('assetfroent/images/kpps.jpg')}}" alt="phone" class="img-fluid"></div>
    </header>



    <div class="section light-bg" id="features">


        <div class="container">
            <div class="section-title">
                <h3>Persyaratan</h3>
            </div>


            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-face-people gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">UMUR</h4>
                                    <p class="card-text">Syaratnya mudah:
                                    <p>1. asal pendaftar bisa membaca dan menulis</p>
                                    <p>2. kalau dulu harus usia 20 tahun ketasa  saat ini asal memiliki hak pilih bisa menjadi petugas </p>
                                    <p>3. Mampu secara jasmani dan rohani dan bebas dari penyalahgunaan narkotika</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-face-people gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Warga Negara Indonesia (WNI)</h4>
                                    <p class="card-text">Adapun persyaratan yang harus diperhatikan calon KPPS antara lain:

                                    <p>1.  tercatat sebagai warga Indonesia.</p>
                                    <p>2. Setia kepada Pancasila sebagai dasar negara, Undang-undang Dasar  Negara Republik Indonesia tahun 1945, Negara Kesatuan Republik Indonesia, Bhineka Tunggal Ika dan cita-cita Proklamasi 17 Agustus 1945</p>
                                    <p>3. Mempunyai integritas, pribadi yang kuat, jujur dan adil. </p>
                                    <p>4. Berdomisili dalam wilayah kerja KPPS/TPS.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-locku gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">PENDIDIKAN</h4>
                                    <p class="card-text">bagi adik-adik yang telah memiliki hak pilih baik yang masih berada di bangku SMA maupun kuliah silahkan ikut mendaftar menjadi Panitia Pemungutan Suara -PPS- maupun KPPS :</p>
                                    <p>1. Berpendidikan paling rendah sekolah lanjutan tingkat atas (SLTA) atau sederajat; memperoleh kekuatan hukum tetap karena melakukan tindak pidana yang diancam dengan pidana penjara 5(lima) tahun atau lebih.</p>
                                    <p>2. Belum pernah menjabat 2 (dua) kali periode sebagai anggota KPPS.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    </div>
    <!-- // end .section -->
  


    <div class="section light-bg" id="tatacara">
        <div class="container">
            <div class="section-title">
                <h3>TATA CARA</h3>
            </div>

            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#communication">Mendaftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#schedule">Menunggu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages">Pengumuman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#livechat">Rapat</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="communication">
                    <div class="d-flex flex-column flex-lg-row">
                        <img src="{{asset('assetfroent/images/mendaftar.jpg')}}" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <div>

                            <h2>Pendaftaran</h2>
                            <p class="lead"><p>1. akses web pendaftaran</p>
                            <p>2. Persiapkan formulir yang akan di perlukan sepeti IJAZA, KTP dan Surat keterangan dokter.
                            </p>
                            <p> 3. Mengisi formulir di Form sesuai yang anda miliki.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="schedule">
                    <div class="d-flex flex-column flex-lg-row">
                        <div>
                            <h2>Menunggu</h2>
                            <p class="lead"><p>1. Menunggu sampe tanggal yang di tentukan</p>
                            <p>2. jangan lupa melihat tanggal pengumuman
                            </p>
                            <p> 3. Dan jangan lupa melihat cek pengumumannya
                            </p>
                        </div>
                        <img src="{{asset('assetfroent/images/waktu.png')}}" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    </div>
                </div>
                <div class="tab-pane fade" id="messages">
                    <div class="d-flex flex-column flex-lg-row">
                        <img src="{{asset('assetfroent/images/pengumuman.png')}}" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <div>
                            <h2>Pengumuman</h2>
                            <p class="lead"><p>1. Pengumuman sesuai tanggal </p>
                            <p>2. Tahap pengumuman akan ada rapat
                            </p>
                            <p> 3. <a href="{{route('pengumuman.hasil')}}"> Klik untuk melihat pengumuman</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="livechat">
                    <div class="d-flex flex-column flex-lg-row">
                        <div>
                            <h2>Rapat</h2>
                            <p class="lead"><p>1. Rapat bagi yang sudah keterima</p>
                            <p>2. Rapat akan di selenggarakan tgl 20 april
                            </p>
                            <p> 3. Selanjutnya melakukan tahap berikutnya.
                            </p>
                        </div>
                        <img src="{{asset('assetfroent/images/rapat.jpg')}}" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- // end .section -->

  
    <!-- // end .section -->


  
    <!-- // end .section -->


  




   

    
    <!-- // end .section -->


   
    <!-- // end .section -->



    
    <!-- // end .section -->

    <div class="light-bg py-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="mb-2"> <span class="ti-location-pin mr-2"></span> 1485 Jl.Sultan hasanudin rt 03 rw 2 keturen </p>
                    <div class=" d-block d-sm-inline-block">
                        <p class="mb-2">
                            <span class="ti-email mr-2"></span> <a class="mr-4" href="mailto:support@mobileapp.com">adelutfinofitasari6@gmail.com</a>
                        </p>
                    </div>
                    <div class="d-block d-sm-inline-block">
                        <p class="mb-0">
                            <span class="ti-headphone-alt mr-2"></span> <a href="tel:51836362800">518-3636-2800</a>
                        </p>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="social-icons">
                        <a href="#"><span class="ti-facebook"></span></a>
                        <a href="#"><span class="ti-twitter-alt"></span></a>
                        <a href="#"><span class="ti-instagram"></span></a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- // end .section -->
    <footer class="my-5 text-center">
        <!-- Copyright removal is not prohibited! -->
        <p class="mb-2"><small>COPYRIGHT © 2017. ALL RIGHTS RESERVED. MOBAPP TEMPLATE BY <a href="https://colorlib.com">COLORLIB</a></small></p>

        <small>
            <a href="#" class="m-2">PRESS</a>
            <a href="#" class="m-2">TERMS</a>
            <a href="#" class="m-2">PRIVACY</a>
        </small>
    </footer>

    <!-- jQuery and Bootstrap -->
    <script src="{{asset('assetfroent/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assetfroent/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Plugins JS -->
    <script src="{{asset('assetfroent/js/owl.carousel.min.js')}}"></script>
    <!-- Custom JS -->
    <script src="{{asset('assetfroent/js/script.js')}}"></script>

</body>

</html>
