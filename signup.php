 <?php
 	include 'db_con.php';
	$con=OpenCon();
	//echo "connection successful";
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$uname = $_POST["name"];
		$upass = $_POST["password"];
		$umail = $_POST["email"];
		
		$sql="INSERT INTO login (username,password,email) VALUES ( '$uname','$upass','$umail')";
		if(mysqli_query($con,$sql)){
			header("Location: index.php");
		}
		
	}
	
  ?>
  <html>
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
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/price_rangs.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-white">
    
<img src="img/logo.png" alt="logo">
    <!--================login_part Area =================-->
    <section class="login_part section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Already have an Account?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href="login.php" class="btn_3">Login in Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                           
                            <h3>Welcome To Winter<br>
                                SignUp</h3>
                            <span style="color:red;">
                            <?php
								if($_SERVER["REQUEST_METHOD"]=="POST"){
									if(!mysqli_query($con,$sql))
										echo "Error : ".mysqli_error($con);
								}
								
							?>
                           <br>
                           <br>
                            </span>
                            <form class="row contact_form" action="" method="post" novalidate="novalidate">
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="name" value=""
                                        placeholder="Username">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" value=""
                                        placeholder="Password">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="email" name="email" value=""
                                        placeholder="Email">
                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" value="submit" class="btn_3">
                                        Signup
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->

    
    
    <!--::footer_part start::-->
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
           
</body>

</html>


<?php
CloseCon($con);
?>