<?php include("./backend/head_check_retailer.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aadhar PAN Link</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Distributor/style.css">
</head>

<body>

	<?php include('sidenav.php'); ?>
	<div class="col-12 padding-sidenav px-0 pr-md-0">
		<div class="topnav">
			<h2 class="formheader">Aadhar PAN Link</h2>
			<?php include("retailer_wallet.php");?>

	<div class="col-12 padding-sidenav pr-md-0 main-index">

		<div class="mt-4 mb-0 d-md-none">
			<h2 class="formheader">Aadhar PAN Link</h2>
		</div>
		<h3><?php if (!empty($_GET['message'])) {
			?>
				<script>
					alert("<?php echo $_GET['message']; ?>")
				</script>
			<?php
			} ?></h3>
		<form class="form-container mt-4 form-padding-internal" action="backend/aadharpan_link_b.php" method="POST" enctype="multipart/form-data">

			<div class="form-group">
				<label class="required" for="afname">Applicant Full Name</label>
				<input type="text" class="form-control" id="afname" placeholder="Applicant Full Name" name="afname" required>
			</div>

			<div class="form-group">
				<label class="required" for="mn">Mobile Number</label>
				<input type="number" class="form-control" id="mn" placeholder="Mobile number" name="mn" required>
			</div>

			<div class="form-group">
				<label class="required" for="aadhar">Applicant Aadhar No.</label>
				<input type="number" class="form-control" name="aadhar" id="aadhar" placeholder="Enter aadhar" required>
				<small class="form-text text-muted">We'll never share your aadhar number with anyone else.</small>
			</div>

			<div class="form-group">
				<label class="required" for="pan">PAN Card No. </label>
				<input type="number" class="form-control" id="pan" placeholder="PAN number" min="0" name="pan" required>
			</div>

			<div class="form-group">
				<label class="required" for="dob">Date Of Birth</label>
				<input type="date" class="form-control" id="dob" placeholder="Date Of Birth" name="dob" required>
			</div>

			<div class="form-group">
				<label class="required" for="pincode">Pincode</label>
				<input type="number" class="form-control" id="pincode" placeholder="Enter Pincode" name="pincode" required>
			</div>

			<div class="form-group">
				<label class="required" for="gender">Gender</label><br>
				<div class="form-check-inline">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="optradio" value="Male" checked>Male
					</label>
				</div>
				<div class="form-check-inline">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="optradio" value="Female">Female
					</label>
				</div>
				<div class="form-check-inline">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="optradio" value="Other">Other
					</label>
				</div>

				<div class="form-group">
					<label for="otherdocument">Any Document</label>
					<input class="form-control" type="file" id="otherdocument" name="otherdocument">
				</div>

				<div class="form-group">
					<label for="comments">Comments</label>
					<textarea class="form-control" name="comments" id="comments" placeholder="Type your message here..."></textarea>
				</div>

				<button type="submit" class="btn btn-primary formbtn mx-auto submit">Submit</button>
		</form>

	</div>

	</div>

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>