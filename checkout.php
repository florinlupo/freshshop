<?php

require_once ("php/conectare.php");
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <title>Freshshop </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
 
    <link rel="stylesheet" href="css/style.css">
  
    <link rel="stylesheet" href="css/responsive.css">
  
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
   
    <header class="main-header">
     
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
               
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="index.html">Acasa</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">Despre noi</a></li>
                        <li class="dropdown active">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
								<li><a href="shop.php">Produse</a></li>
								<li><a href="shop-detail.html">Detalii produse</a></li>
								
                                
                                
                            </ul>
                        </li>
						
                        <li class="nav-item"><a class="nav-link" href="gallery.html">Poze</a></li>
                      
						<li class="nav-item"><a  class="nav-link" href="checkout.php">Creare cont</a></li>
                        <li class="nav-item"><a class="nav-link" href="my-account.html">Conectare</a></li>
                    </ul>
                </div>
                
                <div class="attr-nav">
                    <ul>
                        
                        <li class="nav-item"><a class="nav-link" href="cart.html">
						<i class="fa fa-shopping-bag"></i>
							Comanda
					</a></li>
                    </ul>
                </div>
                
            </div>
            
           
        </nav>
        
    </header>
    
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Creare cont</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Acasa</a></li>
                        <li class="breadcrumb-item active">Creare cont</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<br><br><br>
    <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>Creare cont</h3>
                    </div>
                    <br>
                        <form action="signup.php" method="POST">
						<div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputName" class="mb-0">Nume</label>
                                <input type="text" class="form-control" name="Nume" placeholder="Nume"></div>
                            <div class="form-group col-md-6">
                                <label for="InputLastname" class="mb-0">Prenume</label>
                                <input type="text"  class="form-control" name="Prenume" placeholder="Prenume"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputEmail1" class="mb-0">Adresa mail</label>
                                <input type="text"  class="form-control" name="Email" placeholder="Email"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword1" class="mb-0">Parola</label>
                                <input type="password"  class="form-control" name="Parola" placeholder="Parola"></div>
							<div class="form-group col-md-6">
                               <label for="InputAdresa" class="mb-0">Adresa</label>
                               <input type="text" class="form-control" name="Adresa" placeholder="Adresa"> </div>
							  <div class="form-group col-md-6">
                               <label for="InputNr" class="mb-0">Telefon</label>
                               <input type="int" class="form-control" name="Telefon" placeholder="Telefon"> </div>
                        </div>	
						<input type="submit" class="btn hvr-hover" name="Trimite" value="Trimite">
						</form>
						<br>	
                        
                    
                </div>
				<br><br><br>
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/mere.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/pere.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/ardeibi.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/ardeika.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/cartofi.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/cas.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/castrc.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/cea.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/rosie.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/varzar.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
			
        </div>
    </div>
    
    <footer>
        <div class="footer-main">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Timpul în care se fac livrări</h3>
							<ul class="list-time">
								<li>Luni-Vineri: 08:30-18:30</li> <li>Sâmbătă: 10:00-18:00</li> <li>Duminică: <span>Închis	</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Noutăți despre produse noi sau schimbări de preț</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Adresa mail*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Trimite</button>
							</form>
						</div>
					</div>
					
				</div>
				<hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>Despre Freshshop</h4>
							<p>Este un site destinat persoanelor care doresc o viața mai sanatoasă, unde pot găsii produse proaspete</p>
							<p>Produsele noastre sunt crescute natural, fara chimicale</p>
							<p>Produsele sunt crescute in solare speciale, pe timpul ierni noi încălzim solarele pentru a crește producția</p>
							</div>
                    </div>
                   
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Cum ne puteți contacta</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Adresa: Giarmata din județul Timiș,  <br>Str. Morii,<br> Nr. 110 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Telefon: <a href="tel:+1-888705770">0736380491</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="freshshop.tm@gmail.com">freshshop.tm@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>