<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Marco's Pizza</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-5">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.php">home</a></li>
                                        <li><a href="Menu.php">Menu</a></li>
                                        <li><a href="about.php">About</a></li>
                                       
                                         <!-- <li><a href="#">Pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="elements.php">elements</a></li>
                                                </ul>
                                            </li> -->
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.php">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>


                        <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                            <div class="book_room">
                                <div class="button-group-area mt-40">    
                                    <a href="login.php" class="genric-btn primary circle">Log In</a>
                                    <a href="register.php" class="genric-btn info circle">Register</a>
                                   <!-- <a href="#" class="genric-btn primary circle">Log out</a>
                                    <H3>      </H3>    --> 
                            </div>
                           <!-- <a href="#" class="fa fa-user-circle-o" style="font-size:48px;color:white"></a>-->
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="bradcam_area breadcam_bg">
        <h3>Register</h3>
    </div>
    <!-- bradcam_area_end -->

    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container" style="text-align: center ">


             
            <p style="font-weight: bold;">Zarejestruj się aby móc skorzystać</p>
                   
            <p style="font-weight: bold;">ze specjalnej oferty </p>



            <form action="add_user.php" method="post">
                <input type="text" style="margin: 10px;" placeholder="Imie" name="name">
                <?php 
                    
                if (isset($_SESSION['error_name'])) {
                echo <<<ERROR
                    </br>
                            <p6 style="font-size:15px; color: red">{$_SESSION['error_name']}</p6>
                        
ERROR;
unset($_SESSION['error_name']);
                }
            ?>
                </br>
                <input type="text" style="margin: 10px;" placeholder="Nazwisko" name = "surname">
                <?php 
                   
                if (isset($_SESSION['error_surname'])) {
                echo <<<ERROR
                </br>
                            <p6 style="font-size:15px; color: red">{$_SESSION['error_surname']}</p6>
                        
ERROR;
unset($_SESSION['error_surname']);
                }
            ?>
                </br>
                 <input type="text" style="margin: 10px;" placeholder="Email" name = "email">
                 <?php 
                   
                if (isset($_SESSION['error_email'])) {
                echo <<<ERROR
                </br>
                            <p6 style="font-size:15px; color: red">{$_SESSION['error_email']}</p6>
                        
ERROR;
unset($_SESSION['error_email']);
                }
            ?>
                </br>
                <select name="city" style="width: 183px; height: 30px; margin: 10px;" >
          
   <?php 
    require_once 'connect.php';
    $sql = "SELECT * FROM city ORDER BY city";
    
    $result = $conn->query($sql);
    while ($city = $result->fetch_assoc()) {
      echo <<<CITY
        <option value="$city[id]" style="color: black">$city[city]</option>
CITY;
    }
  ?>
          </select>
          </br>
                <input type="password" style="margin: 10px;" placeholder="Password" name="password">
                <?php 
                   
                if (isset($_SESSION['error_password'])) {
                echo <<<ERROR
                </br>
                            <p6 style="font-size:15px; color: red">{$_SESSION['error_password']}</p>
                        
ERROR;
                unset($_SESSION['error_password']);
                }
            ?>
                </br>
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
               <label> akceptuje warunki</label>
               <?php 
                   
                if (isset($_SESSION['error_terms'])) {
                echo <<<ERROR
                    </br>
                            <p6 style="font-size:15px; color: red">{$_SESSION['error_terms']}</p6>
                        
ERROR;
                unset($_SESSION['error_terms']);
                }
            ?>
                </br>
                <button type="submit">Załóż konto</button>
            </form>
            

        
       

       
        
            
              
        </div>
    </section>

    <!-- instragram_area_end -->

    <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                       
                        </div>
                      
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="socail_links text-center">
                                    <ul>
                                        <li>
                                            <a href="https://www.instagram.com/marcospizza/" target="_blank">
                                                <i class="ti-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/marcospizza" target="_blank">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/MarcosPizza/" target="_blank">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                         
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>