<?php require 'init.php'; ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haberler</title>
    <?php include 'include/head.html'; ?>
</head>

<body>
    <?php include 'include/header.html'; ?>

    <main class="sub-page-main">

        <section class="page-header-section">
            <div class="container">
                <div class="page-banner">
                    <img src="./assets/images/sub-page-banner.webp" alt="Başkanın mesajı">
                    <div class="row">
                        <div class="row col-lg-12">
                            <div class="col-lg-8">
                                <div class="page-banner-heading">
                                    <h1>YKT İNŞAAT</h1>
                                    <h2>HABERLER</h2>
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="./">Ana Sayfa</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Haberler</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="last-news-section home-page-divider-section">
            <div class="container">
                <div class="row col-lg-11 mx-auto">

                    <div class="mt-lg-5">

                        <div class="col-lg-12">
                            <div class="news-card">
                                <img src="./assets/images/haberler-2.webp" class="img-fluid">
                                <div class="right-content">
                                    <h3>Lorem ipsum dolor sit amet</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    <a href="haber-detay.php" class="stretched-link detail-btn">
                                        <span>Devamını Oku</span>
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

                        <div class="col-lg-12">
                            <div class="news-card">
                                <img src="./assets/images/haberler-3.webp" class="img-fluid">
                                <div class="right-content">
                                    <h3>Lorem ipsum dolor sit amet</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    <a href="haber-detay.php" class="stretched-link detail-btn">
                                        <span>Devamını Oku</span>
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
            </div>
        </section>
    </main>

    <?php include 'include/footer.html'; ?>
</body>

</html>