<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
						  <li class="dropdown1"><a href="bicycles.html">BICYCLES</a>
							  <ul class="dropdown2">
									<li><a href="bicycles.html">FIXED / SINGLE SPEED</a></li>
									<li><a href="bicycles.html">CITY BIKES</a></li>
									<li><a href="bicycles.html">PREMIMUN SERIES</a></li>												
							  </ul>
						  </li>
						  <li class="dropdown1"><a href="parts.html">PARTS</a>
							 <ul class="dropdown2">
									<li><a href="parts.html">CHAINS</a></li>
									<li><a href="parts.html">TUBES</a></li>
									<li><a href="parts.html">TIRES</a></li>
									<li><a href="parts.html">DISC BREAKS</a></li>
							  </ul>
						 </li>      
						 <li class="dropdown1"><a href="accessories.html">ACCESSORIES</a>
							 <ul class="dropdown2">
									<li><a href="accessories.html">LOCKS</a></li>
										<li><a href="accessories.html">HELMETS</a></li>
										<li><a href="accessories.html">ARM COVERS</a></li>
										<li><a href="accessories.html">JERSEYS</a></li>
							  </ul>
						 </li>               
						 <li class="dropdown1"><a href="404.html">EXTRAS</a>
							 <ul class="dropdown2">
									<li><a href="404.html">CLASSIC BELL</a></li>
									<li><a href="404.html">BOTTLE CAGE</a></li>
									<li><a href="404.html">TRUCK GRIP</a></li>
							  </ul>
						 </li>
						  <a class="shop" href="cart.html"><img src="images/cart.png" alt=""/></a>
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
									<img class="etalage_thumb_image" src="images/m1.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="images/m1.jpg" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/m2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="images/m2.jpg" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/m3.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/m3.jpg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="images/m4.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/m4.jpg"class="img-responsive"  />
							</li>
						</ul>
						</div>
					 </div>
					 <div class="details-left-info">
							<h3>SCOTT SPARK</h3>
								<h4>Model No: 3498</h4>
							<h4></h4>
							<p><label>$</label> 300 <a href="#">Click for offer</a></p>
							<p class="size">SIZE ::</p>
							<a class="length" href="#">XS</a>
							<a class="length" href="#">M</a>
							<a class="length" href="#">S</a>
							<div class="btn_form">
								<a href="cart.html">buy now</a>
								<a href="cart.html">ADD TO CART</a>
							</div>
							<div class="bike-type">
							<p>TYPE  ::<a href="#">MOUNTAIN BIKE</a></p>
							<p>BRAND  ::<a href="#">SPORTS SCOTTY</a></p>
							</div>
							<h5>Description  ::</h5>
							<p class="desc">The first mechanically-propelled, two-wheeled vehicle may have been built by Kirkpatrick MacMillan, a Scottish blacksmith, in 1839, although the claim is often disputed. He is also associated with the first recorded instance of a cycling traffic offense, when a Glasgow newspaper in 1842 reported an accident in which an anonymous "gentleman from Dumfries-shire... bestride a velocipede... of ingenious design" knocked over a little girl in Glasgow and was fined five
							The word bicycle first appeared in English print in The Daily News in 1868, to describe "Bysicles and trysicles" on the "Champs Elysées and Bois de Boulogne.</p>
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
							 <img src="images/s1.jpg" class="img-responsive " alt=""/>
						 </div>
						 <div class="prod1-desc">
								<h5><a class="product_link" href="bicycles.html">Road Bike</a></h5>
								<p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra. </p>									
						 </div>
						 <div class="clearfix"></div>
					 </div>
					 <div class="product_price">
							<span class="price-access">$300.51</span>								
							<a class="button1" href="cart.html"><span>Add to cart</span></a>
					 </div>
						<div class="clearfix"></div>
			 </div>
			 <div class="product">
					 <div class="product-desc">
						  <div class="product-img product-img2">
							 <img src="images/s2.jpg" class="img-responsive " alt=""/>
						 </div>
						 <div class="prod1-desc">
								<h5><a class="product_link" href="bicycles.html">Mountain Bike</a></h5>
								<p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra. </p>									
						 </div>
						 <div class="clearfix"></div>
					 </div>
					 <div class="product_price">
							<span class="price-access">$1500.51</span>								
							<a class="button1" href="cart.html"><span>Add to cart</span></a>
					 </div>
				  <div class="clearfix"></div>
			 </div>
			 <div class="product">
					 <div class="product-desc">
						  <div class="product-img product-img2">
							 <img src="images/s3.jpg" class="img-responsive " alt=""/>
						 </div>
						 <div class="prod1-desc">
								<h5><a class="product_link" href="bicycles.html">Single Speed Bike</a></h5>
								<p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra. </p>									
						 </div>
						 <div class="clearfix"></div>
					 </div>
					 <div class="product_price">
							<span class="price-access">$800.51</span>								
							<a class="button1" href="cart.html"><span>Add to cart</span></a>
					 </div>
				 <div class="clearfix"></div>
			  </div>
		 </div>	
	 </div>
</div>
<!---->
<div class="footer">
	 <div class="container wrap">
		<div class="logo2">
			 <a href="index.html"><img src="images/logo2.png" alt=""/></a>
		</div>
		<div class="ftr-menu">
			 <ul>
				 <li><a href="bicycles.html">BICYCLES</a></li>
				 <li><a href="parts.html">PARTS</a></li>
				 <li><a href="accessories.html">ACCESSORIES</a></li>
				 <li><a href="404.html">EXTRAS</a></li>
			 </ul>
		</div>
		<div class="clearfix"></div>
	 </div>
</div>
<!---->

</body>
</html>

