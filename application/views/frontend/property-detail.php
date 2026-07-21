<?php

// Temporary dummy data
// Nanti diganti dari database

$property = [

    'title' => 'Premium Office Tower',

    'category' => 'Commercial Office',

    'location' => 'South Jakarta',

    'class' => 'Grade A Office',

    'status' => 'Available',

    'building_area' => '12,500 m²',

    'land_area' => '4,800 m²',

    'ownership' => 'Strata Title',

    'description' => '
        A premium commercial office property strategically
        located in South Jakarta, designed to support modern
        business operations and long-term investment value.

        The property offers professional-grade facilities,
        excellent accessibility, and a strategic location
        within one of Jakarta\'s established commercial
        districts.
    ',

    'images' => [

        'hero-building.jpg',
        'hero-building.jpg',
        'hero-building.jpg',
        'hero-building.jpg',
        'hero-building.jpg'

    ]

];

?>


<!-- ==========================================================
PROPERTY DETAIL HEADER
========================================================== -->

<section class="property-detail-header">

    <div class="container">

        <!-- Breadcrumb -->

        <nav class="property-breadcrumb">

            <a href="<?= site_url(); ?>">

                Home

            </a>

            <i class="bi bi-chevron-right"></i>

            <a href="<?= site_url('properties'); ?>">

                Properties

            </a>

            <i class="bi bi-chevron-right"></i>

            <span>

                <?= $property['title']; ?>

            </span>

        </nav>


        <!-- Property Header -->

        <div class="property-detail-header__content">

            <div class="property-detail-header__main">

                <span class="property-detail-header__category">

                    <?= $property['category']; ?>

                </span>

                <h1>

                    <?= $property['title']; ?>

                </h1>

                <div class="property-detail-header__meta">

                    <span>

                        <i class="bi bi-geo-alt-fill"></i>

                        <?= $property['location']; ?>

                    </span>

                    <span class="property-detail-header__dot"></span>

                    <span>

                        <?= $property['class']; ?>

                    </span>

                </div>

            </div>


            <!-- Header Action -->

            <div class="property-detail-header__actions">

                <button
                    type="button"
                    class="property-action-button"
                    aria-label="Share property">

                    <i class="bi bi-share"></i>

                </button>

                <a
                    href="#property-inquiry"
                    class="property-detail-header__contact">

                    Contact About Property

                    <i class="bi bi-arrow-down"></i>

                </a>

            </div>

        </div>

    </div>

</section>

<!-- ==========================================================
PROPERTY GALLERY
========================================================== -->

<section class="property-gallery">

    <div class="container">

        <div class="property-gallery__grid">


            <!-- ==================================================
            MAIN IMAGE
            ================================================== -->

            <div
                class="property-gallery__item property-gallery__main"
                data-open-gallery="0">

                <img
                    src="<?= base_url(
                        'assets/frontend/img/' .
                        $property['images'][0]
                    ); ?>"
                    alt="<?= htmlspecialchars($property['title']); ?>"
                    data-gallery-index="0">

                <div class="property-gallery__overlay"></div>

                <button
                    type="button"
                    class="property-gallery__expand"
                    data-open-gallery="0"
                    aria-label="Open Gallery">

                    <i class="bi bi-arrows-fullscreen"></i>

                </button>

            </div>


            <!-- ==================================================
            SIDE IMAGES
            ================================================== -->

            <div class="property-gallery__side">


                <!-- Image 2 -->

                <div
                    class="property-gallery__item"
                    data-open-gallery="1">

                    <img
                        src="<?= base_url(
                            'assets/frontend/img/' .
                            $property['images'][1]
                        ); ?>"
                        alt="<?= htmlspecialchars($property['title']); ?>"
                        data-gallery-index="1">

                    <div class="property-gallery__overlay"></div>

                </div>


                <!-- Image 3 -->

                <div
                    class="property-gallery__item"
                    data-open-gallery="2">

                    <img
                        src="<?= base_url(
                            'assets/frontend/img/' .
                            $property['images'][2]
                        ); ?>"
                        alt="<?= htmlspecialchars($property['title']); ?>"
                        data-gallery-index="2">

                    <div class="property-gallery__overlay"></div>


                    <!-- View Gallery -->

                    <button
                        type="button"
                        class="property-gallery__view-all"
                        data-open-gallery="0">

                        <i class="bi bi-images"></i>

                        <div>

                            <strong>

                                View Gallery

                            </strong>

                            <small>

                                <?= count($property['images']); ?> Photos

                            </small>

                        </div>

                    </button>

                </div>

            </div>

        </div>


        <!-- ==================================================
        MOBILE BAR
        ================================================== -->

        <div class="property-gallery__mobile-bar">

            <span>

                <i class="bi bi-images"></i>

                <?= count($property['images']); ?> Photos

            </span>

            <button
                type="button"
                data-open-gallery="0">

                View All Photos

                <i class="bi bi-arrow-up-right"></i>

            </button>

        </div>

    </div>

