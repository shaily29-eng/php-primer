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

		</body>
		</html>
