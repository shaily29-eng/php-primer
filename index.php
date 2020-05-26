<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="vi   ewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		
	</head>
	<body>
		<?php include "menu.php"  ?>
		<div id="demo" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			</ul>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/scape4.jpg" alt="img1" width="1100" height="500">
					<div class="carousel-caption">
						<h3>On earth there is no heaven, but there are pieces of it.</h3>
					
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/scape2.jpg" alt="img2" width="1100" height="500">
					<div class="carousel-caption">
						
						<h3>Over every mountain there is a path, although it may not be seen from the valley.</h3>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/scape3.jpg" alt="img3" width="1100" height="500">
					<div class="carousel-caption">
						<h3>The butterfly counts not months but moments, and has time enough.</h3>
						
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
		<section class="my-5">
			<div class="py-5">
				<h2 class="text-center">About Us</h2>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<img src="img/land5.jpg" class="img-fluid aboutimg">
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<h2 class="display-5">NorthEast Region</h2>
						<p class="py-3">The Northeast region can be physiographically categorised into the Eastern Himalaya, the Patkai and the Brahmaputra and the Barak valley plains.The region is covered by the mighty Brahmaputra-Barak river systems and their tributaries.</p>
						<a href="https://en.wikipedia.org/wiki/Northeast_India" class="btn btn-success">click more</a>
					</div>
				</div>
			</div>
		</section>
		<section class="my-5">
			<div class="py-5">
				<h2 class="text-center">Our Services</h2>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<div class="card" style="width:400px">
							<img class="card-img-top" src="img/land6.jpg" alt="Card image">
							<div class="card-body">
								<h4 class="card-title">Yumthang </h4>
								<p class="card-text">Village in Sikkim</p>
								<a href="https://www.arenaflowers.co.in/blog/yumthang-valley-in-sikkim-valley-of-flowers/" class="btn btn-primary">See Profile</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<div class="card" style="width:400px">
							<img class="card-img-top" src="img/land7.jpg" alt="Card image">
							<div class="card-body">
								<h4 class="card-title">SILSAKO</h4>
								<p class="card-text">Lake in Assam</p>
								<a href="http://silsakolake.blogspot.com/" class="btn btn-primary">See Profile</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<div class="card" style="width:400px">
							<img class="card-img-top" src="img/land8.jpg" alt="Card image">
							<div class="card-body">
								<h4 class="card-title">Tashiding
</h4>
								<p class="card-text">Village in Sikkim</p>
								<a href="http://sikkimtourism.gov.in/Webforms/General/Destination/Tashiding.aspx" class="btn btn-primary">See Profile</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="my-5">
			<div class="py-5">
				<h2 class="text-center">Our Gallery</h2>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<img src="img/land1.jpg" class="img-fluid pb-4">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="img/land2.jpg" class="img-fluid pb-4">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="img/land3.jpg" class="img-fluid pb-4">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="img/land4.jpg" class="img-fluid pb-4">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="img/land10.jpg" class="img-fluid pb-4">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="img/land9.jpg" class="img-fluid pb-4">
					</div>
				</div>
			</div>
		</section>
		<section class="my-5">
			<div class="py-5">
				<h2 class="text-center">My Contact</h2>
			</div>
			<div class="w-50 m-auto">
				<form action="userinfo1.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" autocomplete="off" class="form-control">
					</div>
					<div class="form-group">
						<label>Email Id</label>
						<input type="text" name="email" autocomplete="off" class="form-control">
					</div>
					<div class="form-group">
						<label>Mobile</label>
						<input type="text" name="mobile" autocomplete="off" class="form-control">
					</div>
					<div class="form-group">
						<label>Comments</label>
						<textarea class="form-control" name="comments"></textarea>
						
					</div>
					<button type="submit" class="btn btn-success">Submit</button>
				</form>
			</div>
		</section>
		<footer>
			<p class="p-3 bg-dark text-white text-center">@shailygoyalProduction</p>
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	
	</body>
	
</html>
