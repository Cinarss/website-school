<?php
include "connect.php";


$setttingsReq=$db->prepare("SELECT * from settings WHERE settings_id=:id");
$setttingsReq->execute(array(
    "id" => 0
));

$settingsGet=$setttingsReq->fetch(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <?php include "sidebar.php"; ?>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="images/logo/logo.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/layout_img/user_img.jpg" alt="#" /><span class="name_user">John David</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a>
                                       <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->

                
               <div class="container mt-5">
                <form action="process.php" method="POST" enctype="multipart/form-data">
               <div class="form-group">
               <h1>Logo </h1>
               <?php 
                    if (strlen($settingsGet['settings_image'])>0) {?>

                    <img width="200"  src="../dim<?php echo $settingsGet['settings_image']; ?>">

                    <?php } else {?>


                    <img width="200"  src="../images/logo-removebg-preview.png">


                    <?php } ?>


                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="file" id="first-name"  name="settings_image"  class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <input type="hidden" name="eski_yol" value="<?php echo $settingsGet['settings_image']; ?>">

                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" name="logoEdit" class="btn btn-primary">Güncelle</button>
                </div>

              
                         

               
                     <div class="mb-3">
                        <label for="Site Başlığı" class="form-label">Site Başlığı</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $settingsGet["settings_title"]; ?>" name="settings_title" placeholder="Site Başlığı">
                     </div>

                     <div class="mb-3">
                        <label for="Site Açıklaması" class="form-label">Site Açıklaması</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $settingsGet["settings_description"]; ?>" name="settings_description" placeholder="Site Açıklaması">
                     </div>

                     <div class="mb-3">
                        <label for="Site Anahtar Kelime" class="form-label">Site Anahtar Kelime</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $settingsGet["settings_keywords"]; ?>" name="settings_keywords" placeholder="Site Anahtar Kelime">
                     </div>

                     <div class="mb-3">
                        <label for="Site Yazar" class="form-label">Site Yazar</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $settingsGet["settings_author"]; ?>" name="settings_author" placeholder="Site Yazar">
                     </div>
                     <button class="mb-3 btn btn-primary" name="settingsSave">Güncelle</button>
                     </div>
            </form>

               <!-- dashboard inner -->



      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/chart_custom_style1.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>