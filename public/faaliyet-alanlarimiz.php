<?php require 'init.php'; ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faaliyet alanarımız</title>
    <?php include 'include/head.html'; ?>
</head>

<body>
    <?php include 'include/header.html'; ?>
    <main class="sub-page-main">

        <section class="page-header-section">
            <div class="container">
                <div class="page-banner">
                    <img src="./assets/images/faaliyet-alani-banner.webp" alt="Başkanın mesajı">
                    <div class="row">
                        <div class="row col-lg-12">
                            <div class="col-lg-8">
                                <div class="page-banner-heading">
                                    <h1 class="order-2">Konut Projeleri</h1>
                                    <h2 class="order-1">Faaliyet Alanlarımız / Üst Yapı</h2>
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="./">Ana Sayfa</a></li>
                                        <li class="breadcrumb-item"><a href="#">Faaliyet alanlarımız</a></li>
                                        <li class="breadcrumb-item"><a href="#">Üst Yapı</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Konut Projeleri</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="message-section">
            <div class="container">
                <div class="row col-lg-11 mx-auto gx-5">
                    <div class="col-lg-12 pe-lg-5 paragraph-content">
                        <div class="col-lg-8">
                            <p>
                                YKT İnşaat olarak, konut projelerinde temel hedefimiz; **yalnızca binalar inşa etmek değil, modern yaşamın ihtiyaçlarını karşılayan, estetik, güvenli ve sürdürülebilir yaşam alanları sunmaktır.**
                            </p>

                            <p>
                                Her projemizde, çağdaş mimariyi güçlü mühendislik çözümleriyle birleştirerek, ailelerin ve bireylerin beklentilerini karşılayan konforlu yaşam alanları tasarlıyoruz. Geniş yeşil alanlar, sosyal donatılar, çocuk oyun alanları, otoparklar ve güvenlik sistemleriyle donatılmış projelerimizde, **insan odaklı bir anlayışı benimsiyoruz.**
                            </p>

                            <p class="fw-bold mt-4 mb-2">
                                Konut projelerimizi hayata geçirirken;
                            </p>
                            <ul>
                                <li>Deprem yönetmeliğine uygunluk,</li>
                                <li>Enerji verimliliği sağlayan çözümler,</li>
                                <li>Çevreye duyarlı inşaat uygulamaları,</li>
                                <li>Modern iç mimari ve fonksiyonel tasarım,</li>
                            </ul>
                            <p class="mb-4">
                                öncelikli kriterlerimiz arasında yer almaktadır.
                            </p>

                            <p>
                                YKT İnşaat olarak bugüne kadar geliştirdiğimiz her konut projesi, bulunduğu bölgenin değerini artırmış, güvenli ve huzurlu yaşam alanlarıyla müşterilerimizin memnuniyetini kazanmıştır. **“Yaşam alanı” kavramını yalnızca bir ev değil; insanların kendini güvende hissettiği, sosyal bağlarını güçlendirdiği ve geleceklerini huzurla planladığı bir ortam olarak görüyoruz.**
                            </p>

                            <p class="fw-semibold">
                                Vizyonumuz; konut projelerimizde modern şehircilik anlayışını en üst düzeyde uygulamak, çevreyle uyumlu, sosyal alanlarıyla zenginleştirilmiş, yeni nesil yaşam merkezleri sunmaktır.
                            </p>

                            <p class="fw-bold mt-4 mb-2">
                                Konut projelerimiz;
                            </p>
                            <ul>
                                <li>Ailelere güvenli ve huzurlu yuvalar,</li>
                                <li>Yatırımcılara yüksek değer,</li>
                                <li>Şehirlere modern bir siluet,</li>
                            </ul>
                            <p>
                                kazandırmaya devam edecektir.
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <img src="./assets/images/faaliyet-alani-1.webp" alt="Başkan" class="img-fluid rounded-4">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        include 'include/carousel-project-section.php';
        ?>

    </main>
    <?php include 'include/footer.html'; ?>
</body>

</html>