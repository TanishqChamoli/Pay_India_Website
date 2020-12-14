<?php include("./backend/head_check.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Retailers</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<?php include("sidenav.php"); ?>
	<?php include("topnav.php"); ?>
	<div class="row padding-sidenav px-0 pr-md-0">
		<?php
		if (isset($_GET['message'])) {
			echo "<h3>" . $_GET['message']	 . "</h3>";
		}
		?>
		<div class="col-12">
			<form class="form-container mt-4 form-padding-internal" method="POST" action="./backend/add_retailer_b.php">
				<div class="form-col-span-2 text-center mt-3">
					<h3 class="font-weight-bold">User Basic Details</h3>
				</div>
				<div class="form-group">
					<label class="required" for="email">Email</label>
					<input type="email" class="form-control" id="email" placeholder="Client Name" name="email" required>
				</div>
				<div class="form-group">
					<label class="required" for="mn">Mobile Number</label>
					<input type="number" class="form-control" id="mn" placeholder="Mobile number" name="mn" required>
				</div>
				<div class="form-group">
					<label class="required" for="cname">Client Name</label>
					<input type="text" class="form-control" id="cname" placeholder="Client Name" name="cname" required>
				</div>
				<div class="form-group">
					<label class="required" for="address">Address</label>
					<input type="text" class="form-control" id="address" placeholder="Enter Office Address" name="address" required>
				</div>
				<div class="form-group">
					<label class="required" for="password">Password</label>
					<input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
				</div>
				<div class="form-group">
					<label class="required" for="userrole">User Role</label>
					<input type="text" class="form-control" id="userrole" placeholder="Retailer" name="userrole" required disabled>
				</div>
				<div class="form-col-span-2 text-center mt-5">
					<h3 class="font-weight-bold">Set Services Rate For This User</h3>
				</div>
				<div class="form-group">
					<label for="nii">NII ITR Rate</label>
					<input type="number" class="form-control" id="nii" placeholder="Enter Number" name="nii">
				</div>
				<div class="form-group">
					<label for="tir">Taxable ITR Rate</label>
					<input type="number" class="form-control" id="tir" placeholder="Enter Number" name="tir">
				</div>

				<div class="form-group">
					<label for="np">Normal Passport</label>
					<input type="number" class="form-control" id="np" placeholder="Enter Number" name="np">
				</div>

				<div class="form-group">
					<label for="grr">GST Return Rate</label>
					<input type="number" class="form-control" id="grr" placeholder="Enter Number" name="grr">
				</div>

				<div class="form-group">
					<label for="rbr">Regular Bill Rate</label>
					<input type="number" class="form-control" id="rbr" placeholder="Enter Number" name="rbr">
				</div>

				<div class="form-group">
					<label for="lbr">Late Bill Rate</label>
					<input type="number" class="form-control" id="lbr" placeholder="Enter Number" name="lbr">
				</div>

				<div class="form-group">
					<label for="vir">Verify ITR Rate</label>
					<input type="number" class="form-control" id="vir" placeholder="Enter Number" name="vir">
				</div>

				<div class="form-group">
					<label for="upr">UTI PAN Rate</label>
					<input type="number" class="form-control" id="upr" placeholder="Enter Number" name="upr">
				</div>

				<div class="form-group">
					<label for="gstreg">GST Registration</label>
					<input type="number" class="form-control" id="gstreg" placeholder="Enter Number" name="gstreg">
				</div>

				<div class="form-group">
					<label for="pfrefund">PF Refund</label>
					<input type="number" class="form-control" id="pfrefund" placeholder="Enter Number" name="pfrefund">
				</div>

				<div class="form-group">
					<label for="fastpanrate">Fast PAN Rate</label>
					<input type="number" class="form-control" id="fastpanrate" placeholder="Enter Number" name="fastpanrate">
				</div>

				<div class="form-group">
					<label for="pvc">PVC Card</label>
					<input type="number" class="form-control" id="pvc" placeholder="Enter Number" name="pvc">
				</div>

				<div class="form-group">
					<label for="nadr">News AD Rate</label>
					<input type="number" class="form-control" id="nadr" placeholder="Enter Number" name="nadr">
				</div>

				<div class="form-group">
					<label for="udyog">Udyog Aadhar Rate</label>
					<input type="number" class="form-control" id="udyog" placeholder="Enter Number" name="udyog">
				</div>
				<button type="submit" class="btn btn-primary formbtn mx-auto submit">Add Retailers</button>
			</form>
		</div>
	</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>