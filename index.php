<!DOCTYPE html>
<html lang="en">
<head>
<title>Yummy Food | Order Online Food</title>
<?php include 'common/meta-data.php'; ?>
<link href="third-party/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="third-party/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/nav-bar.css" rel="stylesheet">
<link href="css/carousel.css" rel="stylesheet">
<!--[if lt IE 9]>
	<script src="third-pary/bootstrap/js/html5shiv.js"></script>
<![endif]-->
</head>
<body>
<div class="navbar-wrapper">
	<div class="container">
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="brand" href="#">Yummy Food</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li><a href="#login" data-toggle="modal">Login</a></li>
						<li><a href="#register" data-toggle="modal">Register</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="search">
			<h3>Order Food Online</h3>
			<div class="select-steps clearfix">
				<div class="steps-block"><span class="steps">1</span>Enter Area</div>
				<div class="steps-block"><span class="steps">2</span>Select Restaurant</div>
				<div class="steps-block"><span class="steps">3</span>Your Food on the way</div>
			</div>
			<h4>Tell us your location</h4>
			<div class="location">
				<select>
					<option value="City" selected="selected">City</option>
					<option value="Mumbai">Mumbai</option>
					<option value="Pune">Pune</option>
				</select>
			</div>
			<div class="loation">
				<select>
					<option value="Location" selected="selected">Location</option>
					<option value="Thakur Village">Thakur Village</option>
					<option value="Thakur Complex">Thakur Complex</option>
				</select>
			</div>
			<div><a class="btn btn-large btn-warning" href="#">Find Food</a></div>
		</div>
	</div>
</div>
<div id="myCarousel" class="carousel slide">
	<div class="carousel-inner">
		<div class="item active"> <img src="images/banner/slide_01.jpg" alt="">
			<div class="container">
				<div class="carousel-caption clearfix"> <a class="btn btn-small btn-primary" href="#">Order Now</a>
					<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
					<h1>Chicken Kabab</h1>
				</div>
			</div>
		</div>
		<div class="item"> <img src="images/banner/slide_02.jpg" alt="">
			<div class="container">
				<div class="carousel-caption clearfix"> <a class="btn btn-small btn-primary" href="#">Order Now</a>
					<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
					<h1>Panner Biryani</h1>
				</div>
			</div>
		</div>
		<div class="item"> <img src="images/banner/slide_09.jpg" alt="">
			<div class="container">
				<div class="carousel-caption clearfix"> <a class="btn btn-small btn-primary" href="#">Order Now</a>
					<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
					<h1>South Indian</h1>
				</div>
			</div>
		</div>
		<div class="item"> <img src="images/banner/slide_07.jpg" alt="">
			<div class="container">
				<div class="carousel-caption clearfix"> <a class="btn btn-small btn-primary" href="#">Order Now</a>
					<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
					<h1>Pizza</h1>
				</div>
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a> <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a> </div>
<div class="items">
	<div class="container">
		<div class="row">
			<div class="span2"> <a href="#"><img src="images/veg/item_01.png" alt="" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Panner Tikka"></a> </div>
			<div class="span2"> <a href="#"><img src="images/veg/item_02.png" alt="" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Cholle Bhature"></a> </div>
			<div class="span2"> <a href="#"><img src="images/non-veg/item_01.png" alt="" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Chicken Biryani"></a> </div>
			<div class="span2"> <a href="#"><img src="images/non-veg/item_02.png" alt="" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Chicken Tandoori"></a> </div>
			<div class="span2"> <a href="#"><img src="images/veg/item_03.png" alt="" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Pav Bhaji"></a> </div>
			<div class="span2"> <a href="#"><img src="images/non-veg/item_03.png" alt="" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Pizza"></a> </div>
		</div>
	</div>
</div>
<?php include 'common/footer.php'; ?>
<?php include 'common/register.php'; ?>
<?php include 'common/login.php'; ?>
<script src="third-party/jquery/jquery.js"></script> 
<script src="third-party/bootstrap/js/bootstrap-carousel.js"></script> 
<script src="third-party/bootstrap/js/bootstrap-modal.js"></script> 
<script src="third-party/bootstrap/js/bootstrap-collapse.js"></script> 
<script src="third-party/bootstrap/js/bootstrap-tooltip.js"></script> 
<script>
!function ($) {
	$(function(){
	  $('#myCarousel').carousel()
	})
}(window.jQuery)
</script> 
<script type="text/javascript">
	$(function () {
		$("[rel='tooltip']").tooltip();
	});
</script>
</body>
</html>