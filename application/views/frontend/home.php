<!-- HERO SECTION -->
<section class="hero-section">

    <div class="hero-overlay">

        <div class="container">

            <div class="row align-items-center min-vh-100">

                <div class="col-lg-6">

                    <div data-aos="fade-right">

                        <h1 class="hero-title">

                            Solusi Terintegrasi
                            untuk Pengelolaan Aset,
                            Properti dan
                            Konsultasi Bisnis

                        </h1>

                        <p class="hero-subtitle">

                            PT Sinergi Aset Jagat Integrasi hadir sebagai
                            mitra strategis dalam pengelolaan aset,
                            properti, legal dan solusi bisnis yang
                            memberikan nilai maksimal bagi setiap klien.

                        </p>

                        <div class="hero-buttons">

                            <a href="#property"
                                class="btn btn-gold">

                                Lihat Properti

                            </a>

                            <a href="#contact"
                                class="btn btn-outline-light">

                                Konsultasi Sekarang

                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6 text-end">
                    <img
                        src="<?= base_url('assets/frontend/img/hero-building.jpg') ?>"
                        class="hero-image">
                </div>

            </div>

        </div>

    </div>

</section>

<!-- STATISTIK SECTION -->
 <section class="stats-section">

    <div class="container">

        <div class="row text-center">

            <div class="col-md-3">

                <div class="stat-box">

                    <i class="fa-solid fa-building"></i>

                    <h3>150+</h3>

                    <p>Properti Dikelola</p>

                </div>

            </div>

            <div class="col-md-3">

                <div class="stat-box">

                    <i class="fa-solid fa-coins"></i>

                    <h3>250+</h3>

                    <p>Aset & Agunan</p>

                </div>

            </div>

            <div class="col-md-3">

                <div class="stat-box">

                    <i class="fa-solid fa-users"></i>

                    <h3>80+</h3>

                    <p>Klien Korporasi</p>

                </div>

            </div>

            <div class="col-md-3">

                <div class="stat-box">

                    <i class="fa-solid fa-chart-column"></i>

                    <h3>500 M</h3>

                    <p>Nilai Aset</p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ABOUT SECTION -->
<section class="section">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-5">

                <h2 class="mb-4">

                Tentang Kami

                </h2>

                <p>

                PT Sinergi Aset Jagat Integrasi merupakan perusahaan yang bergerak di bidang pengelolaan aset, properti, konsultasi bisnis, manajemen properti, legal support dan recovery solution.

                </p>

                <p>

                Kami berkomitmen memberikan solusi terintegrasi yang profesional, terpercaya dan berorientasi pada hasil terbaik bagi klien.

                </p>

                <a href="#"
                    class="btn btn-gold">

                    Selengkapnya

                </a>

            </div>

            <div class="col-lg-7">

                <img src="<?= base_url('assets/frontend/img/about-office.png') ?>"
                class="img-fluid rounded-4 shadow-lg about-image">

            </div>

        </div>

    </div>
</section>

<!-- SERVICE SECTION -->
<section class="section bg-light">
    <div class="container">

        <div class="section-title">

            <h2>

            Layanan Kami

            </h2>

        </div>

        <div class="row g-4">

            <?php

                $services = [

                [
                'icon'=>'fa-chart-line',
                'title'=>'Konsultasi Bisnis'
                ],

                [
                'icon'=>'fa-building',
                'title'=>'Manajemen Properti'
                ],

                [
                'icon'=>'fa-coins',
                'title'=>'Pengelolaan Aset'
                ],

                [
                'icon'=>'fa-scale-balanced',
                'title'=>'Legal Advisory'
                ],

                [
                'icon'=>'fa-handshake',
                'title'=>'Recovery Solution'
                ]

                ];

                foreach($services as $service):?>

                    <div class="col-lg">

                        <div class="service-card">

                            <i class="fa-solid <?= $service['icon'] ?>"></i>

                            <h5>

                            <?= $service['title'] ?>

                            </h5>

                            <p>

                            Solusi profesional dan strategis
                            untuk kebutuhan bisnis Anda.

                            </p>

                        </div>

                    </div>

                <?php endforeach; ?>

        </div>

    </div>
</section>

