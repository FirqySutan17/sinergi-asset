<section class="page-hero">

    <div class="container">

        <div class="page-hero__content">

            <span class="page-hero__subtitle">

                PROPERTY PORTFOLIO

            </span>

            <h1>

                Discover Commercial &
                Investment Properties

            </h1>

            <nav class="breadcrumb">

                <a href="<?= site_url();?>">

                    Home

                </a>

                <span>/</span>

                <span>

                    Properties

                </span>

            </nav>

        </div>

    </div>

</section>

<section class="property-filter">

    <div class="container">

        <div class="property-filter__wrapper">

            <div class="row g-3 align-items-end">

                <div class="col-lg-5">

                    <label>Keyword</label>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Search property...">

                </div>

                <div class="col-lg-3">

                    <label>Category</label>

                    <select class="form-select">

                        <option>All Categories</option>

                    </select>

                </div>

                <div class="col-lg-2">

                    <label>Location</label>

                    <select class="form-select">

                        <option>All Location</option>

                    </select>

                </div>

                <div class="col-lg-2">

                    <button class="btn btn-gold w-100">
                        <i class="bi bi-search me-2"></i>
                        Search
                    </button>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ==========================================================
PROPERTY RESULT
========================================================== -->

<section class="property-result-section">

    <div class="container">

        <div class="property-result-header">

            <div class="property-result-left">

                <span class="section-subtitle">
                    OUR PORTFOLIO
                </span>

                <h2 class="section-title">
                    Explore Our Properties
                </h2>

                <p class="section-description">
                    Showing <strong>9</strong> of <strong>24</strong> available properties.
                </p>

            </div>

            <div class="property-result-right">

                <label>Sort by</label>

                <select class="form-select">

                    <option>Latest</option>
                    <option>Name A-Z</option>
                    <option>Name Z-A</option>

                </select>

            </div>

        </div>

    </div>

</section>

<!-- ==========================================================
FEATURED PROPERTY BANNER
========================================================== -->

<section class="property-featured-banner">

    <div class="container">

        <a href="<?= site_url('property-detail'); ?>"
           class="property-featured-banner__wrapper">

            <div class="property-featured-banner__content">

                <div class="property-featured-banner__label">

                    <i class="bi bi-star-fill"></i>

                    <span>FEATURED PROPERTY</span>

                </div>

                <div class="property-featured-banner__info">

                    <h3>Premium Office Tower</h3>

                    <div class="property-featured-banner__meta">

                        <span>
                            <i class="bi bi-geo-alt"></i>
                            South Jakarta
                        </span>

                        <span class="property-featured-banner__dot"></span>

                        <span>
                            Grade A Office
                        </span>

                    </div>

                </div>

            </div>

            <div class="property-featured-banner__action">

                <span>Explore Property</span>

                <div class="property-featured-banner__arrow">

                    <i class="bi bi-arrow-up-right"></i>

                </div>

            </div>

        </a>

    </div>

</section>

<!-- ==========================================================
PROPERTY GRID
========================================================== -->

<?php

$properties = [

    [
        'title'     => 'Premium Office Tower',
        'category'  => 'Commercial Office',
        'location'  => 'South Jakarta',
        'class'     => 'Grade A Office',
        'label'     => 'Premium Asset',
        'image'     => 'hero-building.jpg'
    ],

    [
        'title'     => 'Cikarang Logistics Hub',
        'category'  => 'Industrial Asset',
        'location'  => 'Bekasi',
        'class'     => 'Modern Warehouse',
        'label'     => 'Industrial Asset',
        'image'     => 'hero-building.jpg'
    ],

    [
        'title'     => 'BSD Business Park',
        'category'  => 'Business Property',
        'location'  => 'Tangerang',
        'class'     => 'Business Complex',
        'label'     => 'Commercial Asset',
        'image'     => 'hero-building.jpg'
    ],

    [
        'title'     => 'Strategic Commercial Land',
        'category'  => 'Commercial Land',
        'location'  => 'Tangerang',
        'class'     => 'Development Land',
        'label'     => 'Investment Asset',
        'image'     => 'hero-building.jpg'
    ],

    [
        'title'     => 'Premium Retail Center',
        'category'  => 'Retail Space',
        'location'  => 'Jakarta',
        'class'     => 'Commercial Retail',
        'label'     => 'Commercial Asset',
        'image'     => 'hero-building.jpg'
    ],

    [
        'title'     => 'Integrated Mixed-Use Building',
        'category'  => 'Mixed Use',
        'location'  => 'Surabaya',
        'class'     => 'Office & Retail',
        'label'     => 'Premium Asset',
        'image'     => 'hero-building.jpg'
    ]

];

?>

<!-- ==========================================================
PROPERTY GRID
========================================================== -->

<section class="property-grid">

    <div class="container">

        <div class="row gx-4 gy-5">

            <?php foreach ($properties as $property): ?>

                <div class="col-lg-4 col-md-6">

                    <a href="<?= site_url('property-detail'); ?>"
                       class="property-card">

                        <!-- Image -->

                        <div class="property-card__image">

                            <img
                                src="<?= base_url(
                                    'assets/frontend/img/' .
                                    $property['image']
                                ); ?>"
                                alt="<?= htmlspecialchars(
                                    $property['title'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ); ?>">

                            <div class="property-card__overlay"></div>

                        </div>


                        <!-- Floating Category -->

                        <div class="property-card__category">

                            <?= htmlspecialchars(
                                $property['category'],
                                ENT_QUOTES,
                                'UTF-8'
                            ); ?>

                        </div>


                        <!-- Content -->

                        <div class="property-card__content">

                            <span class="property-card__label">

                                <?= htmlspecialchars(
                                    $property['label'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ); ?>

                            </span>

                            <h3 class="property-card__title">

                                <?= htmlspecialchars(
                                    $property['title'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ); ?>

                            </h3>


                            <div class="property-card__location">

                                <i class="bi bi-geo-alt-fill"></i>

                                <span>

                                    <?= htmlspecialchars(
                                        $property['location'],
                                        ENT_QUOTES,
                                        'UTF-8'
                                    ); ?>

                                </span>

                            </div>


                            <!-- <div class="property-card__meta">

                                <?= htmlspecialchars(
                                    $property['class'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ); ?>

                            </div> -->


                            <div class="property-card__footer">

                                <span>View Property</span>

                                <div class="property-card__arrow">

                                    <i class="bi bi-arrow-up-right"></i>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>

<!-- ==========================================================
PROPERTY PAGINATION
========================================================== -->

<nav class="property-pagination"
     aria-label="Property pagination">

    <a href="#"
       class="property-pagination__button property-pagination__arrow"
       aria-label="Previous page">

        <i class="bi bi-chevron-left"></i>

    </a>

    <a href="#"
       class="property-pagination__button active">

        1

    </a>

    <a href="#"
       class="property-pagination__button">

        2

    </a>

    <a href="#"
       class="property-pagination__button">

        3

    </a>

    <span class="property-pagination__dots">

        ...

    </span>

    <a href="#"
       class="property-pagination__button">

        8

    </a>

    <a href="#"
       class="property-pagination__button property-pagination__arrow"
       aria-label="Next page">

        <i class="bi bi-chevron-right"></i>

    </a>

</nav>


