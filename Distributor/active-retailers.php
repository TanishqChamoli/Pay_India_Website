<?php include("./backend/head_check.php"); ?>
<?php
if (isset($_GET['id'])) {
	$conn = mysqli_connect('localhost', 'root', '', 'payindia');
	$id = $_GET['id'];
	$result = mysqli_query($conn, $sql);
	$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$sql = "UPDATE retailers SET status='false' WHERE id ='$id'";
	$result = mysqli_query($conn, $sql);
	if ($result == 1) {
		$address = "http://localhost/Pay%20India%20Website/Distributor/active-retailers.php";
		header("Location: " . $address);
		die();
	}
}
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'payindia');
$sql = "SELECT * FROM retailers where status='true'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Active Retailers</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<?php include("sidenav.php"); ?>
	<?php include("topnav.php"); ?>
	<div class="row padding-sidenav pt-4 pr-md-0">
		<div class="col-12">
			<div class="table-container">
				<table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Email</th>
							<th>Mobile</th>
							<th>Name</th>
							<th>Address</th>
							<th>Deactivate Retailer</th>
							<th>nii</th>
							<th>tir</th>
							<th>np</th>
							<th>grr</th>
							<th>rbr</th>
							<th>lbr</th>
							<th>vir</th>
							<th>upr</th>
							<th>gstreg</th>
							<th>pfrefund</th>
							<th>fastpanrate</th>
							<th>pvc</th>
							<th>nadr</th>
							<th>udyog</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($ans as $value) { ?>
							<tr>
								<td><?php echo $value['email'] ?></td>
								<td><?php echo $value['mobile'] ?></td>
								<td><?php echo $value['cname'] ?></td>
								<td><?php echo $value['address'] ?></td>
								<td><a href=<?php echo "http://localhost/Pay%20India%20Website/Distributor/active-retailers.php?id=" . $value['id'] . ""; ?>><input type="button" value="Deactivate"></a></td>
								<td><?php echo $value['nii'] ?></td>
								<td><?php echo $value['tir'] ?></td>
								<td><?php echo $value['np'] ?></td>
								<td><?php echo $value['grr'] ?></td>
								<td><?php echo $value['rbr'] ?></td>
								<td><?php echo $value['lbr'] ?></td>
								<td><?php echo $value['vir'] ?></td>
								<td><?php echo $value['upr'] ?></td>
								<td><?php echo $value['gstreg'] ?></td>
								<td><?php echo $value['pfrefund'] ?></td>
								<td><?php echo $value['fastpanrate'] ?></td>
								<td><?php echo $value['pvc'] ?></td>
								<td><?php echo $value['nadr'] ?></td>
								<td><?php echo $value['udyog'] ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<!-- <div class="formactionbtn">
						<button type="submit" class="btn btn-primary formbtn mx-auto submit mt-4">Edit</button>
						<button type="submit" class="btn btn-primary formbtn mx-auto submit mt-4">Suspend</button>
						<button type="submit" class="btn btn-primary formbtn mx-auto submit mt-4">Save</button>
					</div> -->
		</div>
	</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>