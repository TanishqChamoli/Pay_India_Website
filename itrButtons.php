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
	<link rel="stylesheet" type="text/css" href="buttonStyles.css">
</head>

<body>
	<?php include("sidenav.php"); ?>
	<div class="col-12 padding-sidenav px-0 pr-md-0">
		<div class="topnav">
			<h2 class="formheader">GST</h2>
			<?php include("retailer_wallet.php"); ?>

			<div class="col-12 padding-sidenav pr-md-0 main-index">

				<div class="mt-4 mb-0 d-md-none">
					<h2 class="formheader">GST</h2>
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

				<div class="btns">
					<img src="images/file.png" alt="fileITR">
					<button class="btn btn-danger mx-auto edit">File ITR</button>
				</div>
				<div class="btns"> 
					<img src="images/check.png" alt="active">
					<button class="btn btn-success mx-auto edit">Active</button>
				</div>
				<div class="btns">
					<img src="images/edit.png" alt="edit">
					<button class="btn btn-info mx-auto edit" onclick="window.location.href='itr.php'">Edit</button>
				</div>
			</div>

		</div>

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>