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
<link href="css/menus.css" rel="stylesheet">
<link href="third-party/font/css/font-awesome.css" rel="stylesheet">
<!--[if IE]>
	<link rel="stylesheet" href="css/font-awesome-ie7.css">
<![endif]-->
<!--[if lt IE 9]>
	<script src="third-pary/bootstrap/js/html5shiv.js"></script>
<![endif]-->
</head>
<body class="menu-body">
<?php include 'common/header.php'; ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span9">
			<div class="menu">
				<h3>Menu</h3>
				<ul class="nav nav-tabs" id="myTab">
					<li class="active"><a href="#snacks" data-toggle="tab">Snacks</a></li>
					<li><a href="#starters" data-toggle="tab">Starters</a></li>
					<li><a href="#main" data-toggle="tab">Main Courses</a></li>
					<li><a href="#rice" data-toggle="tab">Rice</a></li>
					<li><a href="#chinese" data-toggle="tab">Chinese</a></li>
					<li><a href="#deserts" data-toggle="tab">Deserts</a></li>
				</ul>
				
				<div class="tab-content">
					<div class="tab-pane active" id="snacks">
						<h5>SNACKS</h5>
						<div class="row-fluid">
							<div class="span6 veg">
								<h6>Veg</h6>
								<div class="menu-block">
									<h5>Soup</h5>
									<div class="row-fluid">
										<div class="span4">
											<div class="food-menu clearfix">
												<div class="food-item-img"><img src="images/ts.jpg" alt=""></div>
												<div class="food-item-name">Tomato</div>
											</div>
										</div>
										<div class="span4">
											<div class="food-menu clearfix">
												<div class="food-item-img"><img src="images/scs.jpg" alt=""></div>
												<div class="food-item-name">Hot & Sour</div>
											</div>
										</div>
										<div class="span4">
											<div class="food-menu clearfix">
												<div class="food-item-img"><img src="images/scs.jpg" alt=""></div>
												<div class="food-item-name">Veggie</div>
											</div>
										</div>
									</div>
								</div>
								<div class="menu-block">
									<h5>Starters</h5>
									<div class="row-fluid">
										<div class="span4">
											<div class="food-menu clearfix">
												<div class="food-item-img"><img src="images/ts.jpg" alt=""></div>
												<div class="food-item-name">Tomato</div>
											</div>
										</div>
										<div class="span4">
											<div class="food-menu clearfix">
												<div class="food-item-img"><img src="images/scs.jpg" alt=""></div>
												<div class="food-item-name">Hot & Sour</div>
											</div>
										</div>
										<div class="span4">
											<div class="food-menu clearfix">
												<div class="food-item-img"><img src="images/scs.jpg" alt=""></div>
												<div class="food-item-name">Veggie</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="span6 non-veg">
								<h6>Non-Veg</h6>
								<div class="menu-block">
									<h5>Soup</h5>
									<div class="row-fluid">
										<div class="span4">
											<div class="food-menu clearfix">
												<div class="food-item-img"><img src="images/ts.jpg" alt=""></div>
												<div class="food-item-name">Tomato</div>
											</div>
										</div>
										<div class="span4">
											<div class="food-menu clearfix">
												<div class="food-item-img"><img src="images/scs.jpg" alt=""></div>
												<div class="food-item-name">Hot & Sour</div>
											</div>
										</div>
										<div class="span4">
											<div class="food-menu clearfix">
												<div class="food-item-img"><img src="images/scs.jpg" alt=""></div>
												<div class="food-item-name">Veggie</div>
											</div>
										</div>
									</div>
								</div>
								<div class="menu-block">
									<h5>Starters</h5>
									<div class="row-fluid">
										<div class="span4">
											<div class="food-menu clearfix">
												<div class="food-item-img"><img src="images/ts.jpg" alt=""></div>
												<div class="food-item-name">Tomato</div>
											</div>
										</div>
										<div class="span4">
											<div class="food-menu clearfix">
												<div class="food-item-img"><img src="images/scs.jpg" alt=""></div>
												<div class="food-item-name">Hot & Sour</div>
											</div>
										</div>
										<div class="span4">
											<div class="food-menu clearfix">
												<div class="food-item-img"><img src="images/scs.jpg" alt=""></div>
												<div class="food-item-name">Veggie</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="starters">
						<h5>STARTERS</h5>
						<div class="row-fluid">
							<div class="span6 veg"> <br>Veg<br> </div>
							<div class="span6 non-veg"> <br>Non-Veg<br> </div>
						</div>
					</div>
					<div class="tab-pane" id="main">
						<h5>MAIN COURSE</h5>
						<div class="row-fluid">
							<div class="span4 veg"> <br>Veg<br> </div>
							<div class="span4 non-veg"> <br>Non-Veg<br> </div>
							<div class="span4 roti"> <br>Roti<br> </div>
						</div>
					</div>
					<div class="tab-pane" id="rice">
						<h5>RICE</h5>
						<div class="row-fluid">
							<div class="span6 veg"> <br>Veg<br> </div>
							<div class="span6 non-veg"> <br>Non-Veg<br> </div>
						</div>
					</div>
					<div class="tab-pane" id="chinese">
						<h5>CHINESE</h5>
						<div class="row-fluid">
							<div class="span6 veg"> <br>Veg<br> </div>
							<div class="span6 non-veg"> <br>Non-Veg<br> </div>
						</div>
					</div>
					<div class="tab-pane" id="deserts">
						<h5>DESERTS</h5>
						<div class="row-fluid">
							<div class="span6 common"> <br>Sweets<br> </div>
							<div class="span6 common"> <br>Ice-Creams<br> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="span3">
			<div class="alert">
				<h6><b>Location</b> : Mumbai > Thakur Village</h6>
			</div>
			<?php include 'modules/cart.php'; ?>
			<?php include 'modules/lastorder.php'; ?>
		</div>
	</div>
</div>
<?php include 'common/footer.php'; ?>
<script src="third-party/jquery/jquery.js"></script>
<script src="third-party/bootstrap/js/bootstrap-collapse.js"></script>
<script src="third-party/bootstrap/js/bootstrap-tooltip.js"></script>
<script src="third-party/bootstrap/js/bootstrap-tab.js"></script>
<script src="third-party/bootstrap/js/bootstrap-dropdown.js"></script> 
<script>
  $(function () {
    $('#myTab a:first').tab('show');
  })
</script>
<script type="text/javascript">
	$(function () {
		$("[rel='tooltip']").tooltip();
	});
</script>
</body>
</html>