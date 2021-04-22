<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

$url = Yii::getAlias("@web") . '/img/';
?>

<!DOCTYPE html>
<html>
<head>
<title>Bike Shop a Ecommerce Category Flat Bootstarp Responsive Website Template| Parts :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
<!--webfont-->
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/scripts.js" type="text/javascript"></script>
<!--js-->

</head>
<body>
<!--banner-->
<script src="js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="banner-bg banner-sec">	
	  <div class="container">
			 <div class="header">
			       <div class="logo">
						 <a href="index.html"><img src="<?= $url ?>/logo.png" alt=""/></a>
				   </div>							 
				  <div class="top-nav">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
					   <ul class="nav">
						  <li class="dropdown1"><?= Html::a('Login', ['/site/login']) ?>
							  <ul class="dropdown2">
																					
							  </ul>
						  </li>
						  <li class="dropdown1"><?= Html::a('Sarung Tenun', ['/toko/parts']) ?>
						 </li>      
						<li class="dropdown1"><a href="">Gerabah</a>>
							 <ul class="dropdown2">
									<li><?= Html::a('GUCI', ['/toko/accessories'])?></li>
                                	<li><?= Html::a('TEMPAT MINUM', ['/toko/kendi']) ?></li>
                                	<li><?= Html::a('Kap Lampu Taman', ['/toko/single']) ?></li>
							  </ul>
						 </li>               
						 <li class="dropdown1"><?= Html::a('CHECKOUT', ['/toko/cart']) ?>
						 </li>
						  <a class="shop" href="cart.html"><img src="<?= $url ?>/cart.png" alt=""/></a>
					  </ul>
				 </div>
				 <div class="clearfix"></div>
			 </div>
	  </div> 				 
</div>
<!--/banner-->
<div class="parts">
	 <div class="container">
		 <h2>GUCI</h2>
		 <div class="bike-parts-sec">
		      <div class="bike-parts">
				 <div class="top">
					 <ul>
						 <li><a href="index.html">home</a></li>
						 <li><a href="#"> / </a></li>
						 <li><a href="#">parts</a></li>
					 </ul>				 
				 </div>
				 <div class="bike-apparels">
					 <div class="parts1">
						 <a href="single.html"><div class="part-sec">					 
							 <img src="<?= $url ?>e1.jpg" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>Guci Putih Motif Pohon<span>Rp100.000</span></h5></a>
								 <a class="add-cart" href="single.html">Quick View</a>
								 <a class="qck" href="single.html">BUY NOW</a>
							 </div>
						 </div></a>
						 <a href="single.html"><div class="part-sec">					 
							 <img src="<?= $url ?>e3.jpg" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>Guci Maroon Flower<span>Rp80.000</span></h5></a>
								 <a class="add-cart" href="single.html">Quick View</a>
								 <a class="qck" href="single.html">BUY NOW</a>
							 </div>
						 </div></a>
						 <a href="single.html"><div class="part-sec none1">					 
							 <img src="<?= $url ?>e2.JPG" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>Guci Classic Polos<span>Rp50.000</span></h5></a>
								 <a class="add-cart" href="single.html">Quick View</a>
								 <a class="qck" href="single.html">BUY NOW</a>
							 </div>
						 </div></a>
						 <a href="single.html"><div class="part-sec none1">					 
							 <img src="<?= $url ?>e4.JPG" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>Guci Putih Motif Bunga<span>Rp200.000</span></h5></a>
								 <a class="add-cart" href="single.html">Quick View</a>
								 <a class="qck" href="single.html">BUY NOW</a>
							 </div>
						 </div></a>
						 <div class="clearfix"></div>
					 </div>
					 
					 <div class="parts2">
						 <a href="single.html"><div class="part-sec">					 
							 <img src="<?= $url ?>e5.JPG" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>Guci Rainbow Flowers<span>Rp250.000</span></h5></a>
								 <a class="add-cart" href="single.html">Quick View</a>
								 <a class="qck" href="single.html">BUY NOW</a>
							 </div>
						 </div></a>
						 <a href="single.html"><div class="part-sec">					 
							 <img src="<?= $url ?>e6.JPG" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>Guci Motif Hewan<span>Rp70.000</span></h5></a>
								 <a class="add-cart" href="single.html#">Quick View</a>
								 <a class="qck" href="single.html">BUY NOW</a>
							 </div>
						 </div></a>
						 <a href="single.html"><div class="part-sec none1">					 
							 <img src="<?= $url ?>e7.JPG" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>Guci Classic Abstrak<span>Rp200.000</span></h5></a>
								 <a class="add-cart" href="single.html">Quick View</a>
								 <a class="qck" href="single.html">BUY NOW</a>
							 </div>
						 </div></a>
						 <a href="single.html"><div class="part-sec none1">					 
							 <img src="<?= $url ?>e8.jpg" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>Guci Classic Tanaman<span>Rp200.000</span></h5></a>
								 <a class="add-cart" href="single.html">Quick View</a>
								 <a class="qck" href="single.html">BUY NOW</a>
							 </div>
						 </div></a>
						 <div class="clearfix"></div>
					 </div>
					
						 <div class="clearfix"></div>
					 </div>
					 
				 </div>
			 </div>
	  </div>
</div>


</body>
</html>

