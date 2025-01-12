<!-- main -->
@extends('layout.app')
@section('content')
    <main>
        <!-- slide -->
        <div class="container-fluid-custom">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="storage/img/IMG_0040 (2).JPG" class="d-block w-100" alt="gambar 1"
                            style="height: auto; max-width: 100%; object-fit: cover;">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="storage/img/IMG_0226.JPG" class="d-block w-100" alt="gambar 2"
                            style="height: auto; max-width: 100%; object-fit: cover;">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="storage/img/IMG_8509.JPG" class="d-block w-100" alt="gambar 3"
                            style="height: auto; max-width: 100%; object-fit: cover;">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- end slide -->

        <!-- content -->
        <div class="container text-center konten-main">
            <!-- content 1 history -->
            <div class="container text-center konten-1 mt-3 mb-5">
                <div class="sejarah">
                    <h2>Sejarah STT CIPASUNG</h2>
                </div>
                <a>
                    Didirikan tahun 1997 dengan bantuan dan arahan dari tim Institut
                    Teknologi Bandung. Sekolah tinggi ini didirikan untuk menjawab
                    tantangan penyediaan tenaga ahli profesional dalam bidang keteknikan
                    yang dibutuhkan oleh masyarakat, khususnya masyarakat di sekitar
                    pesantren dan daerah pinggiran yang selama ini kurang mendapatkan
                    perhatian.
                    <a href="{{ route('sejarah') }}">Baca lebih lanjut...</a>


                </a>
            </div>
            <!-- end content 1 history -->

            <!-- content 2 biography -->
            <div class="container mb-5">
                <!-- pa chobir -->
                <div class="card mb-3 mx-auto">
                    <div class="row g-0 justify-content-center">
                        <div class="col-md-4 order-sm-1 order-md-2 d-flex align-items-center justify-content-center">
                            <img src="storage/img/pak chobir.JPG" class="img-fluid rounded-1"
                                alt="DRS. KH ABDUL CHOBIR, M.T." />
                        </div>
                        <div class="col-md-8 order-sm-2 order-md-1">
                            <div class="card-body pak ade">
                                <h2 class="card-title">DRS. KH ABDUL CHOBIR, M.T.</h2>
                                <p class="card-text">
                                    Sekolah Tinggi Teknologi Cipasung (STT Cipasung) didirikan
                                    tahun 1997 dengan bantuan dan arahan dari tim Institut
                                    Teknologi Bandung. Sekolah tinggi ini didirikan untuk
                                    menjawab tantangan penyediaan tenaga ahli profesional dalam
                                    bidang keteknikan yang dibutuhkan oleh masyarakat, khususnya
                                    masyarakat di sekitar pesantren dan daerah pinggiran yang
                                    selama ini kurang mendapatkan perhatian.
                                    <a href="{{ route('pakchobir') }}"> Baca lebih lanjut... </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end pa chobir -->

                <!-- pa ade -->
                <div class="card mb-3 mx-auto">
                    <div class="row g-0 justify-content-center">
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                            <img src="storage/img/pak ade.JPG" class="img-fluid rounded-1"
                                alt="AHMAD ZAMAKHSYARI SIDIQ, M.T" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h2 class="card-title">AHMAD ZAMAKHSYARI SIDIQ, M.T</h2>
                                <p class="card-text">
                                    Sekolah Tinggi Teknologi Cipasung (STT Cipasung) didirikan
                                    tahun 1997 dengan bantuan dan arahan dari tim Institut
                                    Teknologi Bandung. Sekolah tinggi ini didirikan untuk
                                    menjawab tantangan penyediaan tenaga ahli profesional dalam
                                    bidang keteknikan yang dibutuhkan oleh masyarakat, khususnya
                                    masyarakat di sekitar pesantren dan daerah pinggiran yang
                                    selama ini kurang mendapatkan perhatian.
                                    <a href="{{ route('pakade') }}"> Baca lebih lanjut... </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end pa ade -->
            </div>
            <!-- end content 2 biography -->

            <!-- content 3 faculty -->
            <div class="container text-center mb-5">
                <div class="facultas">
                    <h2>FACULTY</h2>
                </div>
                <!-- content split -->
                <div class="row align-items-center mt-5 justify-content-center">
                    <!-- content 3 Left -->
                    <div class="col-xl-6 mb-3 mb-sm-0 row-one">
                        <div class="card-faculty mx-auto">
                            <img src="storage/img/INFORMATIKA (1).png" alt="LOGO INFORMATIKA" class="logo-informatika" />
                            <div class="card-content">
                                <h2 class="if">INFORMATIKA</h2>
                            </div>
                            <p class="Informatika">
                                Di Jurusan Informatika kamu akan mempelajari berbagai prinsip
                                terkait ilmu komputer mulai dari proses perancangan,
                                pengembangan, pengujian, hingga evaluasi sistem operasi
                                perangkat lunak.
                            </p>
                            <a href="{{ route('if') }}" class="button text-light">
                                Find out more
                                <span class="material-symbols-outlined">arrow_right_alt</span>
                            </a>
                        </div>
                    </div>
                    <!-- end content Left -->

                    <!-- content 3 Right -->
                    <div class="col-xl-6 mb-3 mb-sm-0 row-two">
                        <div class="card-faculty mx-auto">
                            <img src="storage/img/TEKNIK INDUSRTRI.png" alt="LOGO TEKNIK INDUSTRI"
                                class="logo-teknik-industri" />
                            <div class="card-content">
                                <h2>TEKNIK INDUSTRI</h2>
                                <p>
                                    Keilmuan Teknik Industri lahir dari keinginan untuk
                                    memperbaiki sistem pekerjaan yang sudah ada. Itu dibuktikan
                                    dengan salah satu bahasan dalam keilmuan Teknik Industri
                                    yang menerapkan Plan, Do, Check, Action.
                                </p>
                                <a href="{{ route('ti') }}" class="button">
                                    Find out more
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end content Right -->
                </div>
                <!-- end content split -->
            </div>
            <!-- end content 3 faculty -->

            <!-- content 4 achievement -->
            <div class="prestasi">
                <h2>Prestasi Mahasiswa</h2>
            </div>
            <section class="articles">
                <article>
                    <div class="article-wrapper">
                        <figure>
                            <img src="storage/img/prestasi1.jpg" alt="" />
                        </figure>
                        <div class="article-body">
                            <h2>PMM 4</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam sequi iure quo
                                aspernatur
                                laboriosam magni aliquid dicta optio maiores, similique possimus, earum quis
                                assumenda!
                                Iste eos nam dolorum necessitatibus blanditiis!
                            </p>
                            <a href="#" class="read-more">
                                Selengkapnya <span class="sr-only">about this is some title</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
                <article>

                    <div class="article-wrapper">
                        <figure>
                            <img src="storage/img/prestasi2.jpg" alt="" />
                        </figure>
                        <div class="article-body">
                            <h2>Fahmi Ramatulloh</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga repudiandae sapiente
                                omnis
                                explicabo, eveniet nesciunt blanditiis repellendus error reiciendis sed, ipsa eum
                                corporis accusamus nemo earum delectus quibusdam sint temporibus.
                            </p>
                            <a href="#" class="read-more">
                                Selengkapnya <span class="sr-only">about this is some title</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
                <article>

                    <div class="article-wrapper">
                        <figure>
                            <img src="storage/img/prestasi3.jpg" alt="" />
                        </figure>
                        <div class="article-body">
                            <h2>Hikmal Akbar</h2>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, aliquam optio!
                                Repellat corporis quidem possimus ab eveniet dolorum perspiciatis numquam unde
                                expedita
                                maiores nobis cupiditate odit fugit incidunt, aliquam asperiores?
                            </p>
                            <a href="#" class="read-more">
                                Selengkapnya <span class="sr-only">about this is some title</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            </section>
            <!-- end content 4 achievement -->

            <!-- content 5 calendar -->
            <div class="container text-center mb-5">
                <div class="events">
                    <h2>Events and Academic Calendar</h2>
                </div>
                <div class="row">
                    <!-- content 5 split Left -->
                    <div class="col-lg-6 mt-3">
                        <div class="calendar sm bg-success text-light">
                            <header>
                                <h1></h1>
                                <nav>
                                    <button id="prev"></button>
                                    <button id="next"></button>
                                </nav>
                            </header>
                            <section>
                                <ul class="days text-light">
                                    <li>Sun</li>
                                    <li>Mon</li>
                                    <li>Tue</li>
                                    <li>Wed</li>
                                    <li>Thu</li>
                                    <li>Fri</li>
                                    <li>Sat</li>
                                </ul>
                                <ul class="dates text-light"></ul>
                            </section>
                        </div>
                    </div>
                    <!-- end content 5 split Left -->

                    <!-- content 5 split Right -->
                    <div class="col-lg-6 mt-3">
                        <!-- Card Pertama -->
                        <div class="accordion accordion-flush turun-naik" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed bg-success text-light d-flex justify-content-between"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                        <!-- Kolom Kiri: Judul -->
                                        <span> Seleksi Gelombang 1 </span>
                                        <!-- Kolom Kanan: Tanggal -->
                                        <span class="ms-auto"> 30 Februari 2025 </span>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body border border-success text-success">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s, when an unknown
                                        printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting,
                                        remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed bg-success text-light d-flex justify-content-between"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                        aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <!-- Kolom Kiri: Judul -->
                                        <span> Seleksi Gelombang 2 </span>
                                        <!-- Kolom Kanan: Tanggal -->
                                        <span class="ms-auto"> 31 Februari 2025 </span>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body border border-success text-success">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s, when an unknown
                                        printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting,
                                        remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed bg-success text-light d-flex justify-content-between"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                        aria-expanded="false" aria-controls="flush-collapseThree">
                                        <!-- Kolom Kiri: Judul -->
                                        <span> Seleksi Gelombang 3 </span>
                                        <!-- Kolom Kanan: Tanggal -->
                                        <span class="ms-auto"> 32 Februari 2025 </span>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body border border-success text-success">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s, when an unknown
                                        printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting,
                                        remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed bg-success text-light d-flex justify-content-between"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                        aria-expanded="false" aria-controls="flush-collapseFour">
                                        <!-- Kolom Kiri: Judul -->
                                        <span> Seleksi Gelombang 4 </span>
                                        <!-- Kolom Kanan: Tanggal -->
                                        <span class="ms-auto"> 30 Februari 2025 </span>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body border border-success text-success">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s, when an unknown
                                        printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting,
                                        remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed bg-success text-light d-flex justify-content-between"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                        aria-expanded="false" aria-controls="flush-collapseFive">
                                        <!-- Kolom Kiri: Judul -->
                                        <span> Seleksi Gelombang 5 </span>
                                        <!-- Kolom Kanan: Tanggal -->
                                        <span class="ms-auto"> 30 Februari 2025 </span>
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body border border-success text-success">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s, when an unknown
                                        printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting,
                                        remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed bg-success text-light d-flex justify-content-between"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                        aria-expanded="false" aria-controls="flush-collapseSix">
                                        <!-- Kolom Kiri: Judul -->
                                        <span> Seleksi Gelombang 6 </span>
                                        <!-- Kolom Kanan: Tanggal -->
                                        <span class="ms-auto"> 30 Februari 2025 </span>
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body border border-success text-success">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s, when an unknown
                                        printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting,
                                        remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed bg-success text-light d-flex justify-content-between"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven"
                                        aria-expanded="false" aria-controls="flush-collapseSeven">
                                        <!-- Kolom Kiri: Judul -->
                                        <span> Seleksi Gelombang 7 </span>
                                        <!-- Kolom Kanan: Tanggal -->
                                        <span class="ms-auto"> 30 Februari 2025 </span>
                                    </button>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body border border-success text-success">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s, when an unknown
                                        printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting,
                                        remaining essentially unchanged.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end content 5 split Right -->
                </div>
            </div>
            <!-- end content 5 calendar -->

            <!-- content 6 ukm -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#00cba9" fill-opacity="1"
                    d="M0,96L60,101.3C120,107,240,117,360,144C480,171,600,213,720,224C840,235,960,213,1080,186.7C1200,160,1320,128,1380,112L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
                </path>
            </svg>
            <div class="ukm">
                <h2>Unit Kegiatan Mahasiswa</h2>
            </div>
            <div class="row align-items-center mt-5 justify-content-center">
                <!-- HMIF Section -->
                <div class="card-container">
                    <div class="card-ukm">
                        <h2>HMIF</h2>
                        <img src="storage/img/hmif.png" alt="Logo HMIF" class="ormawa" />
                        <p>
                            Kegiatan ekstrakurikuler atau ekskul adalah kegiatan tambahan
                            yang dilakukan di luar jam pelajaran yang dilakukan baik di
                            sekolah atau di luar sekolah dengan tujuan untuk mendapatkan
                            tambahan pengetahuan, keterampilan dan wawasan serta membantu
                            membentuk karakter peserta didik sesuai dengan minat dan bakat
                            masing-masing.
                            <a href="https://example.com">Baca lebih lanjut...</a>
                        </p>
                    </div>

                    <div class="card-ukm">
                        <h2>BEM</h2>
                        <img src="storage/img/bem.png" alt="Logo BEM" class="ormawa" />
                        <p>
                            Kegiatan ekstrakurikuler atau ekskul adalah kegiatan tambahan
                            yang dilakukan di luar jam pelajaran yang dilakukan baik di
                            sekolah atau di luar sekolah dengan tujuan untuk mendapatkan
                            tambahan pengetahuan, keterampilan dan wawasan serta membantu
                            membentuk karakter peserta didik sesuai dengan minat dan bakat
                            masing-masing.
                            <a href="https://example.com">Baca lebih lanjut...</a>
                        </p>
                    </div>

                    <div class="card-ukm">
                        <h2>HMTI</h2>
                        <img src="storage/img/TEKNIK INDUSRTRI.png" alt="Logo HMTI" class="ormawa" />
                        <p>
                            Kegiatan ekstrakurikuler atau ekskul adalah kegiatan tambahan
                            yang dilakukan di luar jam pelajaran yang dilakukan baik di
                            sekolah atau di luar sekolah dengan tujuan untuk mendapatkan
                            tambahan pengetahuan, keterampilan dan wawasan serta membantu
                            membentuk karakter peserta didik sesuai dengan minat dan bakat
                            masing-masing.
                            <a href="https://example.com">Baca lebih lanjut...</a>
                        </p>
                    </div>

                    <div class="card-ukm">
                        <h2>KELAPA</h2>
                        <img src="storage/img/kelapa.png" alt="Logo KELAPA" class="ormawa" />
                        <p>
                            Kegiatan ekstrakurikuler atau ekskul adalah kegiatan tambahan
                            yang dilakukan di luar jam pelajaran yang dilakukan baik di
                            sekolah atau di luar sekolah dengan tujuan untuk mendapatkan
                            tambahan pengetahuan, keterampilan dan wawasan serta membantu
                            membentuk karakter peserta didik sesuai dengan minat dan bakat
                            masing-masing.
                            <a href="https://example.com">Baca lebih lanjut...</a>
                        </p>
                    </div>

                    <div class="card-ukm">
                        <h2>PROCLUB</h2>
                        <img src="storage/img/proclub.png" alt="Logo PROCLUB" class="ormawa" />
                        <p>
                            Kegiatan ekstrakurikuler atau ekskul adalah kegiatan tambahan
                            yang dilakukan di luar jam pelajaran yang dilakukan baik di
                            sekolah atau di luar sekolah dengan tujuan untuk mendapatkan
                            tambahan pengetahuan, keterampilan dan wawasan serta membantu
                            membentuk karakter peserta didik sesuai dengan minat dan bakat
                            masing-masing.
                            <a href="https://example.com">Baca lebih lanjut...</a>
                        </p>
                    </div>

                    <div class="card-ukm">
                        <h2>KDD</h2>
                        <img src="storage/img/LOGO-LOGO.png" alt="Logo KDD" class="ormawa" />
                        <p>
                            Kegiatan ekstrakurikuler atau ekskul adalah kegiatan tambahan
                            yang dilakukan di luar jam pelajaran yang dilakukan baik di
                            sekolah atau di luar sekolah dengan tujuan untuk mendapatkan
                            tambahan pengetahuan, keterampilan dan wawasan serta membantu
                            membentuk karakter peserta didik sesuai dengan minat dan bakat
                            masing-masing.
                            <a href="https://example.com">Baca lebih lanjut...</a>
                        </p>
                    </div>

                    <div class="card-ukm">
                        <h2>RILIS</h2>
                        <img src="storage/img/rilis.png" alt="Logo RILIS" class="ormawa" />
                        <p>
                            Kegiatan ekstrakurikuler atau ekskul adalah kegiatan tambahan
                            yang dilakukan di luar jam pelajaran yang dilakukan baik di
                            sekolah atau di luar sekolah dengan tujuan untuk mendapatkan
                            tambahan pengetahuan, keterampilan dan wawasan serta membantu membentuk karakter peserta
                            didik sesuai dengan minat dan bakat masing-masing.
                            <a href="https://example.com">Baca lebih lanjut...</a>
                        </p>
                    </div>

                    <div class="card-ukm">
                        <h2>SANGGAR</h2>
                        <img src="storage/img/terasi.png" alt="Logo SANGGAR" class="ormawa" />
                        <p>
                            Kegiatan ekstrakurikuler atau ekskul adalah kegiatan tambahan
                            yang dilakukan di luar jam pelajaran yang dilakukan baik di
                            sekolah atau di luar sekolah dengan tujuan untuk mendapatkan
                            tambahan pengetahuan, keterampilan dan wawasan serta membantu
                            membentuk karakter peserta didik sesuai dengan minat dan bakat
                            masing-masing.
                            <a href="https://example.com">Baca lebih lanjut...</a>
                        </p>
                    </div>

                    <div class="card-ukm">
                        <h2>OLAHRAGA</h2>
                        <img src="storage/img/olahraga.jpg" alt="Logo OLAHRAGA" class="ormawa" />
                        <p>
                            Kegiatan ekstrakurikuler atau ekskul adalah kegiatan tambahan
                            yang dilakukan di luar jam pelajaran yang dilakukan baik di
                            sekolah atau di luar sekolah dengan tujuan untuk mendapatkan
                            tambahan pengetahuan, keterampilan dan wawasan serta membantu
                            membentuk karakter peserta didik sesuai dengan minat dan bakat
                            masing-masing.
                            <a href="https://example.com">Baca lebih lanjut...</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#00cba9" fill-opacity="1"
                d="M0,96L60,101.3C120,107,240,117,360,144C480,171,600,213,720,224C840,235,960,213,1080,186.7C1200,160,1320,128,1380,112L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
        <!-- end content 6 ukm -->



        <hr class="my-4" style="border: 1px solid #ccc; width: 90%; margin: auto" />

        <!-- content 8 news -->
        <div class="news-container">
            <div class="header">
                <h2>Latest News</h2>
                <div class="navigation">
                    <button class="nav-btn prev" aria-label="Previous">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m15 18-6-6 6-6" />
                        </svg>
                    </button>
                    <button class="nav-btn next" aria-label="Next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="slider-wrapper">
                <div class="slider">
                    <!-- news 1 -->
                    <a href="path/to/article.html" class="text-decoration-none">
                        <article class="news-card">
                            <div class="image-container">
                                <img src="https://images.unsplash.com/photo-1509391366360-2e959784a276?w=800&q=80"
                                    alt="Solar Technology" />
                                <span class="category"> Academics </span>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <span class="date"> Mar 15, 2024 </span>
                                    <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M7 17L17 7" />
                                        <path d="M7 7h10v10" />
                                    </svg>
                                </div>
                                <h3>
                                    The Future of Sustainable Energy: Breakthrough in Solar
                                    Technology
                                </h3>
                                <p>
                                    Scientists discover new material that could revolutionize
                                    solar panel efficiency, promising a greener future for
                                    energy production.
                                </p>
                            </div>
                        </article>
                    </a>

                    <!-- end news 1 -->

                    <!-- news 2 -->
                    <a href="path/to/article.html" class="text-decoration-none">
                        <article class="news-card">
                            <div class="image-container">
                                <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=800&q=80"
                                    alt="AI Summit" />
                                <span class="category"> Business </span>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <span class="date"> Mar 14, 2024 </span>
                                    <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M7 17L17 7" />
                                        <path d="M7 7h10v10" />
                                    </svg>
                                </div>
                                <h3>Global Economic Summit Addresses AI Integration</h3>
                                <p>
                                    World leaders gather to discuss the impact of artificial
                                    intelligence on global economies and workforce
                                    transformation.
                                </p>
                            </div>
                        </article>
                    </a>
                    <!-- end news 2 -->

                    <!-- news 3 -->
                    <a href="path/to/article.html" class="text-decoration-none">
                        <article class="news-card">
                            <div class="image-container">
                                <img src="https://images.unsplash.com/photo-1597239450996-ea7c2c564412?w=800&q=80"
                                    alt="Amazon Discovery" />
                                <span class="category"> Science </span>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <span class="date"> Mar 13, 2024 </span>
                                    <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M7 17L17 7" />
                                        <path d="M7 7h10v10" />
                                    </svg>
                                </div>
                                <h3>Revolutionary Health Discovery in Amazon Rainforest</h3>
                                <p>
                                    Researchers identify new plant species with potential
                                    breakthrough applications in medicine.
                                </p>
                            </div>
                        </article>
                    </a>
                    <!-- end news 3 -->

                    <!-- news 4 -->
                    <a href="path/to/article.html" class="text-decoration-none">
                        <article class="news-card">
                            <div class="image-container">
                                <img src="https://images.unsplash.com/photo-1446776811953-b23d57bd21aa?w=800&q=80"
                                    alt="Space Tourism" />
                                <span class="category"> Space </span>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <span class="date"> Mar 12, 2024 </span>
                                    <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M7 17L17 7" />
                                        <path d="M7 7h10v10" />
                                    </svg>
                                </div>
                                <h3>
                                    Space Tourism Takes Off: First Commercial Flight Success
                                </h3>
                                <p>
                                    Private space company achieves milestone with successful
                                    civilian space tourism mission.
                                </p>
                            </div>
                        </article>
                    </a>
                    <!-- end news 4 -->

                    <!-- news 5 -->
                    <a href="path/to/article.html" class="text-decoration-none">
                        <article class="news-card">
                            <div class="image-container">
                                <img src="https://images.unsplash.com/photo-1561740331-0bdf176a7878?w=800&q=80"
                                    alt="Digital Art" />
                                <span class="category"> Arts </span>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <span class="date"> Mar 11, 2024 </span>
                                    <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M7 17L17 7" />
                                        <path d="M7 7h10v10" />
                                    </svg>
                                </div>
                                <h3>Cultural Renaissance: Digital Art Movement Explodes</h3>
                                <p>
                                    NFT art market reaches new heights as traditional
                                    galleries embrace digital exhibitions.
                                </p>
                            </div>
                        </article>
                    </a>
                    <!-- end news 5 -->

                    <!-- news 6 -->
                    <a href="path/to/article.html" class="text-decoration-none">
                        <article class="news-card">
                            <div class="image-container">
                                <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=800&q=80"
                                    alt="Quantum Computing" />
                                <span class="category"> Technology </span>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <span class="date"> Mar 10, 2024 </span>
                                    <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M7 17L17 7" />
                                        <path d="M7 7h10v10" />
                                    </svg>
                                </div>
                                <h3>Breakthrough in Quantum Computing Achievement</h3>
                                <p>
                                    Tech giant announces major quantum computing milestone,
                                    solving complex problems in seconds.
                                </p>
                            </div>
                        </article>
                    </a>
                    <!-- end news 6 -->

                    <!-- news 7 -->
                    <a href="path/to/article.html" class="text-decoration-none">
                        <article class="news-card">
                            <div class="image-container">
                                <img src="https://images.unsplash.com/photo-1484291470158-b8f8d608850d?w=800&q=80"
                                    alt="Ocean Cleanup" />
                                <span class="category"> Environment </span>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <span class="date"> Mar 9, 2024 </span>
                                    <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M7 17L17 7" />
                                        <path d="M7 7h10v10" />
                                    </svg>
                                </div>
                                <h3>Ocean Cleanup Initiative Shows Promising Results</h3>
                                <p>
                                    Innovative ocean cleaning technology removes 100,000 tons
                                    of plastic in pioneering mission.
                                </p>
                            </div>
                        </article>
                    </a>
                    <!-- end news 7 -->

                    <!-- news 8 -->
                    <a href="path/to/article.html" class="text-decoration-none">
                        <article class="news-card">
                            <div class="image-container">
                                <img src="https://images.unsplash.com/photo-1494522855154-9297ac14b55f?w=800&q=80"
                                    alt="Transportation" />
                                <span class="category"> Innovation </span>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <span class="date"> Mar 8, 2024 </span>
                                    <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M7 17L17 7" />
                                        <path d="M7 7h10v10" />
                                    </svg>
                                </div>
                                <h3>Revolutionary Transportation System Unveiled</h3>
                                <p>
                                    New high-speed transport system promises to revolutionize
                                    intercity travel.
                                </p>
                            </div>
                        </article>
                    </a>
                    <!-- end news 8 -->

                    <!-- news 9 -->
                    <a href="path/to/article.html" class="text-decoration-none">
                        <article class="news-card">
                            <div class="image-container">
                                <img src="https://images.unsplash.com/photo-1466611653911-95081537e5b7?w=800&q=80"
                                    alt="Energy Storage" />
                                <span class="category"> Energy </span>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <span class="date"> Mar 7, 2024 </span>
                                    <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M7 17L17 7" />
                                        <path d="M7 7h10v10" />
                                    </svg>
                                </div>
                                <h3>Breakthrough in Renewable Energy Storage</h3>
                                <p>
                                    Scientists develop new battery technology that could solve
                                    renewable energy storage challenges.
                                </p>
                            </div>
                        </article>
                    </a>
                    <!-- end news 9 -->

                    <!-- news 10 -->
                    <a href="path/to/article.html" class="text-decoration-none">
                        <article class="news-card">
                            <div class="image-container">
                                <img src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?w=800&q=80"
                                    alt="Digital Education" />
                                <span class="category"> Education </span>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <span class="date"> Mar 6, 2024 </span>
                                    <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M7 17L17 7" />
                                        <path d="M7 7h10v10" />
                                    </svg>
                                </div>
                                <h3>Global Initiative for Digital Education Access</h3>
                                <p>
                                    Worldwide program launches to provide digital education
                                    resources to remote communities.
                                </p>
                            </div>
                        </article>
                    </a>
                    <!-- end news 10 -->
                </div>
            </div>
        </div>
        <!-- end content 8 news -->
        </div>
        <!-- end content -->
    </main>
    <!-- end main -->

    <hr class="my-4" />



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header bg-success text-light">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Subscription our news for
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body bg-success text-light">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">
                                Recipient:
                            </label>
                            <input type="text" class="form-control" id="recipient-name"
                                placeholder="Enter your email" />
                        </div>
                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer bg-success text-light">
                    <button type="button" class="btn btn-primary">Send</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- end footer 1 -->

    <hr class="my-4" />
@endsection
