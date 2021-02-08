<?php include("Admin2_backend/head_check.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voter Card</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../Distributor/style.css">
</head>

<body>
	<?php include("sidenav2.php"); ?>
	<?php include("navbar2.php"); ?>
	<div class="col-12 padding-sidenav pr-md-0 main-index">
		<div class="mt-4 mb-0 d-md-none">
			<h2 class="formheader">Aadhaar UTI</h2>
		</div>
		<form class="form-container mt-4 form-padding-internal" action="./Admin2_backend/aadhar_uti_all.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" required>
			<input type="hidden" name="r_id" value="<?php echo $_GET['r_id']; ?>" required>
			<div class="form-group">
				<label class="required" for="myFile">Upload Document</label>
				<input class="form-control" type="file" id="myFile" name="reply">
			</div>
			<div class="form-group">
				<label for="comments">Comments</label>
				<textarea class="form-control" name="comments" id="comments" placeholder="Type your message here..."></textarea>
			</div>

			<div class="form-group">
				<label class="required" for="ageproof">Select Retailer</label>

				<select name="ageproof" id="ageproof" class="form-control">
					<option value="">Select</option>
					<option value="option1">option1</option>
					<option value="option2">option2</option>
					<option value="option3">option3</option>
					<option value="option4">option4</option>
				</select>
				<!--  <input type="text" class="form-control" id="category" placeholder="Choose Category" name="category"> -->
			</div>
			<button type="submit" class="btn btn-primary formbtn mx-auto submit">Submit</button>
		</form>
	</div>
	</div>

	</div>

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>