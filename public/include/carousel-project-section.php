<section class="home-projects-section section-header-content" id="home-projects-section">

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

    <div class="section-header-content row col-lg-10 mx-auto justify-content-center align-items-center pt-5">
        <div class="col-lg-6 scroll-reveal-left mb-3 mb-lg-0">
            <h2>Projeler</h2>
            <a href="projeler.php" class="all-project-btn">
                <span>Projeler</span>
                <svg class="currentColor" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="m9 5 7 7-7 7" />
                </svg>
            </a>
        </div>
        <div class="col-lg-6 all-project-content scroll-reveal-right">
            <p>
                YKT Şimşek Enerji ve İnşaat olarak bugüne kadar birçok farklı ölçekte altyapı ve üstyapı projelerini başarıyla tamamladık. Her projemizi, mühendislik disiplinine, kalite standartlarına ve çevreye duyarlı yaklaşımlara bağlı kalarak hayata geçiriyoruz.
            </p>
            <p>
                Projelerimiz, YKT’nin teknik kapasitesini, uzman kadrosunu ve sektördeki güçlü referanslarını yansıtan en önemli değerlerimizden biridir.
            </p>
        </div>
    </div>

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
                                    <div class="card-content-bottom">
                                        <h3>
                                            HATAY SPOR SALONU
                                        </h3>
                                        <a href="proje-detay.php" class="stretched-link">
                                            <svg class="currentColor" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m9 5 7 7-7 7" />
                                            </svg>
                                        </a>
                                    </div>
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