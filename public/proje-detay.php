<?php require 'init.php'; ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haber Detay</title>
    <?php include 'include/head.html'; ?>
</head>

<body>
    <?php include 'include/header.html'; ?>
    <main class="sub-page-main">

        <section class="page-header-section">
            <div class="container">
                <div class="page-banner">
                    <img src="./assets/images/proje-detay-banner.webp" alt="Başkanın mesajı">
                    <div class="row">
                        <div class="row col-lg-12">
                            <div class="col-lg-8">
                                <div class="page-banner-heading">
                                    <h1 class="order-2">HATAY SPOR SALONU</h1>
                                    <h2 class="order-1">PROJELER</h2>
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="./">Ana Sayfa</a></li>
                                        <li class="breadcrumb-item"><a href="./">Projelerimiz</a></li>
                                        <li class="breadcrumb-item"><a href="./">Tamamlanan Projeler</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Hatay Spor Salonu</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-projects-section section-header-content mb-3" id="home-projects-section">
            <?php
            $custom_carousel_projecs = [
                [
                    'title' => 'Proje 1',
                    'subtitle' => 'Gold Africa Mining Limited',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In sodales, libero eu laoreet dictum, nisi enim consectetur ligula, vel semper urna magna a erat. Phasellus nec ante non magna blandit lacinia.',
                    'image' => './assets/images/proje-1.webp',
                    'link' => 'proje-detay.php'
                ],
                [
                    'title' => 'Proje 2',
                    'subtitle' => 'Gold Africa Mining Limited',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In sodales, libero eu laoreet dictum, nisi enim consectetur ligula, vel semper urna magna a erat. Phasellus nec ante non magna blandit lacinia.',
                    'image' => './assets/images/proje-2.webp',
                    'link' => 'proje-detay.php'
                ],
                [
                    'title' => 'Proje 3',
                    'subtitle' => 'Gold Africa Mining Limited',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In sodales, libero eu laoreet dictum, nisi enim consectetur ligula, vel semper urna magna a erat. Phasellus nec ante non magna blandit lacinia.',
                    'image' => './assets/images/proje-3.webp',
                    'link' => 'proje-detay.php'
                ],
                [
                    'title' => 'Proje 4',
                    'subtitle' => 'Gold Africa Mining Limited',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In sodales, libero eu laoreet dictum, nisi enim consectetur ligula, vel semper urna magna a erat. Phasellus nec ante non magna blandit lacinia.',
                    'image' => 'https://placehold.co/350x250/ffc107/343a40?text=Proje+Gorseli+4',
                    'link' => 'proje-detay.php'
                ],
                [
                    'title' => 'Proje 5',
                    'subtitle' => 'Gold Africa Mining Limited',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In sodales, libero eu laoreet dictum, nisi enim consectetur ligula, vel semper urna magna a erat. Phasellus nec ante non magna blandit lacinia.',
                    'image' => 'https://placehold.co/350x250/17a2b8/ffffff?text=Proje+Gorseli+5',
                    'link' => 'proje-detay.php'
                ]
            ];
            ?>
            <div class="custom-carousel-container pt-5">
                <div class="custom-carousel-viewport">
                    <div class="custom-carousel-track" id="carouselTrack">
                        <?php
                        foreach ($custom_carousel_projecs as $project) {
                        ?>
                            <!-- Proje Kartıları -->
                            <div class="custom-carousel-item">
                                <div class="custom-carousel-card-wrapper">
                                    <div class="card card-slide-project">
                                        <div class="card-right-image">
                                            <img src="<?php echo $project['image']; ?>" alt="Proje Görseli 1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="carousel-controls">
                    <!-- Sol Ok Butonu -->
                    <button class="carousel-control-btn carousel-control-prev-btn prevBtn" id="prevBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                        </svg>
                    </button>

                    <!-- Sağ Ok Butonu -->
                    <button class="carousel-control-btn carousel-control-next-btn nextBtn" id="nextBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <section class="project-detail-section py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="row row gx-5">
                            <div class="col-lg-6 scroll-reveal-left">
                                <div class="product-addional-card">
                                    <h4 class="card-header-title mb-4">Proje Künyesi</h4>
                                    <ul class="list-unstyled project-info-list">
                                        <li>
                                            <span class="info-label">Projenin Ad</span>
                                            <span class="info-value">Hatay Spor Salonu</span>
                                        </li>
                                        <li>
                                            <span class="info-label">İşveren İdare</span>
                                            <span class="info-value">Spor Bakanlığı</span>
                                        </li>
                                        <li>
                                            <span class="info-label">Projenin Yapım Yeri</span>
                                            <span class="info-value">Hatay</span>
                                        </li>
                                        <li>
                                            <span class="info-label">Projenin Ana Grubu</span>
                                            <span class="info-value">Üst Yapı</span>
                                        </li>
                                        <li>
                                            <span class="info-label">Projenin Kategorisi</span>
                                            <span class="info-value">Kamu Binaları</span>
                                        </li>
                                        <li>
                                            <span class="info-label">Proje Teklif Kapsamı</span>
                                            <span class="info-value"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 scroll-reveal-right">
                                <div class="product-addional-card">
                                    <h4 class="card-header-title mb-4">Proje Bilgileri</h4>
                                    <ul class="list-unstyled project-info-list">
                                        <li>
                                            <span class="info-label">Sözleşme İmza Tarihi</span>
                                            <span class="info-value"></span>
                                        </li>
                                        <li>
                                            <span class="info-label">Tamamlanma Tarihi</span>
                                            <span class="info-value"></span>
                                        </li>
                                        <li>
                                            <span class="info-label">Tamamlanma Süresi</span>
                                            <span class="info-value"></span>
                                        </li>
                                        <li>
                                            <span class="info-label">Kapalı İnşaat Alanı</span>
                                            <span class="info-value"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="video-section">
            <div class="video-overlay"></div>
            <img src="./assets/images/video-image.webp">
            <a href="#" class="play-button" data-bs-toggle="modal" data-bs-target="#videoModal">
                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="30" cy="30" r="29.5" stroke="white" />
                    <path d="M40 30L25 39.5263V20.4737L40 30Z" fill="white" />
                </svg>
            </a>
        </section>

    </main>
    <?php include 'include/footer.html'; ?>
</body>

</html>