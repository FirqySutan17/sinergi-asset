<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= isset($title) ? $title : 'PT Sinergi Aset Jagat Integrasi'; ?></title>

    <meta name="description"
        content="PT Sinergi Aset Jagat Integrasi - Solusi Pengelolaan Aset, Properti, Legal dan Konsultasi Bisnis">

    <link rel="icon" href="<?= base_url('assets/frontend/favicon.png') ?>">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        rel="stylesheet">

    <!-- Swiper -->
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        rel="stylesheet">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css"
        rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href="<?= base_url('assets/frontend/style.css') ?>"
        rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-custom">

    <div class="container">

        <a class="navbar-brand d-flex align-items-center"
            href="<?= base_url() ?>">

            <img src="<?= base_url('assets/frontend/img/logo.png') ?>"
                class="logo me-2">

        </a>

        <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainMenu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse"
            id="mainMenu">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link active"
                        href="<?= base_url() ?>">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                        href="#">
                        Tentang Kami
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                        href="#">
                        Layanan
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                        href="#">
                        Properti
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                        href="#">
                        Aset & Agunan
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                        href="#">
                        Artikel
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                        href="#">
                        Kontak
                    </a>
                </li>

                <li class="nav-item ms-lg-3">

                    <a href="#"
                        class="btn btn-gold">

                        <i class="fa-solid fa-phone me-2"></i>
                        Konsultasi Sekarang

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>