<?php include("./backend/head_check.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Purchase Coupon</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<?php include("sidenav.php"); ?>
	<?php include("topnav.php"); ?>





	<div class="row padding-sidenav px-0 pr-md-0">
		<div class="col-12">
			<div class="mt-4 mb-0 d-md-none">
				<h2 class="formheader">Purchase Coupon</h2>
			</div>

			<form class="form-container mt-4 form-padding-internal">
				<div class="form-group">
					<label class="required" for="email">Email</label>
					<input type="email" class="form-control" id="email" placeholder="Client Name" name="email" required>
				</div>

				<div class="form-group">
					<label class="required" for="pcoupon">P Coupon</label>
					<input type="number" class="form-control" id="pcoupon" placeholder="Mobile number" name="pcoupon" required>
				</div>
				<div class="form-group">
					<label class="required" for="ecoupon">E Coupon</label>
					<input type="text" class="form-control" id="ecoupon" placeholder="Client Name" name="ecoupon" required>
				</div>
				<button type="submit" class="btn btn-primary formbtn mx-auto submit">Proceed To Pay</button>
			</form>
		</div>
	</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>