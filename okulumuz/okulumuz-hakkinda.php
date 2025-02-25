<?php
include "../Admin/connect.php";

$status=$db->prepare("SELECT * FROM usstatus");
$status->execute();

$statusGet=$status->fetch(PDO::FETCH_ASSOC);



$school=$db->prepare("SELECT * FROM usschool");
$school->execute();

$schoolGet=$school->fetch(PDO::FETCH_ASSOC);


$contact=$db->prepare("SELECT * FROM uscontact");
$contact->execute();

$contactGet=$contact->fetch(PDO::FETCH_ASSOC);



$transport=$db->prepare("SELECT * FROM ustransport");
$transport->execute();

$transportGet=$transport->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../app.css">
    <link rel="icon" href="../images/milli-egitim.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <title>Buca Necla - Tevfik Karadavut Mesleki ve Teknik Anadolu Lisesi</title>
</head>
<body>

    <div class="header-top">
        <div class="header-container">
            <div class="container">
                <a href="#" class="logo">
                    <img src="../images/logo-removebg-preview.png" alt="">
                    <span class="meb-baslik">İzmir/Buca</span>
                    <span class="okul-baslik">Buca Necla - Tevfik Karadavut Mesleki ve Teknik Anadolu Lisesi</span>
                </a>

                <div class="ataturk">
                    <img src="../images/ataturk.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <nav id="main-nav" class="nav">
        <span class="icon"><i class="fa-solid fa-bars"></i></span>

        <div class="container">            
            <ul>
                <div class="side_bar_logo">    
                    <span class="carpi"><i class="fa-solid fa-xmark"></i></span> 
                </div>
                    <li><a href="../index.php">Anasayfa</a></li>
                    <li class="drop"><a href="#">Okulumuz &nbsp; <i class="fa fa-caret-down"></i></a>
                        <div class="drop-content">
                            <a href="../okulumuz/mudur.php">Müdür</a>
                            <a href="../okulumuz/idari-kadro.php">İdari Kadromuz</a>
                            <a href="../okulumuz/tarihce.php">Tarihçe</a>
                            <a href="../okulumuz/okulumuz-hakkinda.php">Okulumuz Hakkında</a>
                            <a href="../okulumuz/vizyon-misyon.php">Vizyonumuz ve Misyonumuz</a>
                            <a href="../dosyalar/29095251_NeclaTevfik2023strateji.pdf" target="_blank">Stratejik Plan</a>
                            <a href="../dosyalar/16082223_NTKMTAL_brifing.pdf" target="_blacnk">Brifing Dosyamız</a>
                            <a href="../okulumuz/kurucular.php">Kurucularımız</a>
                            <a href="../okulumuz/ogretmenler.php">Öğretmenlerimiz</a>
                            <a href="../okulumuz/ogrenci-isleri.php">Öğrenci İşleri</a>
                            <a href="../okulumuz/alan.php">Okulumuzda Yer Alan Bölümler</a>
                            <a href="../dosyalar/06175714_okul_neden_tercih_edilmeli.pdf">Okulumuzu Neden Tercih Etmelisiniz ?</a>
                        </div>
                    </li>
                    <li class="drop"><a href="#">Basında Biz &nbsp; <i class="fa fa-caret-down"></i></a>
                        <div class="drop-content">
                        <a href="http://bucaizmir.com/m-haber-5637.php" target="_blank">Buca İzmir Haber</a>
                        <a href="https://www.youtube.com/watch?v=x4UREjn3S4Y" target="_blank">TRT 35 Haber</a>
                        <a href="https://www.aa.com.tr/tr/egitim/izmirde-meslek-lisesi-ogrencileri-calismalariyla-milli-teknoloji-hamlesini-destekliyor/2399684" target="_blank">Anadolu Ajansı</a>
                        <a href="https://www.youtube.com/watch?v=k6FAvpKmMko" target="_blank">Memurlar.Net</a>
                        <a href="https://www.youtube.com/watch?v=jMVqHU6qS4o" target="_blank">TRT Haber</a>
                    </div>
                    </li>
                    <li class="drop"><a href="#">Mesem &nbsp; <i class="fa fa-caret-down"></i></a>
                    <div class="drop-content">
                        <a href="../Mesem/mesleki-egitim.php">Mesleki Eğitim Merkezi</a>
                        <a href="../dosyalar/26222244_Mesleki_EYitim_Merkezi_Alan_ve_Dallar.pdf target="_blank">Mesleki Eğitim Merkezleri Alan ve Dallar</a>
                        <a href="http://bucaizmir.com/m-haber-5637.php" target="_blank">Kalfalık-Ustalık Belgesi</a>
                        <a href="https://www.youtube.com/watch?v=x4UREjn3S4Y" target="_blank">Usta Öğrencilik Belgesi</a>
                        <a href="http://mtegm.meb.gov.tr/kalfalik_ustalik_sinavlari/alanlar.php" target="_blank">Elektronik Sınav e-Sınav Ders İçerikleri</a>
                        <a href="http://mtegm.meb.gov.tr/kalfalik_ustalik_sinavlari/sinav_kriterleri.php" target="_blank">Beceri Sınavı Değerlendirme Kriterleri</a>
                    </div></li>
                    <li class="drop"><a href="#">ARGE Merkezi &nbsp; <i class="fa fa-caret-down"></i></a>
                    <div class="drop-content">
                        <a href="../Arge/hava-kalite-izleme-cihazi.php" target="_blank">Ata Hava Kalitesi İzleme ve Örnekleme Cihazı</a>
                        <a href="../dosyalar/07150222_ARITMATIKSIPERLIK.pdf" target="_blank">Aritmetik Siperlik</a>
                        <a href="../dosyalar/07141114_E-CESME.pdf" target="_blank">E-Çeşme</a>
                        <a href="../dosyalar/07141732_KODPETEGI.pdf" target="_blank">Kod Peteği</a>
                        <a href="../dosyalar/07143023_NTKDijital_Kursu.pdf" target="_blank">Dijital Kürsü</a>
                        <a href="../dosyalar/07143215_NTK_E_Isletme.pdf" target="_blank">E-İşletme</a>
                        <a href="../dosyalar/08034123_pisman.pdf" target="_blank">Pişmaniye Fincanlama Makinası</a>
                        <a href="../dosyalar/07145500_NTK-Yeni-Proje-Sunumlari-sonsuz-cnc.pdf" target="_blank">Sonsuz CNC</a>
                        <a href="../dosyalar/08034100_yangin.pdf" target="_blank">İkizalp Yangın Söndürme Cihazı Kuru Kimyevi Toz Dolum Makinası</a>
                        <!--<a href="">BioArıtma Siperlik</a>-->
                    </div>
                    </li>
                    <li class="drop"><a href="#">Proje Okulu &nbsp; <i class="fa fa-caret-down"></i></a>
                    <div class="drop-content">
                        <a href="../proje-okul/patentle-turkiye.php">Patentle Türkiye</a>
                        <a href="../proje-okul/teknofest.php">Teknofest</a>
                    </div>
                    </li>
                    <li><a href="../etkilesimli-tahta-destek.php">Etkileşimli Tahta Destek Nok.</a></li>
            </ul>
        </div>
    </nav>

    <div class="header-okulumuz">
        <div class="header-container">
            <div class="container">
                    <div class="baslik"><h1>Buca Necla - Tevfik Karadavut Mesleki ve Teknik Anadolu Lisesi</h1></div>
                    <div class="img">
                        <img src="../images/okulumuz.jpg" alt="">
                    </div>
                        
                    <ul class="okul-nav">
                        <li><a href="" id="school"> Okulumuz </a></li>
                        <div class="okul-table ">
                            <li><strong>Vizyon: </strong><?php echo $schoolGet["vizyon"] ?></li>
                            <li><strong>Misyon: </strong><?php echo $schoolGet["misyon"] ?></li>
                            <li><strong>Saatler: </strong><?php echo $schoolGet["saatler"] ?></li>
                            <li><strong>Isınma: </strong><?php echo $schoolGet["isinma"] ?></li>
                            <li><strong>İnternet Bağlantısır: </strong><?php echo $schoolGet["internet"] ?></li>
                        </div>

                        <div class="contact-table d-none">
                            <li><strong><i class="fa-solid fa-phone-flip"></i> &nbsp; Telefon: </strong>  <?php echo $contactGet["telefon"] ?></li>
                            <li><strong><i class="fa-solid fa-print"></i> &nbsp; Belge geçer: </strong><?php echo $contactGet["belge"] ?></li>
                            <li><strong><i class="fa-solid fa-envelope-open-text"></i> &nbsp; Eposta: </strong><a href="#"><?php echo $contactGet["eposta"] ?></a></li>
                            <li><strong><i class="fa-solid fa-globe"></i> &nbsp; WEB: </strong><a href="#"><?php echo $contactGet["web"] ?></a></li>
                            <li><strong><i class="fa-solid fa-location-dot"></i> &nbsp; Adres: </strong><?php echo $contactGet["adres"] ?></li>
                        </div>

                        <div class="mevcut-durum  d-none">

                       

                            <li><strong><i class="fa-solid fa-chalkboard-user"></i>&nbsp; Öğretmen: <?php echo $statusGet["ogretmen"] ?></strong></li>
                            <li><strong><i class="fa-solid fa-graduation-cap"></i>&nbsp; Öğrenci: <?php echo $statusGet["ogrenci"] ?></strong></li>
                            <li><strong><i class="fa fa-building"></i>&nbsp; Derslik: <?php echo $statusGet["derslik"] ?></strong></li>
                            <li><strong><i class="fa-solid fa-microphone"></i>&nbsp; Çok Amaçlı Salon: <?php echo $statusGet["cok_amacli"] ?></strong></li>
                            <li><strong><i class="fa-brands fa-intercom"></i>&nbsp; Mesleki Uygulama Labaratuvarı: <?php echo $statusGet["mesleki"] ?></strong></li>
                            <li><strong><i class="fa-solid fa-flask"></i>&nbsp; Kimya Labaratuvarı: <?php echo $statusGet["kimya"] ?></strong></li>
                            <li><strong><i class="fa-solid fa-flask"></i></i>&nbsp; Fizik Labaratuvarı: <?php echo $statusGet["fizik"] ?></strong></li>
                            <li><strong><i class="fa-solid fa-book-open-reader"></i>&nbsp; Kütüphane: <?php echo $statusGet["kutuphane"] ?></strong></li>
                            <li><strong><i class="fa-solid fa-book-blank"></i>&nbsp; Kütüphane Kitap Sayısı: <?php echo $statusGet["kitap"] ?></strong></li>
                            <li><strong><i class="fa-solid fa-utensils"></i>&nbsp; Yemekhane: <?php echo $statusGet["yemekhane"] ?></strong></li>
                        </div>

                        <div class="ulasim d-none">
                            <li><strong><i class="fa-solid fa-location-dot"></i>&nbsp; Yerleşim Yeri - <?php echo $transportGet["yerlesim"] ?></strong></li>
                            <li><strong><i class="fa-solid fa-location-dot"></i>&nbsp; Adres - <?php echo $transportGet["adres"] ?></strong></li>
                            <li><strong><i class="fa-solid fa-train-subway"></i>&nbsp; Ulaşım İZBAN ile : <?php echo $transportGet["ulasim_izban"] ?></strong></li>
                            <li><strong><i class="fa-solid fa-map-pin"></i>&nbsp; İl/İlçe <?php echo $transportGet["il"] ?></strong></li>
                        </div>

                        <li><a href="" id="contact">İletişim</a></li>
                        <li><a href="" id="mevcut">Mevcut Durum</a></li>
                        <li><a href="" id="ulasim"> Ulaşım</a></li>
                    </ul>

                </div>
            </div>
        </div>


        <div class="footer">
            <div class="title">
                <h1>İletişim</h1>
            </div>
            <div class="container">
                <div class="content">
                    <p><strong>Adres:</strong></p>
                    <br>

					İnönü Mahallesi 677/5. Sk. No58 35380 Buca/İzmir, Türkiye

                    <br>
                    <br>

                    <strong>Telefon</strong>
                    <br>

					0 (232) 260 10 60

                    <br>
                    <br>

                </div>
                    <div class="map">
                        <a href="https://goo.gl/maps/UFzqJ4P1bChndR6k9"><img src="../images/footer-map.png" alt=""></a>
                    </div>
                    <div class="eposta">
                        
                        <a href="#">e-Posta Göndermek İçin Tıklayın</a>
                    </div>
                </div>
            </div>
                
                <div class="footer-info">
                    MEB © - Tüm Hakları Saklıdır. Gizlilik, Kullanım ve Telif Hakları bildiriminde belirtilen kurallar çerçevesinde hizmet sunulmaktadır.
                </div>
                <script src="../index.js" charset="utf-8"></script>
                <script src="../app.js" charset="utf-8"></script>

    </body>
</html>