<?#php include("./backend/head_check_retailer.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pay India</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Distributor/style.css">
</head>

<body>
	<?php include("sidenav.php"); ?>
	<div class="col-12 padding-sidenav px-0 pr-md-0">
		<div class="topnav">
			<h2 class="formheader">GST Return</h2>
			<?php include("retailer_wallet.php"); ?>

			<div class="col-12 padding-sidenav pr-md-0 main-index">

				<div class="mt-4 mb-0 d-md-none">
					<h2 class="formheader">GST Return</h2>
				</div>
				<div class="mt-4 mb-0 d-md-none">
					<h3><?php if (!empty($_GET['message'])) {
						?>
							<script>
								alert("<?php echo $_GET['message']; ?>")
							</script>
						<?php
						} ?>
					</h3>

				</div>
				<form class="form-container mt-4 form-padding-internal" action="backend/addClient_b.php" method="post" enctype="multipart/form-data">
                    

					<div class="form-group">
						<label class="required" for="sig">NAME OF AUTHORISED SIGNATORY</label>
						<input type="text" class="form-control" id="sig" placeholder="Name of authorised signatory" min="0" name="sig" required>
					</div>

					<div class="form-group">
						<label class="required" for="mn">Mobile Number</label>
						<input type="number" class="form-control" id="mn" placeholder="Mobile number" name="mn" required>
					</div>

					<div class="form-group">
						<label class="required" for="email">Email</label>
						<input type="email" class="form-control" id="email" placeholder="Client Name" name="email" required>
					</div>

					<div class="form-group">
								<label class="required" for="gst">G.S.T. Number </label>
								<input type="number" class="form-control" id="gst" placeholder="G.S.T number" min="0" name="gst" required>
					</div>


					
					<div class="form-group">
						<label class="required" for="clientname">CLIENT NAME</label>
						<input type="text" class="form-control" id="clientname" placeholder="Client Name" name="clientname" required>
					</div>

					<div class="form-group">
						<label class="required" for="address">ADDRESS</label>
						<input type="text" class="form-control" id="address" placeholder="Enter Complete address" name="address" required>
					</div>
					
					<div class="form-group">
								<label class="required">Do you have password of gst portal</label><br>
								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="gst_portal" value="Yes">Yes
									</label>
									</div>
									<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="gst_portal" value="No">No
									</label>
									</div>
								</div>

					<button type="submit" class="btn btn-primary formbtn mx-auto submit">Add Client</button>
				</form>

			</div>

		</div>

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>