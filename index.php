<?php
ob_start();
session_start();

include "Admin/connect.php";


$setttingsReq=$db->prepare("SELECT * from settings WHERE settings_id=:id");
$setttingsReq->execute(array(
    "id" => 0
));

$settingsGet=$setttingsReq->fetch(PDO::FETCH_ASSOC);


$newsReq=$db->prepare("SELECT * from news");
$newsReq->execute();


$infoReq=$db->prepare("SELECT * FROM information WHERE information_id=:id");
$infoReq->execute(array(
    "id" => 1
));

$infoGet=$infoReq->fetch(PDO::FETCH_ASSOC);

$connect=$db->prepare("SELECT * FROM connect");
$connect->execute();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content=" <?php echo $settingsGet["settings_description"]; ?> ">
    <meta name="keywords" content=" <?php echo $settingsGet["settings_keywords"]; ?> ">
    <meta name="author" content=" <?php echo $settingsGet["settings_author"]; ?> ">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="app.css">
    <link rel="icon" href="images/milli-egitim.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- <title>Buca Necla - Tevfik Karadavut Mesleki ve Teknik Anadolu Lisesi</title> -->
    <title><?php echo $settingsGet["settings_title"]; ?></title>
</head>
<body>

    <div class="header-top">
        <div class="header-container">
            <div class="container">
                <a href="#" class="logo">
                    <img src="dim<?php echo $settingsGet["settings_image"]; ?>" alt="">
                    <span class="meb-baslik">İzmir/Buca</span>
                    <!-- <span class="okul-baslik">Buca Necla - Tevfik Karadavut Mesleki ve Teknik Anadolu Lisesi</span> -->
                    <span class="okul-baslik"><?php echo $settingsGet["settings_title"]; ?></span>
                </a>

                <div class="ataturk">
                    <img src="images/ataturk.png" alt="">
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
                    <li class="drop"><a href="#">Anasayfa</a></li>
                    <li class="drop"><a href="#">Okulumuz &nbsp; <i class="fa fa-caret-down"></i></a>
                        <div class="drop-content">
                            <a href="okulumuz/mudur.php">Müdür</a>
                            <a href="okulumuz/idari-kadro.php">İdari Kadromuz</a>
                            <a href="okulumuz/tarihce.php">Tarihçe</a>
                            <a href="okulumuz/okulumuz-hakkinda.php">Okulumuz Hakkında</a>
                            <a href="okulumuz/vizyon-misyon.php">Vizyonumuz ve Misyonumuz</a>
                            <a href="dosyalar/29095251_NeclaTevfik2023strateji.pdf" target="_blank">Stratejik Plan</a>
                            <a href="dosyalar/16082223_NTKMTAL_brifing.pdf" target="_blacnk">Brifing Dosyamız</a>
                            <a href="okulumuz/kurucular.php">Kurucularımız</a>
                            <a href="okulumuz/ogretmenler.php">Öğretmenlerimiz</a>
                            <a href="okulumuz/ogrenci-isleri.php">Öğrenci İşleri</a>
                            <a href="okulumuz/alan.php">Okulumuzda Yer Alan Bölümler</a>
                            <a href="dosyalar/06175714_okul_neden_tercih_edilmeli.pdf">Okulumuzu Neden Tercih Etmelisiniz ?</a>
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
                        <a href="Mesem/mesleki-egitim.php">Mesleki Eğitim Merkezi</a>
                        <a href="dosyalar/26222244_Mesleki_EYitim_Merkezi_Alan_ve_Dallar.pdf target="_blank">Mesleki Eğitim Merkezleri Alan ve Dallar</a>
                        <a href="http://bucaizmir.com/m-haber-5637.php" target="_blank">Kalfalık-Ustalık Belgesi</a>
                        <a href="https://www.youtube.com/watch?v=x4UREjn3S4Y" target="_blank">Usta Öğrencilik Belgesi</a>
                        <a href="http://mtegm.meb.gov.tr/kalfalik_ustalik_sinavlari/alanlar.php" target="_blank">Elektronik Sınav e-Sınav Ders İçerikleri</a>
                        <a href="http://mtegm.meb.gov.tr/kalfalik_ustalik_sinavlari/sinav_kriterleri.php" target="_blank">Beceri Sınavı Değerlendirme Kriterleri</a>
                    </div></li>
                    <li class="drop"><a href="#">ARGE Merkezi &nbsp; <i class="fa fa-caret-down"></i></a>
                    <div class="drop-content">
                        <a href="Arge/hava-kalite-izleme-cihazi.php" target="_blank">Ata Hava Kalitesi İzleme ve Örnekleme Cihazı</a>
                        <a href="dosyalar/07150222_ARITMATIKSIPERLIK.pdf" target="_blank">Aritmetik Siperlik</a>
                        <a href="dosyalar/07141114_E-CESME.pdf" target="_blank">E-Çeşme</a>
                        <a href="dosyalar/07141732_KODPETEGI.pdf" target="_blank">Kod Peteği</a>
                        <a href="dosyalar/07143023_NTKDijital_Kursu.pdf" target="_blank">Dijital Kürsü</a>
                        <a href="dosyalar/07143215_NTK_E_Isletme.pdf" target="_blank">E-İşletme</a>
                        <a href="dosyalar/08034123_pisman.pdf" target="_blank">Pişmaniye Fincanlama Makinası</a>
                        <a href="dosyalar/07145500_NTK-Yeni-Proje-Sunumlari-sonsuz-cnc.pdf" target="_blank">Sonsuz CNC</a>
                        <a href="08034100_yangin.pdf" target="_blank">İkizalp Yangın Söndürme Cihazı Kuru Kimyevi Toz Dolum Makinası</a>
                        <!--<a href="">BioArıtma Siperlik</a>-->
                    </div>
                    </li>
                    <li class="drop"><a href="#">Proje Okulu &nbsp; <i class="fa fa-caret-down"></i></a>
                    <div class="drop-content">
                        <a href="proje-okul/patentle-turkiye.php">Patentle Türkiye</a>
                        <a href="proje-okul/teknofest.php">Teknofest</a>
                    </div>
                    </li>
                    <li class="drop"><a href="etkilesimli-tahta-destek.php">Etkileşimli Tahta Destek Nok.</a></li>
                    

            </ul>
        </div>
    </nav>

        <header id="main-header" class="header">
            <div class="container">
                <div class="header-container">
                    <div class="header-content">
                        <img src="images/mesem.jpg" alt="">
                    </div>

                        <div class="haberler">
                            <div class="title-container">
                                <h1 class="title">Okulumuzdan Haberler</h1>
                            </div>
                            <div class="container">
                                <?php 
                                    while($newsGet=$newsReq->fetch(PDO::FETCH_ASSOC)){ ?>
                                
                                <div class="card">
                                    <div class="item">
                                        <a href="Admin/haber-<?php echo $newsGet["news_seourl"];?>"><img src="<?php echo $newsGet["news_image"];?>" alt=""></a>
                                        <p class="tarih"><i class="far fa-calendar-alt"></i><?php echo $newsGet["news_time"];?></p>
                                        <a href="Admin/haber-<?php echo $newsGet["news_seourl"];?>" class="konu-baslik"><?php echo $newsGet["news_title"];?></a>
                                        <p class="icerik"><?php echo $newsGet["news_description"];?></p>
                                        <a href="Admin/haber-<?php echo $newsGet["news_seourl"];?>" class="devami">Devamını Oku ></a>
                                    </div>
                                </div>
                                <?php } ?>

                                <!-- <div class="card">
                                    <div class="item">
                                        <a href="#"><img src="images/sorumluluk.jpg" alt=""></a>
                                        <p class="tarih"><i class="far fa-calendar-alt"></i>23-11-2021</p>
                                        <a href="#" class="konu-baslik">Sorumluluk sınav takvimi yayınlandı....</a>
                                        <br>
                                        <a href="#" class="devami">Devamını Oku ></a>
                                    </div>
                                </div>
                                
                                <div class="card">
                                    <div class="item">
                                        <a href="#"><img src="images/ARGE-OKUL-Tanitim.jpg" alt=""></a>
                                        <p class="tarih"><i class="far fa-calendar-alt"></i>23-11-2021</p>
                                        <p class="icerik">AR-GE Merkezimizin yaptığı ya da yapmakta olduğu projelerimiz.....</p>
                                    </div>
                                </div> -->

                            </div>
                        </div>
                </div>
            </div>
        </header>
            <div class="okulumuz">
                
                <div class="container-okul">
                    <div class="okulumuz-title">
                        <h1> &nbsp; &nbsp; &nbsp; &nbsp; Sayılarla Kurumumuz</h1>
                        <p class="okul-title-content">Kurumumuz hakkında detaylı bilgi almak için  <a href="#">tıklayınız</a></p>
                    </div>
                <ul>
                    

                        <li class="harita"><img src="images/turkiye-haritasi.png" alt=""></li>
                        
                        <li class="derslik"><img src="images/icon-derslik.png" alt="">
                            <p class="okulumuz-baslik">Derslik Sayısı</p>
                            <p class="okulumuz-sayi"><?php echo $infoGet["information_derslik"]; ?></p>
                        </li>
                        <li class="ogretmen"><img src="images/icon-ogretmen.png" alt="">
                            <p class="okulumuz-baslik">Öğretmen Sayısı</p>
                            <p class="okulumuz-sayi"><?php echo $infoGet["information_ogretmen"]; ?></p>
                        </li>
                        <li class="ogrenci"><img src="images/icon-ogrenci.png" alt="">
                            <p class="okulumuz-baslik">Öğrenci Sayısı</p>
                            <p class="okulumuz-sayi"><?php echo $infoGet["information_ogrenci"]; ?></p>
                        </li>
                    
                    
                </ul>
            </div>
        </div>

        <div class="baglantilar">
            <div class="container">
                <h1 class="title">Bağlantılar</h1>
                <ul class="links">
                    <?php 
                        while($connectGet=$connect->fetch(PDO::FETCH_ASSOC)){ ?>

                            <li><a href="<?php echo $connectGet["connect_url"]?>" title="<?php echo $connectGet["connect_title"] ?>"><i class="fas fa-angle-right"></i> &nbsp;<?php echo $connectGet["connect_text"]; ?></a></li>
                        
                    
                    <?php } ?>
                    <!-- <li><a href="https://mebbis.meb.gov.tr" title="MEB Bilişim Sistemleri Giriş Ekranı"><i class="fas fa-angle-right"></i> &nbsp;MEB Bilişim Sistemleri Giriş Ekranı</a></li>
                    <li><a href="https://e-okul.meb.gov.tr" title="e-Okul Veli Bilgilendirme Sistemi"><i class="fas fa-angle-right"></i> &nbsp;e-Okul Veli Bilgilendirme Sistemi</a></li>
                    <li><a href="http://sgb.meb.gov.tr/www/resmi-istatistikler/icerik/64" title="Milli Eğitim Bakanlığı İstatistiki Bilgileri"><i class="fas fa-angle-right"></i> &nbsp;Milli Eğitim Bakanlığı İstatistiki Bilgileri</a></li>
                    <li><a href="http://www.meb.gov.tr/duyurular/duyurular2012/basinmus/mebim.php" title="444 0 MEB"><i class="fas fa-angle-right"></i> &nbsp;444 0 MEB</a></li>
                    <li><a href="https://www.turkiye.gov.tr" title="e-Devlet Kapısı >> www.turkiye.gov.tr"><i class="fas fa-angle-right"></i> &nbsp;e-Devlet Kapısı >> www.turkiye.gov.tr</a></li>
                    <li><a href="https://www.cimer.gov.tr" title="Cumhurbaşkanlığı İletişim Merkezi"><i class="fas fa-angle-right"></i> &nbsp;Cumhurbaşkanlığı İletişim Merkezi</a></li>
                    <li><a href="http://mebdeogren.meb.gov.tr" title="Mebde Öğren"><i class="fas fa-angle-right"></i> &nbsp;Mebde Öğren</a></li>
                    <li><a href="http://izmir.meb.gov.tr/gocepi/" title="Geleceğin Özel Çocuklarının Eğitim Projesi"><i class="fas fa-angle-right"></i> &nbsp;Geleceğin Özel Çocuklarının Eğitim Projesi</a></li> -->
                </ul>
            </div>
        </div>


        <?php include "../website-school/Admin/footer.php"?>
                
                <div class="footer-info">
                    MEB © - Tüm Hakları Saklıdır. Gizlilik, Kullanım ve Telif Hakları bildiriminde belirtilen kurallar çerçevesinde hizmet sunulmaktadır.
                </div>

                <script src="app.js" charset="utf-8"></script>
    

</body>
</html>