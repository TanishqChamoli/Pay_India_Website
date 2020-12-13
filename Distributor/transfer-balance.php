<?php include("./backend/head_check.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Transfer Balance</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


	<?php include("sidenav.php"); ?>
	<?php include("topnav.php"); ?>


	
		<div class="row padding-sidenav px-0 pr-md-0">
			<div class="col-12">
				<form class="form-container mt-4 form-padding-internal">
					<div class="form-group">
						<label class="required" for="retailersemail">Retailers Email</label>
						<input type="email" class="form-control" id="retailersemail" placeholder="Retailers Email" name="retailersemail" required>
					</div>

					<div class="form-group">
						<label class="required" for="transferrs">Transfer Rupees</label>
						<input type="number" class="form-control" id="transferrs" placeholder="Enter Amount" name="transferrs" required>
					</div>
					<div class="form-group">
						<label class="required" for="distributorbalance">Distributor Balance</label>
						<input type="number" class="form-control" id="distributorbalance" placeholder="200" name="distributorbalance" required disabled>
					</div>
					<button type="submit" class="btn btn-primary formbtn mx-auto submit">Transfer Balance</button>
				</form>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>