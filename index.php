<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
	if (!isset($_SESSION['uid'])) {
		header('location:login.php');
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GreenWash</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preload" href="webfonts/fa-solid-900.woff2" as="font" crossorigin>
	<link rel="preload" href="fonts/JosefinSans-Light.ttf" as="font" crossorigin>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">

</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">Greenwash</a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link active" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="index.php#service">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Services</a>
					<a class="nav-item nav-link" href="index.php#about">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About Us</a>
					<a class="nav-item nav-link" href="price-list.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price List</a>
					<a class="nav-item nav-link" href="index.php#main-contact" data-toggle="modal" data-target="#contact">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us</a>
				</div>
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link active" href="#">
						<?php
						echo "Welcome " . $_SESSION['uname'];
						?> <span class="sr-only">(current)</span>&nbsp;&nbsp;&nbsp;</a>
					<button class="btn btn-danger text-center" id="logout">Log out</button>
				</div>
			</div>
		</nav>
	</header>
	<section id="main-contact" class="container-fluid">
		<div class="row">
			<div class="col-6 mx-auto">
				<div class="modal fade" id="contact" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h2 class="modal-title text-center">Contact Us</h2>
								<button type="button" class="close" data-dismiss="modal">&times;</button>

							</div>
							<div class="modal-body">
								<form role="form" action="" id="contact-form" name="contact-form">
									<div class="form-group">
										<label for="name">Full Name</label>
										<input type="text" class="form-control" id="name" name="name">
									</div>
									<div class="form-group">
										<label for="email">Email address:</label>
										<input type="email" class="form-control" id="email" name="email">
									</div>
									<div class="form-group">
										<label for="message">Message:</label>
										<textarea rows="3" class="form-control" id="message" name="message"></textarea>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

										<input type="submit" name="submit_contact" id="submit-button" class="btn btn-default btn-primary" />
									</div>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h2 class="text-center fnt-wt-lg mt-4">Welcome To Greenwash</h2>
			</div>

			<p>&nbsp;</p>
		</div>
	</div>
	<div class="slider-div">
		<div class="cycle-slideshow" data-cycle-fx="fade" data-cycle-speed=1000 data-cycle-timeout=2000 data-cycle-manual-fx="tileSlide" data-cycle-manual-speed="1000" data-cycle-auto-height="container">
			<img src="images/Untitled-1.png">
			<img src="images/reclaim-evenings-weekends-from-ironing-order.png">
			<img src="images/pro-ironing1.png">

		</div>
	</div>

	<hr />
	<br><br>
	<section class="container-fluid services" id="service">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<h2 class="text-center fnt-wt-lg">Services</h2>
				<h4 class="text-center fnt-sz-lg ">Don't Work Hard Work Smart</h4>
				<center><hr class="greenwash_hr"></center><br>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 ironing-service">
					<h3 class=" text-center font-weight-bold">Ironing</h3>
				<img src="images/ironing-service.jpg" class="img-responsive" />
				<div class="carousel-caption">
					<div class="text-center">
						<button class="btn btn-info" data-placement="top" data-toggle="popover" title="Ironing" data-content="Best Ironing at one click.free pick up and delivery.">Read more</button><span>&nbsp;</span>
						<a href="placeorder.php" class="btn btn-success" role="button">place order</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 ironing-service">
					<h3 class="text-center font-weight-bold">Washing</h3>
				<img src="images/washing-clothes1.png" class="img-responsive" />
				<div class="carousel-caption">
					<button class="btn btn-info" data-placement="top" data-toggle="popover" title="Washing" data-content="Make an impression with your clean clothews at one click.free pick up and delivery.">Read more</a></button><span>&nbsp;</span>
					<a href="placeorder.php" class="btn btn-success" role="button">place order</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4  ironing-service">
					<h3 class="text-center font-weight-bold">Dry cleaning</h3>
				<img src="images/drycleaning.png" class="img-responsive" />
				<div class="carousel-caption">
					<button class="btn btn-info" data-placement="top" data-toggle="popover" title="Dry-Cleaning" data-content="Feel proud what you wear just click on place order.free pick up and delivery.">Read more</button><span>&nbsp;</span>
					<a href="placeorder.php" class="btn btn-success" role="button">place order</a>
				</div>
			</div>
		</div>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
	</section>
	<hr />
	<br><br>
	<section class="container-fluid services text-center" id="about">
		<h2 class="fnt-wt-lg"> About us</h2>
		<!-- <p class="fnt-wt-lg"> Improving life with best service </p> -->
		<h4 class="text-center fnt-sz-lg ">Improving Life With Best Service</h4>
		<center><hr class="greenwash_hr"></center><br>
		<div class="row">
			<div class="col-sm-4 padding">
				<center>
					<i class="fa fa-money fa_icon" aria-hidden="true"></i><br>
					<h3>Affordable prize</h3>
					<p>GreenWash.com is great at providing services like ironing,washing,dry-cleaning,etc.We really want to provide one click best solution</p>
				</center>
			</div>

			<div class="col-sm-4 padding">
				<center>
					<!-- <i class="fa fa-money fa_icon" aria-hidden="true"></i> -->
					<i class="fas fa-users fa_icon"></i><br>
					<h3>Best cleaning staff</h3>
					<p>GreenWash.com is great at providing services like ironing,washing,dry-cleaning,etc.We really want to provide one click best solution</p>
				</center>
			</div>

			<div class="col-sm-4 padding">
				<center>
					<!-- <i class="fa fa-money fa_icon" aria-hidden="true"></i> -->
					<i class="fas fa-user-clock fa_icon"></i><br>
					<h3>Timely pick up and delivery</h3>
					<p>GreenWash.com is great at providing services like ironing,washing,dry-cleaning,etc.We really want to provide one click best solution</p>
				</center>
			</div>
		</div>
	</section>

	
	<div class="clear"></div>
	<p>&nbsp;</p>
	<section id="main-contact" class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3 ">
				<div class="modal fade" id="contact" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h2 class="modal-title">Contact Us</h2>
							</div>
							<div class="modal-body">
								<form role="form" action="" method="post" id="contact-form" name="contact">
									<div class="form-group">
										<label for="name">Full Name</label>
										<input type="text" class="form-control" id="name" name="name">
									</div>
									<div class="form-group">
										<label for="email">Email address:</label>
										<input type="email" class="form-control" id="email" name="email">
									</div>
									<div class="form-group">
										<label for="message">Message:</label>
										<textarea rows="3" class="form-control" id="message" name="message"></textarea>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

										<input type="submit" name="submit_contact" form="form3" id="submit-button" class="btn btn-default btn-primary" />
									</div>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="admin_control">
			<a href="http://localhost/greenwash-master/admin/" class="admin_control_text">Check admin control</a>
		</div>
	</section>


	<!-- Footer -->
	<footer class="page-footer font-small bg-dark text-light">
		<!-- Copyright -->
		<div class="footer-copyright text-center py-3 text-light">© 2020 Copyright
			<a href="#" class="text-light"> Greenwash.com</a>
		</div>
		<!-- Copyright -->

	</footer>
	<!-- Footer -->

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script src="js/jquery.cycle2.min.js"></script>
	<script src="js/jquery.cycle2.tile.js"></script>

	<script src="js/main_1.js"></script>

	<script src="js/jquery.validate.min.js"></script>
	<script src="js/valid_login.js"></script>
	<script src="js/valid_signup.js"></script>
	<script src="js/valid_contact.js"></script>
	<script src="js/logout.js"></script>
</body>

</html>