</section>

<!-- ==========================================================
PROPERTY DETAIL CONTENT
========================================================== -->

<section class="property-detail-content">

    <div class="container">

        <div class="property-detail-layout">


            <!-- ==================================================
            MAIN CONTENT
            ================================================== -->

            <div class="property-detail-main">


                <!-- Property Overview -->

                <div class="property-detail-block">

                    <div class="property-section-label">

                        PROPERTY OVERVIEW

                    </div>

                    <h2>

                        About This Property

                    </h2>

                    <div class="property-description">

                        <?= nl2br(
                            htmlspecialchars(
                                trim($property['description'])
                            )
                        ); ?>

                    </div>

                </div>


                <!-- ==================================================
                PROPERTY INFORMATION
                ================================================== -->

                <div class="property-detail-block">

                    <div class="property-block-heading">

                        <div>

                            <div class="property-section-label">

                                PROPERTY DETAILS

                            </div>

                            <h2>

                                Property Information

                            </h2>

                        </div>

                    </div>


                    <div class="property-info-grid">


                        <!-- Property Type -->

                        <div class="property-info-item">

                            <div class="property-info-item__icon">

                                <i class="bi bi-building"></i>

                            </div>

                            <div>

                                <span>

                                    Property Type

                                </span>

                                <strong>

                                    <?= $property['category']; ?>

                                </strong>

                            </div>

                        </div>


                        <!-- Building Class -->

                        <div class="property-info-item">

                            <div class="property-info-item__icon">

                                <i class="bi bi-award"></i>

                            </div>

                            <div>

                                <span>

                                    Building Class

                                </span>

                                <strong>

                                    <?= $property['class']; ?>

                                </strong>

                            </div>

                        </div>


                        <!-- Status -->

                        <div class="property-info-item">

                            <div class="property-info-item__icon">

                                <i class="bi bi-check-circle"></i>

                            </div>

                            <div>

                                <span>

                                    Status

                                </span>

                                <strong>

                                    <?= $property['status']; ?>

                                </strong>

                            </div>

                        </div>


                        <!-- Building Area -->

                        <div class="property-info-item">

                            <div class="property-info-item__icon">

                                <i class="bi bi-bounding-box"></i>

                            </div>

                            <div>

                                <span>

                                    Building Area

                                </span>

                                <strong>

                                    <?= $property['building_area']; ?>

                                </strong>

                            </div>

                        </div>


                        <!-- Land Area -->

                        <div class="property-info-item">

                            <div class="property-info-item__icon">

                                <i class="bi bi-aspect-ratio"></i>

                            </div>

                            <div>

                                <span>

                                    Land Area

                                </span>

                                <strong>

                                    <?= $property['land_area']; ?>

                                </strong>

                            </div>

                        </div>


                        <!-- Ownership -->

                        <div class="property-info-item">

                            <div class="property-info-item__icon">

                                <i class="bi bi-file-earmark-text"></i>

                            </div>

                            <div>

                                <span>

                                    Ownership

                                </span>

                                <strong>

                                    <?= $property['ownership']; ?>

                                </strong>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                LOCATION
                ================================================== -->

                <div class="property-detail-block">

                    <div class="property-section-label">

                        LOCATION

                    </div>

                    <h2>

                        Strategic Location

                    </h2>

                    <div class="property-location-box">

                        <div class="property-location-box__icon">

                            <i class="bi bi-geo-alt-fill"></i>

                        </div>

                        <div>

                            <span>

                                Property Location

                            </span>

                            <h3>

                                <?= $property['location']; ?>

                            </h3>

                            <p>

                                Strategically located with convenient
                                access to major business districts,
                                transportation networks, and supporting
                                commercial facilities.

                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ==================================================
            SIDEBAR
            ================================================== -->

            <aside
                class="property-detail-sidebar"
                id="property-inquiry">

                <div class="property-inquiry-card">


                    <div class="property-inquiry-card__icon">

                        <i class="bi bi-chat-dots"></i>

                    </div>


                    <span class="property-inquiry-card__label">

                        PROPERTY INQUIRY

                    </span>


                    <h3>

                        Interested in This Property?

                    </h3>


                    <p>

                        Connect with our professional team
                        for detailed property information,
                        availability, or consultation.

                    </p>


                    <div class="property-inquiry-card__property">

                        <span>

                            You're inquiring about

                        </span>

                        <strong>

                            <?= $property['title']; ?>

                        </strong>

                        <small>

                            <i class="bi bi-geo-alt-fill"></i>

                            <?= $property['location']; ?>

                        </small>

                    </div>


                    <!-- WhatsApp -->

                    <a
                        href="#"
                        class="property-inquiry-whatsapp">

                        <i class="bi bi-whatsapp"></i>

                        <span>

                            Contact via WhatsApp

                        </span>

                        <i class="bi bi-arrow-up-right"></i>

                    </a>


                    <!-- General Contact -->

                    <a
                        href="#"
                        class="property-inquiry-contact">

                        Contact Our Team

                        <i class="bi bi-arrow-right"></i>

                    </a>


                    <div class="property-inquiry-card__note">

                        <i class="bi bi-shield-check"></i>

                        <span>

                            Professional consultation
                            with our property team.

                        </span>

                    </div>

                </div>

            </aside>

        </div>

    </div>

