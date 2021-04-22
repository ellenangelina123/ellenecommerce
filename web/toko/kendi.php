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
									<li><?= Html::a('GUCCI', ['/toko/accessories'])?></li>
                                	<li><?= Html::a('Tempat Minum', ['/toko/kendi']) ?></li>
                                	<li><?= Html::a('Kap Lampu Taman', ['/toko/single']) ?></li>
							  </ul>
						 </li>               
						 <li class="dropdown1"><a href="404.html">EXTRAS</a>
							 <ul class="dropdown2">
									<li><a href="404.html">CLASSIC BELL</a></li>
									<li><a href="404.html">BOTTLE CAGE</a></li>
									<li><a href="404.html">TRUCK GRIP</a></li>
							  </ul>
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
		 <h2>Tempat Minum</h2>
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
							 <img src="<?= $url ?>n1.jpg" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>Wire Locks<span>$7.00</span></h5></a>
								 <a class="add-cart" href="single.html">Quick View</a>
								 <a class="qck" href="single.html">BUY NOW</a>
							 </div>
						 </div></a>
						 <a href="single.html"><div class="part-sec">					 
							 <img src="<?= $url ?>n3.jpg" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>Gloves<span>$50.00</span></h5></a>
								 <a class="add-cart" href="single.html">Quick View</a>
								 <a class="qck" href="single.html">BUY NOW</a>
							 </div>
						 </div></a>
						 <a href="single.html"><div class="part-sec none1">					 
							 <img src="<?= $url ?>n2.jpg" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>Speed Cassette<span>$200.00</span></h5></a>
								 <a class="add-cart" href="single.html">Quick View</a>
								 <a class="qck" href="single.html">BUY NOW</a>
							 </div>
						 </div></a>
						 <a href="single.html"><div class="part-sec none1">					 
							 <img src="<?= $url ?>n4.jpg" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>Road Bike Pedals<span>$200.00</span></h5></a>
								 <a class="add-cart" href="single.html">Quick View</a>
								 <a class="qck" href="single.html">BUY NOW</a>
							 </div>
						 </div></a>
						 <div class="clearfix"></div>
					 </div>
					 
					 <div class="parts2">
						 <a href="single.html"><div class="part-sec">					 
							 <img src="<?= $url ?>t5.JPG" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>Rear Derailleur<span>$200.00</span></h5></a>
								 <a class="add-cart" href="single.html">Quick View</a>
								 <a class="qck" href="single.html">BUY NOW</a>
							 </div>
						 </div></a>
						 <a href="single.html"><div class="part-sec">					 
							 <img src="<?= $url ?>n6.JPG" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>Race XC Crankset<span>$200.00</span></h5></a>
								 <a class="add-cart" href="single.html#">Quick View</a>
								 <a class="qck" href="single.html">BUY NOW</a>
							 </div>
						 </div></a>
						 <a href="single.html"><div class="part-sec none1">					 
							 <img src="<?= $url ?>n7.JPG" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>Aero Handlebars<span>$200.00</span></h5></a>
								 <a class="add-cart" href="single.html">Quick View</a>
								 <a class="qck" href="single.html">BUY NOW</a>
							 </div>
						 </div></a>
						 <a href="single.html"><div class="part-sec none1">					 
							 <img src="<?= $url ?>n8.JPG" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>Grip Tires<span>$200.00</span></h5></a>
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

