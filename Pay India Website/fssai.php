<?php include("./backend/head_check_retailer.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FSSAI</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Distributor/style.css">
</head>

<body>
	<?php include("sidenav.php"); ?>
	<div class="col-12 padding-sidenav px-0 pr-md-0">
		<div class="topnav">
			<h2 class="formheader">FSSAI</h2>
			<?php include("retailer_wallet.php"); ?>

	<div class="col-12 padding-sidenav pr-md-0 main-index">

		<div class="mt-4 mb-0 d-md-none">
			<h2 class="formheader">FSSAI</h2>
		</div>
		<div class="mt-4 mb-0 d-md-none">
			<h3><?php if (!empty($_GET['message'])) {
				?>
					<script>
						alert("<?php echo $_GET['message']; ?>")
					</script>
				<?php
				} ?></h3>

		</div>
		<form class="form-container mt-4 form-padding-internal" action="backend/fssai_b.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label class="required" for="aadhar">Applicant Aadhar No.</label>
				<input type="number" class="form-control" name="aadhar" id="aadhar" aria-describedby="emailHelp" placeholder="Enter aadhar" required>
				<small class="form-text text-muted">We'll never share your aadhar number with anyone else.</small>
			</div>

			<div class="form-group">
				<label class="required" for="pan">PAN Card No. </label>
				<input type="number" class="form-control" id="pan" placeholder="PAN number" min="0" name="pan" required>
			</div>



			<div class="form-group">
				<label class="required" for="businessdetail">Business Detail</label>
				<input type="text" class="form-control" id="businessdetail" placeholder="Client Name" name="businessdetail" required>
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
				<label class="required" for="uploadphoto">Upload Photo</label>
				<input class="form-control" type="file" id="uploadphoto" name="uploadphoto">
			</div>

			<div class="form-group">
				<label class="required" for="noc">NOC</label>
				<input class="form-control" type="file" id="noc" name="noc">
			</div>

			<div class="form-group">
				<label class="required" for="baproof">Business Address Proof</label>
				<input class="form-control" type="file" id="baproof" name="baproof">
			</div>

			<div class="form-group">
				<label for="otherdocument">Any Other Document</label>
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