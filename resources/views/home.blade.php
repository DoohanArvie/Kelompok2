<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Eclipse Medical Center</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset ('landingpage/img/lgors16x16.png') }}" rel="icon">
  <link href="{{ asset ('landingpage/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset ('landingpage/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('landingpage/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('landingpage/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('landingpage/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset ('landingpage/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('landingpage/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('landingpage/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset ('landingpage/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset ('landingpage/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">eclipsemedical45@gmail.com</a>
        <i class="bi bi-phone"></i> +62895414990411
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="#hero"><img src="{{ asset ('landingpage/img/logors.png') }}" alt="" class="img-fluid">  Eclipse Medical</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#departments">Facility</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span> Login</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to <br>Eclipse Medical Center</h1>
      <h2>Mengutamakan Kesehatan, Mengedepankan Kenyamanan</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Kenapa Memilih Eclipse Medical?</h3>
              <p>
              Eclipse Medical Center sebagai penyedia layanan kesehatan adalah pilihan tepat karena berbagai keunggulan yang ditawarkannya. Pusat medis ini memiliki dokter dan tenaga medis berpengalaman 
              serta dilengkapi dengan teknologi medis terkini dan fasilitas modern.  
              </p>
              <div class="text-center">
                <a href="#about" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                  <i class='bx bx-shield-plus'></i>
                    <h4><a href="">Medical Check Up</a></h4>
                    <p>Melayanai berbagai macam kebutuhan pemeriksaan kesehatan lebih lanjut.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                  <i class='bx bx-calendar' ></i>
                    <h4><a href="">Konsultasi Rawat Jalan</a></h4>
                    <p>Melayanai konsultasi medis tanpa harus dirawat inap di rumah sakit</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                  <i class='bx bx-user-voice' ></i>
                    <h4><a href="">Konsultasi <br> Online</a></h4>
                    <p>Memungkinkan pasien untuk mendapatkan saran medis tanpa harus datang langsung ke rumah sakit</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Tentang Kami Eclipse Medical Center</h3>
            <p>Memilih Eclipse Medical Center sebagai penyedia layanan kesehatan bisa didasarkan pada beberapa faktor berikut yang biasanya menjadi keunggulan dari sebuah pusat medis berkualitas</p>

            <div class="icon-box">
              <div class="icon"><i class='bx bxs-injection'></i></div>
              <h4 class="title">Tenaga Medis yang Berpengalaman</h4>
              <p class="description">Eclipse Medical Center mungkin memiliki dokter dan tenaga medis yang berpengalaman dan berkualifikasi tinggi dalam berbagai spesialisasi. Pengalaman dan keahlian tenaga medis adalah salah satu faktor utama dalam memastikan kualitas perawatan yang diberikan.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class='bx bxs-institution'></i></div>
              <h4 class="title">Layanan Kesehatan yang Komprehensif</h4>
              <p class="description">Menawarkan berbagai layanan kesehatan, mulai dari konsultasi umum, spesialisasi medis, diagnostik, hingga layanan rawat inap dan rawat jalan. Layanan yang komprehensif memastikan bahwa semua kebutuhan kesehatan pasien dapat dipenuhi di satu tempat.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class='bx bxs-bed'></i></div>
              <h4 class="title">Teknologi dan Fasilitas Modern</h4>
              <p class="description">Eclipse Medical Center kemungkinan dilengkapi dengan teknologi medis terkini dan fasilitas modern untuk diagnosa dan perawatan. Ini termasuk peralatan pencitraan medis, laboratorium, dan ruang operasi yang canggih.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
              <p>Doctors</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p>Departments</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Research Labs</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Eclipse Medical Center menawarkan berbagai layanan spesialis untuk memenuhi berbagai kebutuhan kesehatan pasien. Berikut adalah beberapa layanan spesialis yang biasanya tersedia di pusat medis </p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4><a href="">Penyakit Dalam</a></h4>
              <p>Hari ini tersedia layanan Jadwal Praktik Dokter Jam : 08.00 - 14.00</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4><a href="">Dokter Umum</a></h4>
              <p>Hari ini tersedia layanan Jadwal Praktik Dokter Jam : 08.00 - 16.00</p>
              <br><strong>Tersedia konsultasi online</strong></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class='bx bx-child'></i></div>
              <h4><a href="">Ibu dan Anak</a></h4>
              <p>Hari ini tersedia layanan Jadwal Praktik Dokter Jam : 08.00 - 15.00</p>
              <br><strong>Tersedia konsultasi online</strong></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-eye" ></i></div>
              <h4><a href="">Mata</a></h4>
              <p>Hari ini tersedia layanan Jadwal Praktik Dokter Jam : 08.00 - 16.00</p>
              <br><strong>Tersedia konsultasi online</strong></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4><a href="">Saraf</a></h4>
              <p>Hari ini tersedia layanan Jadwal Praktik Dokter Jam : 08.00 - 14.00</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-assistive-listening-systems"></i></div>
              <h4><a href="">THT</a></h4>
              <p>Hari ini tersedia layanan Jadwal Praktik Dokter Jam : 08.00 - 14.00</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class='bx bxs-capsule' ></i></div>
              <h4><a href="">Gizi</a></h4>
              <p>Hari ini tersedia layanan Jadwal Praktik Dokter Jam : 08.00 - 15.00</p>
              <br><strong>Tersedia konsultasi online</strong></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class='bx bx-male-female'></i></div>
              <h4><a href="">Kulit dan Kelamin</a></h4>
              <p>Hari ini tersedia layanan Jadwal Praktik Dokter Jam : 08.00 - 14.00</p>
              <br><strong>Tersedia konsultasi online</strong></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class='bx bxs-bone'></i></div>
              <h4><a href="">Tulang</a></h4>
              <p>Hari ini tersedia layanan Jadwal Praktik Dokter Jam : 08.00 - 14.00</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Departments</h2>
          <p>Eclipse Medical Center memiliki beberapa departemen spesialis unggulan yang menawarkan layanan kesehatan berkualitas tinggi dengan teknologi dan fasilitas terkini, serta tenaga medis yang berpengalaman. Berikut adalah beberapa departemen spesialis yang termasuk unggulan:</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Penyakit Dalam</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Saraf</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Ibu dan Anak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Mata</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Tulang</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Penyakit Dalam</h3>
                    <p class="fst-italic">Departemen Penyakit Dalam di Eclipse Medical Center menyediakan layanan diagnosa, pengobatan, dan manajemen berbagai penyakit kronis dan akut seperti diabetes, hipertensi, penyakit jantung, dan infeksi.</p>
                    <p>Fasilitas yang tersedia meliputi laboratorium diagnostik, layanan radiologi (X-ray, CT scan, MRI), tes fungsional (EKG, echocardiography), klinik rawat jalan, dan unit perawatan intensif (ICU). Pasien mendapatkan perawatan komprehensif mulai dari 
                      pemeriksaan fisik, tes diagnostik, hingga pengobatan dan tindak lanjut, didukung oleh program edukasi kesehatan dan konsultasi gizi.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset ('landingpage/img/departemen1penyakitdalam.jpg') }}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Saraf</h3>
                    <p class="fst-italic">Departemen Penyakit Saraf di Eclipse Medical Center menyediakan layanan komprehensif untuk diagnosa dan perawatan gangguan sistem saraf, termasuk stroke, epilepsi, penyakit Parkinson, dan migrain. </p>
                    <p>Fasilitas yang disediakan meliputi laboratorium neurofisiologi untuk tes EEG dan EMG, pencitraan saraf canggih seperti MRI dan CT scan, serta unit perawatan intensif neurologis. Selain itu, terdapat program rehabilitasi saraf yang melibatkan fisioterapi, terapi okupasi, dan terapi bicara untuk membantu pemulihan pasien. </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset ('landingpage/img/departments-2.jpg') }}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Ibu dan Anak</h3>
                    <p class="fst-italic">Departemen Ibu dan Anak di Eclipse Medical Center menyediakan layanan komprehensif untuk kesehatan ibu dan anak, termasuk konsultasi kehamilan, pemeriksaan prenatal, dan persalinan dengan dukungan dokter kandungan dan bidan berpengalaman</p>
                    <p>Fasilitas yang tersedia meliputi ruang bersalin modern, layanan USG 3D/4D, dan neonatal intensive care unit (NICU) untuk perawatan bayi baru lahir yang memerlukan perhatian khusus. Selain itu, departemen ini juga menawarkan layanan pediatri untuk pemantauan tumbuh kembang anak, imunisasi, serta perawatan penyakit anak dengan dokter spesialis anak yang siap memberikan perawatan terbaik.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset ('landingpage/img/departemenanak.png') }}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Mata</h3>
                    <p class="fst-italic">Departemen Mata di Eclipse Medical Center melayani pemeriksaan mata rutin, diagnosa dan pengobatan penyakit mata seperti glaukoma, katarak, dan degenerasi makula, serta perawatan kondisi refraksi seperti miopia dan hiperopia.</p>
                    <p>Fasilitas modern termasuk alat diagnostik seperti slit lamp, tonometri, dan optical coherence tomography (OCT), serta layanan bedah mata seperti LASIK dan operasi katarak dengan teknik terbaru. </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset ('landingpage/img/departments-5.jpg') }}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Tulang</h3>
                    <p class="fst-italic">Departemen Tulang di Eclipse Medical Center melayani diagnosa dan perawatan berbagai kondisi muskuloskeletal termasuk patah tulang, arthritis, osteoporosis, dan cedera olahraga</p>
                    <p>asilitas yang disediakan meliputi radiologi canggih untuk pencitraan seperti X-ray dan MRI, layanan fisioterapi untuk rehabilitasi, serta ruang operasi yang dilengkapi dengan teknologi mutakhir untuk tindakan bedah ortopedi. </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset ('landingpage/img/departementtulang.jpeg') }}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Doctors</h2>
          <p>Eclipse Medical Center memiliki sejumlah dokter unggulan yang dikenal karena keahlian dan pengalaman mereka dalam berbagai spesialisasi medis. Berikut adalah beberapa dokter yang menjadi unggulan di pusat medis ini:</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset ('landingpage/img/doctors/drtulang.jpeg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>dr. Christian Silas, Sp. OT. (K)</h4>
                <span>Spesialis Ortopedi Konsultan Sports Injury</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset ('landingpage/img/doctors/dokteranak.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>dr. Reni Wigati, Sp.A (K)</h4>
                <span>Dokter Spesialis Anak Konsultan Emergensi</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset ('landingpage/img/doctors/doktermata.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr. Annette Mariza, SpM</h4>
                <span>Dokter Spesialis Mata</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset ('landingpage/img/doctors/dokterdalam.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Prof. Dr. dr. Sidartawan Soegondo, Sp.PD-KEMD, FINASIM, FACE</h4>
                <span>Dokter Penyakit Dalam Konsultan Endokrin-Metabolik-Diabetes</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Berikut adalah daftar FAQ (Frequently Asked Questions) untuk Eclipse Medical Center yang dapat membantu pasien mendapatkan informasi yang diperlukan:</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Layanan apa saja yang ada di Eclipse Medical Center? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                Eclipse Medical Center menyediakan berbagai pelayanan spesialis kesehatan. Daftar spesialis kesehatan bisa dilihat <a href="#services">di sini.</a>
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Apakah di Eclipse Medical Center bisa menggunakan bpjs? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                Ya, bisa. Eclipse Medical Center memiliki komitmen untuk mendukung pelaksanaan program Jaminan Kesehatan Nasional (JKN).
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Layanan unggulan apa saja yang ada di Eclipse Medical Center?  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                Eclipse Medical Center menyediakan berbagai pelayanan unggulan spesialis kesehatan, bisa dilihat <a href="#departments">di sini.</a>
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Pukul berapa layanan praktik di Eclipse Medical Center dibuka? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eclipse Medical Center membuka layanan praktik mulai pukul 08.00 untuk semua spesialis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Perlukah membuat janji dengan dokter terlebih dahulu? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                Sangat disarankan untuk membuat janji terlebih dahulu agar anda dapat menghindari waktu tunggu yang terlalu lama dan dapat memastikan dokter yang ingin anda temui ada di tempat.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset ('landingpage/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Pelayanan di Eclipse Medical Center sangat memuaskan. Dokternya ramah dan profesional, fasilitasnya lengkap dan modern. Proses pendaftaran dan konsultasi juga cepat dan efisien. Sangat direkomendasikan untuk siapa saja yang mencari perawatan medis berkualitas.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset ('landingpage/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Saya sangat puas dengan pelayanan di sini, terutama di departemen kardiologi. Dokter jantungnya sangat berpengalaman dan memberikan penjelasan yang detail tentang kondisi saya. Satu-satunya kendala adalah parkir yang kadang penuh, tapi keseluruhan pengalaman saya tetap sangat baik
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset ('landingpage/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fasilitas dan peralatan medis di Eclipse Medical Center sangat lengkap dan canggih. Ruang tunggu yang nyaman dan staf yang ramah membuat saya merasa tenang selama menunggu hasil pemeriksaan. Pusat medis ini benar-benar mengutamakan kenyamanan dan keselamatan pasien.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset ('landingpage/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Saya menjalani operasi ortopedi di sini dan sangat terkesan dengan tingkat profesionalisme dan perhatian dari tim medis. Prosedur operasinya berjalan lancar dan fasilitas ruang operasi sangat modern. Pemulihan saya juga didukung dengan program rehabilitasi yang efektif.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset ('landingpage/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Saya menggunakan layanan konsultasi online di Eclipse Medical Center dan sangat terkesan dengan kemudahannya. Dokternya sangat responsif dan memberikan saran yang jelas. Ini sangat membantu saya yang memiliki mobilitas terbatas.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Eclipse Medical Center memiliki berbagai fasilitas modern untuk memastikan kenyamanan dan perawatan berkualitas tinggi bagi pasien. Berikut adalah gambaran galeri fasilitas yang tersedia di pusat medis ini:</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset ('landingpage/img/gallery/mcu.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset ('landingpage/img/gallery/mcu.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset ('landingpage/img/gallery/fasilitaspenyakitdalam.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset ('landingpage/img/gallery/fasilitaspenyakitdalam.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset ('landingpage/img/gallery/fasilitasibudananak.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset ('landingpage/img/gallery/fasilitasibudananak.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset ('landingpage/img/gallery/uimata.jpeg') }}" class="galelry-lightbox">
                <img src="{{ asset ('landingpage/img/gallery/uimata.jpeg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset ('landingpage/img/gallery/fasilitastht.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset ('landingpage/img/gallery/fasilitastht.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset ('landingpage/img/gallery/saraf.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset ('landingpage/img/gallery/saraf.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset ('landingpage/img/gallery/fasilitasdokterkulit.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset ('landingpage/img/gallery/fasilitasdokterkulit.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset ('landingpage/img/gallery/dokterotopedi.png') }}" class="galelry-lightbox">
                <img src="{{ asset ('landingpage/img/gallery/dokterotopedi.png') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Address and Contact</h2>
          <p>Berikut adalah alamat dan informasi kontak Eclipse Medical Center:</p>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4598.555850778169!2d111.05266437115118!3d-6.750705459603587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70d36b0a417ccf%3A0x85e4675aa6cf3428!2sGedung%20Praktek%20Dokter%20Khozin%20SpOT!5e0!3m2!1sid!2sid!4v1716787107738!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl. Raya Pati - Juwana KM 7, Kota Pati, Indonesia</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>eclipsemedical45@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62895414990411</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Medilab</h3>
            <p>
            Jl. Raya Pati - Juwana KM 7, <br>
            Kota Pati, <br>
            Indonesia<br><br>
              <strong>Phone:</strong> +62895414990411<br>
              <strong>Email:</strong> eclipsemedical45@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <ul>
            <h4></h4>
            <li><i class="bx bx-chevron-right"></i> <a href="#facility">Facility</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#doctors">Doctor</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4></h4>
            <h2 class="logo me-auto"><img src="{{ asset ('landingpage/img/lgors16x16.png') }}" alt="" class="img-fluid">  Eclipse Medical</a></h2>
           <p>Mengutamakan Kesehatan, Mengedepankan Kenyamanan</p>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Eclipse Medical</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/"> Kelompok2</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
 
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset ('landingpage/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset ('landingpage/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset ('landingpage/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset ('landingpage/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset ('landingpage/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset ('landingpage/js/main.js') }}"></script>

</body>

</html>