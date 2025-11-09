<?php require 'init.php'; ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tedarikçi Formu</title>
    <?php include 'include/head.html'; ?>
</head>

<body>
    <?php include 'include/header.html'; ?>

    <main class="sub-page-main">

        <section class="page-header-section">
            <div class="container">
                <div class="page-banner">
                    <img src="./assets/images/kariyer-banner.webp" alt="Başkanın mesajı">
                    <div class="row">
                        <div class="row col-lg-12">
                            <div class="col-lg-8">
                                <div class="page-banner-heading">
                                    <h1 class="order-2">TEDARİKÇİ BAŞVURUSU</h1>
                                    <h2 class="order-1">YKT İNŞAAT</h2>
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="./">Ana Sayfa</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Tedarikçi Başvurusu</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="form-section">
            <div class="container">
                <div class="row col-lg-11 mx-auto">
                    <div class="form-container">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 form-floating mb-3">
                                    <input type="text" class="form-control" id="firmaUnvani" placeholder="Firma Ünvanı" required>
                                    <label for="firmaUnvani">Firma Ünvanı <span class="text-danger">*</span></label>
                                </div>

                                <div class="col-12 form-floating mb-3">
                                    <input type="text" class="form-control" id="referanslar" placeholder="Referanslar (Firma - Yetkili telefon)" required>
                                    <label for="referanslar">Referanslar (Firma - Yetkili telefon) <span class="text-danger">*</span></label>
                                </div>

                                <div class="col-12 form-floating mb-3">
                                    <textarea class="form-control" id="adres" placeholder="Adres" style="height: 100px" required></textarea>
                                    <label for="adres">Adres <span class="text-danger">*</span></label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="text" class="form-control" id="yetkiliKisi" placeholder="Yetkili kişi" required>
                                    <label for="yetkiliKisi">Yetkili kişi <span class="text-danger">*</span></label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="tel" class="form-control" id="telefonNo" placeholder="Telefon No" required>
                                    <label for="telefonNo">Telefon No <span class="text-danger">*</span></label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="tel" class="form-control" id="cepTelefonuNo" placeholder="Cep Telefonu No" required>
                                    <label for="cepTelefonuNo">Cep Telefonu No <span class="text-danger">*</span></label>
                                </div>

                                <div class="col-md-6 form-floating mb-3">
                                    <input type="tel" class="form-control" id="faxNo" placeholder="Fax No" required>
                                    <label for="faxNo">Fax No <span class="text-danger">*</span></label>
                                </div>

                                <div class="col-12 form-floating mb-4">
                                    <input type="email" class="form-control" id="epostaAdresi" placeholder="E-posta adresinizi girin" required>
                                    <label for="epostaAdresi">E-posta adresinizi girin <span class="text-danger">*</span></label>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <h4 class="mb-3 text-primary fs-5 fw-bold px-0">Çalışma Alanı</h4>
                            </div>

                            <div class="row g-3">
                                <div class="col-12 form-floating mb-3">
                                    <input type="text" class="form-control" id="malzemeBranslari" placeholder="Malzeme branşları" required>
                                    <label for="malzemeBranslari">Malzeme branşları <span class="text-danger">*</span></label>
                                </div>

                                <div class="col-12 form-floating mb-3">
                                    <textarea class="form-control" id="firmaTanitimi" placeholder="Firma tanıtımı" style="height: 100px" required></textarea>
                                    <label for="firmaTanitimi">Firma tanıtımı <span class="text-danger">*</span></label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Dosya seçilmedi</label>
                                <input class="form-control" type="file" id="formFile" aria-describedby="fileHelp">
                                <div id="fileHelp" class="form-text">
                                    Sadece .docx, .pdf, .xls ve .jpg dosya türlerini yükleyebilirsiniz.
                                </div>
                            </div>

                            <div class="form-floating mb-4">
                                <textarea class="form-control" id="mesajiniz" placeholder="Mesajınız" style="height: 150px" required></textarea>
                                <label for="mesajiniz">Mesajınız <span class="text-danger">*</span></label>
                            </div>

                            <button type="submit" class="btn btn-primary btn-post">GÖNDER</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include 'include/footer.html'; ?>
</body>

</html>