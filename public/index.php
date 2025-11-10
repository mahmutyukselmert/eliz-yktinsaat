<?php require 'init.php'; ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YKT İNŞAAT</title>
    <?php include 'include/head.html'; ?>
</head>

<body>
    <?php include 'include/header.html'; ?>
    <?php include 'include/hero-section.html'; ?>

    <main class="">

        <section class="company-stats-section">
            <div class="image-box">
                <img src="./assets/images/kuurmsal-kepce.webp" alt="">
                <div class="image-mask"></div>
            </div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 z-3">
                        <div class="card shadow-lg custom-card-style scroll-reveal-bottom">
                            <h2 class="card-title mb-3">Kurumsal</h2>
                            <div class="card-body">
                                <div class="card-body-content">
                                    <p class="card-text">
                                        YKT İnşaat olarak, İnşaat sektöründe yıllara dayanan tecrübemiz ve mühendislik gücümüzle; altyapı, üstyapı ve taahhüt projelerinde uzmanlaşmış, güvenilir bir şirketiz. Kurulduğumuz günden bu yana her projeye sadece bir inşaat işi olarak değil, bir değer üretme fırsatı olarak bakıyoruz.
                                    </p>
                                    <p class="card-text">
                                        15 yıla aşkın süredir kaliteyi ve sürdürülebilirliği merkeze alan bir anlayışla hareket ediyor; kamu kurumları, özel sektör kuruluşları ve bireysel yatırımcılar için nitelikli, uzun ömürlü ve güvenilir yapılar inşa ediyoruz.
                                    </p>
                                </div>
                                <a href="#" class="btn btn-link text-decoration-none">
                                    <span>Hakkımızda</span>
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
                    <div class="col-lg-8 col-md-12 d-flex justify-content-center align-items-center">
                        <div class="circular-stats-wrapper position-relative d-flex justify-content-center align-items-center scroll-reveal-top">

                            <div class="center-image-card text-center">
                                <div class="image-placeholder rounded-circle overflow-hidden d-flex justify-content-center align-items-center">
                                    <img src="./assets/images/kurumsal-sag-1.webp" alt="Rakamlarla YKT" class="img-fluid">
                                </div>
                                <div class="center-text position-absolute top-50 start-50 w-100 translate-middle text-white text-center">
                                    <h4 class="fw-bold fs-lg-2 mb-3">Rakamlarla YKT</h4>
                                    <p class="small m-0">İnşaat, kaliteyi ve sürdürülebilirliği<br>merkeze alan bir anlayışla hareket ediyor</p>
                                </div>
                            </div>

                            <div class="stat-circle stat-top">
                                <span>
                                    <output class="countup" data-value="20">20</output>
                                </span>
                                <span class="small">Yıl</span>
                                <p>Sektör deneyimi</p>
                            </div>

                            <div class="stat-circle stat-top-right">
                                <span>
                                    <output class="countup" data-value="100">100+</output>
                                    <small class="small">+</small>
                                </span>
                                <span class="small">km</span>
                                <p>İçme suyu, kanalizasyon ve doğalgaz hattı</p>
                            </div>

                            <div class="stat-circle stat-bottom-right">
                                <span>
                                    <output class="countup" data-value="30">30</output>
                                    <small class="small">+</small>
                                </span>
                                <span class="small">Proje</span>
                                <p>Kamu Kurumu ve Özel Sektör Referansı</p>
                            </div>

                            <div class="stat-circle stat-bottom">
                                <span>
                                    <output class="countup" data-value="250">250</output>
                                    <small class="small">+</small>
                                </span>
                                <span class="small"></span>
                                <p>İstihdam sağlanan profesyonel ekip</p>
                            </div>

                            <div class="stat-circle stat-bottom-left">
                                <span>
                                    <output class="countup" data-value="50">50</output>
                                    <small class="small">Bin+</small>
                                </span>
                                <span class="small">m²</span>
                                <p>İnşaat alanı</p>
                            </div>

                            <div class="stat-circle stat-top-left">
                                <span>
                                    <output class="countup" data-value="50">50</output>
                                    <small class="small">+</small>
                                </span>
                                <span class="small">Proje</span>
                                <p>Tamamlanmış altyapı ve üstyapı projesi</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        include 'include/carousel-project-section.php';
        ?>

        <section class="areas-of-activity-section">
            <div class="section-header-content row col-lg-10 mx-auto justify-content-center align-items-center py-4 py-lg-5">
                <div class="col-lg-6 scroll-reveal-bottom mb-4 mb-lg-0">
                    <h2>Faaliyet Alanlarımız</h2>
                    <a href="projeler.php" class="all-project-btn">
                        <span>Faaliyet Alanlarımız</span>
                        <svg class="currentColor" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m9 5 7 7-7 7" />
                        </svg>
                    </a>
                </div>
                <div class="col-lg-6 all-project-content scroll-reveal-top">
                    <p>
                        YKT İnşaat, inşaat sektöründe edindiği deneyim ve uzman kadrosuyla konut, ticari ve endüstriyel yapıların hayata geçirilmesinde güvenilir bir çözüm ortağıdır. Faaliyet alanları arasında toplu konut projeleri, villa ve rezidans inşaatları, iş merkezleri, ticari yapılar, altyapı ve üstyapı projeleri ile kentsel dönüşüm çalışmaları yer almaktadır.
                    </p>
                </div>
            </div>

            <?php
            include 'include/our-areas.html';
            ?>
        </section>

        <section class="last-news-section">
            <div class="container">
                <div class="row position-relative">
                    <div class="section-header-content row col-lg-11 mx-auto justify-content-center align-items-center py-5">
                        <div class="col-lg-12 d-flex justify-content-between flex-column flex-lg-row">
                            <h2>Güncel Haberler</h2>
                            <a href="projeler.php" class="all-project-btn c24x24">
                                <span>Tüm Haberler</span>
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

                <div class="row col-lg-11 mx-auto g-4">
                    <div class="col-lg-7 col-md-6">
                        <div class="card bg-dark text-white overflow-hidden rounded-3 shadow-lg h-100">
                            <img src="./assets/images/haber-1.webp" class="card-img h-100 w-100 object-fit-cover" alt="Büyük İnşaat Resmi">

                            <div class="card-img-overlay d-flex flex-column justify-content-end p-4">
                                <a href="#" class="text-white position-absolute top-0 end-0 p-3 fs-3" style="text-decoration: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                    </svg>
                                </a>

                                <h2 class="card-title">
                                    Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                </h2>
                                <p class="card-text mb-3 mt-3">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6">
                        <div class="list-group">

                            <a href="#" class="list-group-item list-group-item-action border-0 shadow-sm">
                                <img src="./assets/images/haber-small-1.webp" alt="Küçük Resim 1" class="img-fluid rounded me-3">
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-normal text-dark">
                                        Lorem ipsum dolor sit amet
                                    </p>
                                </div>
                                <span class="right-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                    </svg>
                                </span>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action border-0 shadow-sm">
                                <img src="./assets/images/haber-small-2.webp" alt="Küçük Resim 2" class="img-fluid rounded me-3">
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-normal text-dark">
                                        Quis ipsum suspendisse ultrices gravida.
                                    </p>
                                </div>
                                <span class="right-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                    </svg>
                                </span>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action border-0 shadow-sm">
                                <img src="./assets/images/haber-small-3.webp" alt="Küçük Resim 3" class="img-fluid rounded me-3">
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-normal text-dark">
                                        Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                    </p>
                                </div>
                                <span class="right-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                    </svg>
                                </span>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action border-0 shadow-sm">
                                <img src="./assets/images/haber-small-4.webp" alt="Küçük Resim 4" class="img-fluid rounded me-3">
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-normal text-dark">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    </p>
                                </div>
                                <span class="right-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                    </svg>
                                </span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="homepage-supplier-form-banner-section">
            <div class="container position-relative">
                <div class="row col-lg-11 mx-auto position-relative">
                    <div class="position-relative">
                        <img src="./assets/images/101889.webp" alt="Tedarikçi Başvuru Formu">
                    </div>
                    <div class="banner-content scroll-reveal-bottom">
                        <div class="row col-lg-6">
                            <h2>TEDARİKÇİ BAŞVURUSU</h2>
                            <p>
                                YKT İnşaat olarak güvenilir ve sürdürülebilir iş ortaklıklarına önem veriyoruz. Tedarikçi başvurularınızı değerlendirmek için lütfen iletişim formumuzu doldurunuz.
                            </p>
                            <a href="#">
                                <span>Faaliyet Alanlarımız</span>
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
        </section>

    </main>

    <?php include 'include/footer.html'; ?>
</body>

</html>