<!-- PROPERTY SECTION -->
<section class="section" id="property">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-5">

            <h2>

            Properti Unggulan

            </h2>

            <a href="#">

            Lihat Semua Properti →

            </a>

        </div>

        <div class="swiper propertySwiper">

            <div class="swiper-wrapper">

                <?php for($i=1;$i<=6;$i++): ?>

                    <div class="swiper-slide">
                        <div class="property-card">

                            <img src="https://picsum.photos/600/400?random=<?= $i ?>" class="img-fluid">

                            <div class="property-body">

                                <span class="badge bg-warning text-dark">

                                DIJUAL

                                </span>

                                <h5>

                                Ruko Strategis Jakarta Selatan

                                </h5>

                                <p>

                                Jakarta Selatan

                                </p>

                                <h4>

                                Rp 4.500.000.000

                                </h4>

                                <a href="#"
                                class="btn btn-outline-dark w-100">

                                Lihat Detail

                                </a>

                            </div>

                        </div>
                    </div>

                <?php endfor; ?>

            </div>

        </div>
    </div>
</section>

<!-- WHY US SECTION -->
<section class="why-us-section">

    <div class="container">

        <div class="section-title">

            <h2>Mengapa Memilih Kami</h2>

            <p>
                Kami memberikan solusi yang profesional,
                terintegrasi dan berorientasi hasil.
            </p>

        </div>

        <div class="row">

            <div class="col-lg-2 col-md-4 col-6">

                <div class="why-card">

                    <i class="fa-solid fa-user-tie"></i>

                    <h6>Profesional</h6>

                    <small>
                        Tim berpengalaman dan kompeten.
                    </small>

                </div>

            </div>

            <div class="col-lg-2 col-md-4 col-6">

                <div class="why-card">

                    <i class="fa-solid fa-shield-halved"></i>

                    <h6>Terpercaya</h6>

                    <small>
                        Menjaga integritas dan kerahasiaan.
                    </small>

                </div>

            </div>

            <div class="col-lg-2 col-md-4 col-6">

                <div class="why-card">

                    <i class="fa-solid fa-network-wired"></i>

                    <h6>Terintegrasi</h6>

                    <small>
                        Semua solusi dalam satu layanan.
                    </small>

                </div>

            </div>

            <div class="col-lg-2 col-md-4 col-6">

                <div class="why-card">

                    <i class="fa-solid fa-chart-line"></i>

                    <h6>Strategis</h6>

                    <small>
                        Pendekatan berbasis hasil.
                    </small>

                </div>

            </div>

            <div class="col-lg-2 col-md-4 col-6">

                <div class="why-card">

                    <i class="fa-solid fa-bullseye"></i>

                    <h6>Berorientasi Hasil</h6>

                    <small>
                        Fokus pada tujuan klien.
                    </small>

                </div>

            </div>

            <div class="col-lg-2 col-md-4 col-6">

                <div class="why-card">

                    <i class="fa-solid fa-star"></i>

                    <h6>Layanan Prima</h6>

                    <small>
                        Responsif dan profesional.
                    </small>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ARTICLE SECTION -->
<section class="section article-section">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-5">

            <h2>Artikel Terbaru</h2>

            <a href="#">
                Lihat Semua Artikel →
            </a>

        </div>

        <div class="row">

            <?php for($i=1;$i<=3;$i++): ?>

            <div class="col-lg-4">

                <div class="article-card">

                    <img src="https://picsum.photos/600/350?random=<?= $i+20 ?>">

                    <div class="article-content">

                        <span class="article-category">

                            Investasi

                        </span>

                        <h5>

                            Tips Investasi Properti yang Menguntungkan

                        </h5>

                        <p>

                            Strategi investasi properti untuk
                            memperoleh keuntungan maksimal.

                        </p>

                        <a href="#">

                            Baca Selengkapnya →

                        </a>

                    </div>

                </div>

            </div>

            <?php endfor; ?>

        </div>

    </div>

</section>

<!-- CTA SECTION -->
<section class="cta-section">

    <div class="cta-overlay">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-8">

                    <h2>

                        Butuh Solusi Pengelolaan Aset,
                        Properti atau Konsultasi Bisnis?

                    </h2>

                    <p>

                        Tim kami siap membantu Anda
                        mencapai hasil terbaik.

                    </p>

                </div>

                <div class="col-lg-4 text-lg-end">

                    <a href="#"
                        class="btn btn-gold btn-lg">

                        Hubungi Kami Sekarang

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>