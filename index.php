<?php
    session_start();
    if(empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == '')
    	header("Location: login.php");
	else
		$ses_name = $_SESSION['userLogin'];


?>
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>winter</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
.gaurav{
	display: table;
           width: 100%;
	height: 100px;
	  }

            .gaurav h5{
                font-size: 40px;
                letter-spacing: 2px;
               
            }
            .gaurav h1{
                font-size: 30px;
                text-transform: capitalize;
                font-weight: 700;
                line-height: 110px;
                margin: 17px 0 49px;
                
                
            }
            .gaurav p{
                font-size: 15px;
                line-height: 1.8;
                font-family: $font_stack_2; 
                margin-bottom: 70px;
                padding-right: 80px;
           
            }
        }
	  .digga{
		  background-color: black;
		  
	  }
	</style>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu" style="max-width: none">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-11">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="category_men.php">Men</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="category_women.php">Women</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="category_kids.php">Kids</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                        	<button><?php echo $ses_name; ?></button>
                        </div>
                        <div>
                        	<a href="cart.php"><i class="ti-bag"></i></a>
                        </div>
                        <div style="margin-left:15px">
                        	<a href="logout.php">Log Out</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_slider">
                        <div class="single_banner_slider">
                           
                            <div class="banner_text">
                                <div class="banner_text_iner">
                                   
                                    <h5>TRY ON</h5>
                                    <h1>Try before you buy</h1>
                                    <a href="upload.html" class="btn_1">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->
    
                                


    <!-- feature_part start-->
    <section class="feature_part pt-4" style="margin-top: 30px; margin-bottom: 20px;">
        <div class="container-fluid p-lg-0 overflow-hidden">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature_post_text">
                        <img src="img/feature_1.png" alt="#">
                        <div class="hover_text">
                           <div class="digga">
                            <a href="category_men.php" class="btn_2">shop for male</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature_post_text">
                        <img src="img/feature_2.png" alt="#">
                        <div class="hover_text">
                            <a href="category_women.php" class="btn_2">Shop for female</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature_post_text">
                        <img src="kids.jpeg" alt="#">
                        <div class="hover_text">
                            <a href="category_kids.php" class="btn_2">Shop for kids</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="banner_part mt-4" style="height: 90px ">
    	
    </section>
    
    <!-- upcoming_event part start-->
<div class="container" style="margin-top:20px; width:100%;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="width:100%;">
      <div class="item active" style="width:100%;">
        <img src="img/banner_img.png" alt="Los Angeles" style="width:100%; height: 500px;">
         <div class="carousel-caption">
         	 <div class="gaurav">
                                    <h5>TRY ON</h5>
                                    <a href="upload.html" class="btn_1">shop now</a>
               </div>
        </div>
      </div>

      <div class="item">
        <img src="pos5.png" alt="Los Angeles" style="width:100%; height: 500px;">
         <div class="carousel-caption">
         	 <div class="gaurav">
                                    <h5>TRY ON</h5>
                                    <a href="upload.html" class="btn_1">shop now</a>
               </div>
        </div>
      </div>
    
      <div class="item">
        <img src="pos4.png" alt="Los Angeles" style="width:100%; height: 500px;">
         <div class="carousel-caption">
         	 <div class="gaurav">
                                    <h5>TRY ON</h5>
                                    <a href="upload.html" class="btn_1">shop now</a>
               </div>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  

    <!-- free shipping here -->
    <section class="shipping_details section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_1.png" alt="">
                        <h4>Free shipping</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-12">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_2.png" alt="">
                        <h4>Cash on Delivery</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-12">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_3.png" alt="">
                        <h4>Card Payments</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-12">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_4.png" alt="">
                        <h4>Customer Service</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- free shipping end -->

    <!-- subscribe_area part start-->
    <section class="instagram_photo">
        <div class="container">
           
                    <div class="instagram_photo_iner">
                       <div class="row">
                        <div class="single_instgram_photo col">
                            <img src="hmn.png" alt="">
                        </div>
                        <div class="single_instgram_photo col">
                            <img src="for.png" alt="">
                        </div>
                        <div class="single_instgram_photo col">
                            <img src="vm.png" alt="">
                        </div>
                        <div class="single_instgram_photo col">
                            <img src="wrogn.png" alt=""> 
                        </div>
                        <div class="single_instgram_photo col">
                            <img src="nik.jpg" alt="">
                        </div>
                        </div>
                    </div>
                
        </div>
    </section>
    <!--::subscribe_area part end::-->

    


</body>

</html>