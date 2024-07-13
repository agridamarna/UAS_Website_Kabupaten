@include('layout.header')
<main>

    <section class="hero" id="hero">
        <div class="heroText">
            <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
                Purwakarta
            </h1>

            <p class="text-secondary-white-color" data-aos="fade-up" data-aos-delay="1000">
                Melayani masyarakat dengan sepenuh hati <strong class="custom-underline">Purwakarta Istimewa</strong>
            </p>
        </div>

        <div class="videoWrapper">
            <img src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/delikjabar/2022/12/IMG_20221211_193120.jpg" width="100%" height="600" alt="">


        </div>

        <div class="overlay"></div>
    </section>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <strong>Purwakarta Istimewa</strong>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#hero">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang Purwakarta</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#news">Berita</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Pengaduan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="section-padding pb-0" id="about">
        <div class="container mb-5 pb-lg-5">
            @if (session('sukses'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('sukses') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-3" data-aos="fade-up">Sejarah Purwakarta</h2>
                </div>

                <div class="col-lg-6 col-12 mt-3 mb-lg-5">
                    <p class="me-4" data-aos="fade-up" data-aos-delay="300"> <a>Tempat yang mulai ramai, begitu arti nama Purwakarta.Kabupaten Purwakarta (Purwa adalah permulaan dan karta adalah ramai atau hidup) berada di Jawa Barat. Posisinya spesial berada di antara ibu kota negara (Jakarta) dan ibu kota provinsi (Bandung). Hingga pada akhirnya, Purwakarta menjadi wilayah dengan banyak peninggalan bersejarah.  </a> <a
                           > </a>
                </div>

                <div class="col-lg-6 col-12 mt-lg-3 mb-lg-5">
                    <p data-aos="fade-up" data-aos-delay="500">Kabupaten Purwakarta (bahasa Sunda: aksara Sunda: ᮕᮥᮁᮝᮊᮁᮒ). Kota ini dijuluki sebagai kota pensiun karena suasananya yang tenang dan jauh dari hiruk piruk kota. Selain kota pensiun, Purwakarta juga memiliki julukan kota tasbih dan Purwakarta cantik

Purwakarta dikenal sebagai tempat kelahiran beberapa negarawan dan pemimpin besar asal Jawa Barat, karena pada masanya awal pendirian Republik Indonesia. Diantaranya adalah pahlawan nasional Kusumah Atmaja (Ketua pertama Mahkamah Agung Republik Indonesia) dan Ipik Gandamana (Bupati pertama Kabupaten Bogor, Gubernur Jawa Barat, dan Menteri Dalam Negeri).</p>
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-12 p-0">
                    <img src="https://purwakartakab.go.id/assets/v2/assets/images/featured/bupati.jpg" class="img-fluid about-image"
                        alt="">
                </div>

                <div class="col-lg-3 col-12 bg-dark">
                    <div class="d-flex flex-column flex-wrap justify-content-center h-100 py-5 px-4 pt-lg-4 pb-lg-0">
                        <h3 class="text-white mb-3" data-aos="fade-up">Mewujudkan Purwakarta Istimewa
                        </h3>

                        <div class="mt-3 custom-links">

                            <a href="#news" class="text-white custom-link" data-aos="zoom-in"
                                data-aos-delay="100">Drs. BENNI IRWAN, M.Si, M.A.</a>

                            <a href="#contact" class="text-white custom-link" data-aos="zoom-in"
                                data-aos-delay="300">PJ Bupati Purwakarta</a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-12 p-0">
                    <section id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://cdn1-production-images-kly.akamaized.net/f1OUM5KNBfGUEUhjgmKrICWeaKI=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/1659734/original/017784800_1501062466-20170726-patung-monumen-purwakarta.jpg"
                                    class="img-fluid team-image" alt="">

                                <div class="team-thumb bg-warning">
                                    <p class="text-secondary-white-color mb-0">Taman Pembaharuan</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="https://cdn1-production-images-kly.akamaized.net/wnUltETGDSLSchDmxcEZ9sLIYQo=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4595546/original/056542500_1696239650-FotoJet__45_.jpg"
                                    class="img-fluid team-image" alt="">

                                <div class="team-thumb bg-success">
                                    <p class="text-secondary-white-color mb-0">Taman air mancur Sri Baduga Purwakarta</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/ayobandung/bank_image/medium/3-lokasi-ngabuburit-favorit-warga-purwakarta.jpg"
                                    class="img-fluid team-image" alt="">

                                <div class="team-thumb bg-primary">    
                                    <p class="text-secondary-white-color mb-0">Situ Buleud Purwakarta</p>
                                </div>
                            </div>

                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>

                            <span class="visually-hidden">Next</span>
                        </button>
                    </section>

                </div>
            </div>
        </div>
    </section>

    <section class="news section-padding" id="news">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <h2 class="mb-5 text-center" data-aos="fade-up">Papan Informasi</h2>
                </div>

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="news-thumb" data-aos="fade-up">
                        <a href="news-detail.html" class="news-image-hover news-image-hover-warning">
                            <img src="https://purwakartakab.go.id/uploads/berita/WhatsApp Image 2022-07-22 at 11.49.18.jpeg"
                                class="img-fluid large-news-image news-image" alt="">
                        </a>

                        <div class="news-category bg-warning text-white">News</div>

                        <div class="news-text-info">
                            <h5 class="news-title">
                                <a href="news-detail.html" class="news-title-link">Pemkab Purwakarta memasang CCTV di beberapa titik strategis</a>
                            </h5>

                            <span class="text-muted">22 jam yang lalu</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                        <div class="news-top w-100">

                            <a href="news-detail.html" class="news-image-hover news-image-hover-primary">
                                <img src="https://purwakartakab.go.id/uploads/berita/IMG-20201210-WA0002.jpeg"
                                    class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-category bg-primary text-white">Events</div>
                        </div>

                        <div class="news-bottom w-100">
                            <div class="news-text-info">
                                <h5 class="news-title">
                                    <a href="news-detail.html" class="news-title-link">Layanan dan Informasi publik</a>
                                </h5>

                                <div class="d-flex flex-wrap">
                                    <span class="text-muted me-2">
                                        <i class="bi-geo-alt-fill me-1 mb-2 mb-lg-0"></i>
                                        Purwakarta,
                                    </span>

                                    <span class="text-muted">September 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                        <div class="news-top w-100" data-aos="fade-up">

                            <a href="news-detail.html" class="news-image-hover news-image-hover-success">
                                <img src="https://purwakartakab.go.id/uploads/berita/reservasi.png"
                                    class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-category bg-success text-white">News</div>
                        </div>

                        <div class="news-bottom w-100">
                            <div class="news-text-info">
                                <h5 class="news-title">
                                    <a href="news-detail.html" class="news-title-link">Tempat reservasi rapat pemda Purwakarta</a>
                                </h5>

                                <span class="text-muted">6 hari yang lalu</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class=" contact section-padding" id="contact">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-12 mx-auto">

                    <h2 class="mb-4 text-center" data-aos="fade-up">Form Pengaduan</h2>

                    <form action="{{ url('pengaduan/proses_tambah') }}" method="post" class="contact-form"
                        role="form" data-aos="fade-up">
                        @csrf

                        <div class="row g-gs">

                            <div class="col-lg-6 my-3">
                                <label for="nama" class="form-label">Nama <sup
                                        class="text-danger">*</sup></label>

                                <input type="text" name="nama" id="nama" class="form-control"
                                    placeholder="Nama Lengkap" required>
                            </div>

                            <div class="col-lg-6 my-3">
                                <label for="no-telp" class="form-label">Nomor Teleponn <sup
                                        class="text-danger">*</sup></label>

                                <input type="number" name="no_telp" id="no-telp" pattern="[^ @]*@[^ @]*"
                                    class="form-control" placeholder="Masukan Nomor Telepon" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="alamat" class="form-label">Alamat</label>

                                <textarea name="alamat" rows="6" class="form-control" id="alamat" placeholder="Tell us about the project"
                                    required></textarea>

                            </div>

                            <div class="col-12 mb-3">
                                <label for="pesan" class="form-label">Pesan</label>

                                <textarea name="pesan" rows="6" class="form-control" id="pesan" placeholder="Tell us about the project"
                                    required></textarea>

                            </div>

                        </div>

                        <div class="col-lg-5 col-12 mx-auto mt-5">
                            <button type="submit" class="form-control">Kirim Pesan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <section class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63421.49901803957!2d107.41384445200859!3d-6.541414423485797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690e60454c6667%3A0x7ee7eda6d6e4556f!2sPurwakarta%2C%20Kec.%20Purwakarta%2C%20Kabupaten%20Purwakarta%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1720794689289!5m2!1sid!2sid" class="map-iframe" width="100%" height="400" style="border:0;" allowfullscreen=""
        loading="lazy"referrerpolicy="no-referrer-when-downgrade"></iframe>
        
    </section>

</main>

<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h5 class="text-white">
                    <i class="bi-geo-alt-fill me-2"></i>
                    Purwakarta, Jawa Barat, Indonesia
                </h5>

                <a href="https://templatemo.com/page/1" target="_parent">
                Hubungi Kami
                <br>JL. Gandanegara No. 25, Kelurahan Nageri Kidul, Kecamatan Purwakarta, 
                Kabupaten Purwakarta, Provinsi Jawa Barat. Kode Pos 41111.</br>
                </a>
            </div>

            <div class="col-6">
                <a href="mailto:info@company.com" class="custom-link mt-3 mb-5">Email: diskominfo@purwakartakab.go.id</a><br><br>

                    <class="copyright-text mb-0">Copyright ©  2024 Pemerintah Kabupaten Purwakarta


            </div>

            <div class="col-lg-3 col-5 ms-auto mt-5 mb-8">
                <ul class="social-icon">
                    <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                    <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                    <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                    <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                    <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                </ul>
            </div>

        </div>
        </section>
</footer>

@include('layout.footer')