</section>

<!-- ==========================================================
RELATED PROPERTY
========================================================== -->

<!-- <section class="related-property">

    <div class="container">

        <div class="section-heading">

            <span>

                OUR PORTFOLIO

            </span>

            <h2>

                Related Properties

            </h2>

            <p>

                Discover other strategic commercial and
                investment properties that may suit
                your business objectives.

            </p>

        </div>



        <div class="related-property-grid">

            <a
                href="#"
                class="related-property-featured">

                <img
                    src="<?= base_url(
                        'assets/frontend/img/' .
                        $property['images'][0]
                    ); ?>">

                <div class="related-overlay"></div>

                <div class="related-content">

                    <span>

                        Featured Property

                    </span>

                    <h3>

                        Premium Office Tower

                    </h3>

                    <p>

                        South Jakarta • Grade A Office

                    </p>

                </div>

            </a>

            <div class="related-property-side">


                <a
                    href="#"
                    class="related-property-small">

                    <img
                        src="<?= base_url(
                            'assets/frontend/img/' .
                            $property['images'][1]
                        ); ?>">

                    <div class="related-overlay"></div>

                    <div class="related-content">

                        <h4>

                            BSD Business Park

                        </h4>

                        <small>

                            Tangerang

                        </small>

                    </div>

                </a>


                <a
                    href="#"
                    class="related-property-small">

                    <img
                        src="<?= base_url(
                            'assets/frontend/img/' .
                            $property['images'][2]
                        ); ?>">

                    <div class="related-overlay"></div>

                    <div class="related-content">

                        <h4>

                            Cikarang Logistics Hub

                        </h4>

                        <small>

                            Bekasi

                        </small>

                    </div>

                </a>

            </div>

        </div>

    </div>

</section> -->

<!-- ==========================================================
CTA PROPERTY
========================================================== -->

<section class="property-cta">
    <div class="container">
        <div class="property-cta-box">

            <span>

                PROPERTY CONSULTATION

            </span>

            <h2>

                Need Professional
                Property Consultation?

            </h2>

            <p>

                Whether you're looking for commercial,
                industrial, or investment properties,
                our team is ready to assist you.

            </p>

            <a
            href="#"
            class="btn btn-gold">

                <i class="bi bi-whatsapp"></i>

                Contact via WhatsApp

            </a>

        </div>
    </div>
</section>

<!-- ==========================================================
PROPERTY GALLERY LIGHTBOX
========================================================== -->

<div
    class="property-lightbox"
    id="propertyLightbox"
    aria-hidden="true">

    <div class="property-lightbox__backdrop"></div>


    <!-- Header -->

    <div class="property-lightbox__header">

        <div class="property-lightbox__counter">

            <span id="lightboxCurrent">
                1
            </span>

            <span>/</span>

            <span>
                <?= count($property['images']); ?>
            </span>

        </div>


        <button
            type="button"
            class="property-lightbox__close"
            id="lightboxClose"
            aria-label="Close gallery">

            <i class="bi bi-x-lg"></i>

        </button>

    </div>


    <!-- Main Image -->

    <div class="property-lightbox__stage">

        <button
            type="button"
            class="property-lightbox__nav property-lightbox__nav--prev"
            id="lightboxPrev"
            aria-label="Previous image">

            <i class="bi bi-chevron-left"></i>

        </button>


        <div class="property-lightbox__image">

            <img
                src=""
                id="lightboxImage"
                alt="<?= htmlspecialchars($property['title']); ?>">

        </div>


        <button
            type="button"
            class="property-lightbox__nav property-lightbox__nav--next"
            id="lightboxNext"
            aria-label="Next image">

            <i class="bi bi-chevron-right"></i>

        </button>

    </div>


    <!-- Thumbnails -->

    <div class="property-lightbox__thumbnails">

        <?php foreach ($property['images'] as $index => $image): ?>

            <button
                type="button"
                class="property-lightbox__thumbnail <?= $index === 0 ? 'active' : ''; ?>"
                data-index="<?= $index; ?>">

                <img
                    src="<?= base_url(
                        'assets/frontend/img/' . $image
                    ); ?>"
                    alt="<?= htmlspecialchars($property['title']); ?>">

            </button>

        <?php endforeach; ?>

    </div>

</div>