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
<title>Bike Shop a Ecommerce Category Flat Bootstarp Responsive Website Template| Single :: w3layouts</title>
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
						 <a href="index.html"><img src="images/logo.png" alt=""/></a>
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
<div class="product">
	 <div class="container">
		 <div class="ctnt-bar cntnt">
			 <div class="content-bar">
				 <div class="single-page">
					 <div class="product-head">
						<a href="index.html">Home</a> <span>::</span>	
						</div>
					 <!--Include the Etalage files-->
						<link rel="stylesheet" href="css/etalage.css">
						<script src="js/jquery.etalage.min.js"></script>
				<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 400,
					thumb_image_height: 400,
					source_image_width: 800,
					source_image_height: 1000,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
						<!--//details-product-slider-->
					 <div class="details-left-slider">
						 <div class="grid images_3_of_2">
						  <ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="<?= $url ?>p1.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="<?= $url ?>p1.jpg" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="<?= $url ?>p1.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="<?= $url ?>p1.jpg" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="<?= $url ?>p1.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="<?= $url ?>p1.jpg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="<?= $url ?>p1.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="<?= $url ?>p1.jpg"class="img-responsive"  />
							</li>
						</ul>
						</div>
					 </div>
					 <div class="details-left-info">
							<h3>SARUNG TENUN</h3>
								<h4>Model : Motif Gunungan Khomil</h4>
							<h4></h4>
							<p><label>Rp</label> 350.000 
							
							<div class="btn_form">
								<a href="cart.html">buy now</a>
								<a href="cart.html">ADD TO CART</a>
							</div>
							<div class="bike-type">
							<p>COLOR  ::<a href="#">HIJAU SAGE</a></p>
							<p>BRAND  ::<a href="#">SARUNG  TENUN PARENGAN</a></p>
							</div>
							<h5>Description  ::</h5>
							<p style="text-align:justify;" class="desc">Sarung Tenun dengan Motif Gunungan Khomil memiliki lebar 80cm dan panjang 2m dengan warna hijau sage. Warna yang terlihat pada foto sesuai dengan warna aslinya. Apabila terdapat perbedaan warna, disebabkan oleh pengaturan monitor dan efek cahaya pada layar monitor Anda. Ciri khas sarung tenun Parengan yaitu terasa dingin dan nyaman saat dikenakan.  Sarung tenun ini dibuat langsung dari tangan tangan terampil pengrajin sarung tenun ikat di desa Parengan kecamatan Maduran kabupaten Lamongan. Benang sebagai bahan baku tenun ikat  di impor dari China dan India, seperti maseris (mercerized), spon (stafel fiber), juga sutra. Demikian juga dengan zat pewarna yang digunakan juga produk impor. </p>
					 </div>
					 <div class="clearfix"></div>				 	
				  </div>
			  </div>
		  </div>
		  <div class="single-bottom2">
			  <h6>Related Products</h6>
			 <div class="product">
					 <div class="product-desc">
						  <div class="product-img product-img2">
						 <img src="<?= $url ?>p4.jpg" class="img-responsive "alt=""/>
						 </div>
						 <div class="prod1-desc">
								<h5><a class="product_link" href="bicycles.html">Motif ikan lele bandeng  isian pyuk tiga roda, ungu</a></h5>
								<p class="product_descr"> Motif ikan lele dan bandeng, dengan isian pyuk tiga roda adalah motif terbaru kain tenun ikat batik motif geometris songket. </p>									
						 </div>
						 <div class="clearfix"></div>
					 </div>
					 <div class="product_price">
							<span class="price-access">Rp350.000</span>	</br></br>							
							<a class="button1" href="cart.html"><span>Add to cart</span></a>
					 </div>
						<div class="clearfix"></div>
			 </div>
			 <div class="product">
					 <div class="product-desc">
						  <div class="product-img product-img2">
							  <img src="<?= $url ?>p21.jpg" class="img-responsive "alt=""/>
						 </div>
						 <div class="prod1-desc">
								<h5><a class="product_link" href="bicycles.html">Motif Gunungan tenun ikat songket</a></h5>
								<p class="product_descr"> Motif segitiga atau biasa dikenal dengan motif gunungan (gunung) merupakan simbol daerah pantai utara yang tidak jauh dari desa Parengan, yang merupakan daerah pegunungan kapur. </p>									
						 </div>
						 <div class="clearfix"></div>
					 </div>
					 <div class="product_price">
							<span class="price-access">Rp300.000</span> </br></br>						
							<a class="button1" href="cart.html"><span>Add to cart</span></a>
					 </div>
				  <div class="clearfix"></div>
			 </div>
			 <div class="product">
					 <div class="product-desc">
						  <div class="product-img product-img2">
							 <img src="<?= $url ?>p3.jpg" class="img-responsive "alt=""/>
						 </div>
						 <div class="prod1-desc">
								<h5><a class="product_link" href="bicycles.html">Motif ikan lele bandeng isian pyuk tiga roda,hijau</a></h5>
								<p class="product_descr"> Motif ikan lele dan bandeng, dengan isian pyuk tiga roda adalah motif terbaru kain tenun ikat batik motif geometris songket. </p>									
						 </div>
						 <div class="clearfix"></div>
					 </div>
					 <div class="product_price">
							<span class="price-access">Rp350.000</span>	</br></br>							
							<a class="button1" href="cart.html"><span>Add to cart</span></a>
					 </div>
				 <div class="clearfix"></div>
			  </div>
		 </div>	
	 </div>
</div>
<!---->

<!---->

</body>
</html>

