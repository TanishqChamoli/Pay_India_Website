<?php include("./backend/head_check_retailer.php"); ?>
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
	<?php include("sidenav.php"); ?>
	<div class="col-12 padding-sidenav px-0 pr-md-0">
		<div class="topnav">
			<h2 class="formheader">Form 49A</h2>
			<?php include("retailer_wallet.php"); ?>

			<div class="col-12 padding-sidenav pr-md-0 main-index">

				<div class="mt-4 mb-0 d-md-none">
					<h2 class="formheader">Form 49A</h2>
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
				<form class="form-container mt-4 form-padding-internal" action="backend/form49a_b.php" method="post" enctype="multipart/form-data">

					<div class="form-group">
						<label class="required" for="afname">Area Code</label>
						<input type="text" class="form-control" id="acode" placeholder="Area Code" name="afname" required>
					</div>
					<div class="form-group">
						<label class="required" for="afname">AO Type</label>
						<input type="text" class="form-control" id="aotype" placeholder="AO Type" name="aotype" required>
					</div>
					<div class="form-group">
						<label class="required" for="afname">Range Code</label>
						<input type="text" class="form-control" id="areacode" placeholder="Range Code" name="rangecode" required>
					</div>
					<div class="form-group">
						<label class="required" for="afname">AO No.</label>
						<input type="text" class="form-control" id="ao no." placeholder="AO No." name="aono" required>
					</div>
					<div class="form-group">
						<label class="required" for="afname">Please Select Title</label>
						<select name="category" id="category" class="form-control">
							<option value="">Title</option>
							<option value="Shri">Shri</option>
							<option value="Smt">Smt</option>
							<option value="Kumari">Kumari</option>
							<option value="M/s">M/s</option>
						</select>
					</div>

					<div class="form-group">
						<label class="required" for="afname">Applicant Last/Surname</label>
						<input type="text" class="form-control" id="surname" placeholder="Last Name" name="surname" required>
					</div>

					<div class="form-group">
						<label class="required" for="afname">Applicant First Name</label>
						<input type="text" class="form-control" id="firstname" placeholder="Applicant First Name" name="firstname" required>
					</div>
					<div class="form-group">
						<label class="required" for="afname">Applicant Last Name</label>
						<input type="text" class="form-control" id="Lastname" placeholder="Applicant Last Name" name="lastname" required>
					</div>
					<div class="form-group">
						<label class="required" for="afname">Abbreviation of the above name,as you would like it,to be printed on the PAN card</label>
						<input type="text" class="form-control" id="abb" placeholder="Abbreviation of Name" name="abb" required>
					</div>

					<div class="form-group">
						<label class="required" for="gender">Have you ever been known by any other name </label><br>
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="optradio1" value="Yes" checked>Yes
							</label>
						</div>
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="optradio1" value="No">No
							</label>
						</div>

					</div>
					<br>
					<p>If Yes Please Fill the details below</p>
					<div class="form-group">
						<label class="required" for="afname">Applicant Last/Surname</label>
						<input type="text" class="form-control" id="surname" placeholder="Last Name" name="surname2">
					</div>

					<div class="form-group">
						<label class="required" for="afname">Applicant First Name</label>
						<input type="text" class="form-control" id="firstname" placeholder="Applicant First Name" name="firstname2">
					</div>
					<div class="form-group">
						<label class="required" for="afname">Applicant Last Name</label>
						<input type="text" class="form-control" id="Lastname" placeholder="Applicant Last Name" name="lastname2">
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
								<input type="radio" class="form-check-input" name="optradio" value="Transgender">Transgender
							</label>
						</div>

						<div class="form-group">
							<label for="otherdocument">Photograph</label>
							<input class="form-control" type="file" id="Photograph" name="Photograph">
						</div>
						<div class="form-group">
							<label for="otherdocument">Signature</label>
							<input class="form-control" type="file" id="signature" name="signature">
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