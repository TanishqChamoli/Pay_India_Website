<?php include("Admin2_backend/head_check.php"); ?>
<?php
if (isset($_GET['id'])) {
	$conn = mysqli_connect('localhost', 'root', '', 'payindia');
	$sql = "SELECT * FROM ";
	$id = $_GET['id'];
	$result = mysqli_query($conn, $sql);
	$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$sql = "UPDATE index_pan_card_uti SET status='reject' WHERE id ='$id'";
	$result = mysqli_query($conn, $sql);
	if ($result == 1) {
		$address = "http://localhost/Pay%20India%20Website/Admin/panCardPending.php";
		header("Location: " . $address);
		die();
	}
}
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'payindia');
$sql = "SELECT * FROM index_pan_card_uti where status='false'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pan Card UTI Pending </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="../Distributor/style.css"> -->
	<link rel="stylesheet" type="text/css" href="../Distributor/style.css">
</head>

<body>
	<?php include("sidenav2.php"); ?>
	<?php include("navbar2.php"); ?>
	<div class="col-12 padding-sidenav pr-md-0 main-index">
		<div class="table-responsive">
			<?php if (sizeof($ans) > 0) { ?>
				<table class="table table-bordered" id="datatable">
					<thead>
						<tr>
							<th scope="col">Client Name</th>
							<th scope="col">UserName</th>
							<th scope="col">Office Address</th>
							<th scope="col">Pincode</th>
							<th scope="col">Mobile</th>
							<th scope="col">email</th>
							<th scope="col">State</th>
							<th scope="col">Firm Name</th>
							<th scope="col">Aadhar Card no</th>
							<th scope="col">pan card no</th>
							<th scope="col">Account Type</th>
							<th scope="col">Reject</th>
							<th scope="col">Reply</th>
						</tr>
					</thead>
					<?php
					for ($x = 0; $x < sizeof($ans); $x++) {
					?>
						<tbody>
							<tr>
								<td>
									<p><?php echo $ans[$x]['client_name']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['username']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['office_address']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['pincode']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['mobile_number']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['email']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['state1']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['firm_name']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['aadhar_no']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['pan_no']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['account_type']; ?></p>
								</td>
								<td>
									<a href="http://localhost/Pay%20India%20Website/Admin/panCardPending.php?id=<?php echo $ans[$x]['id']; ?>"><input type="button" value="Reject"></a>
								</td>
								<td>
									<a href="http://localhost/Pay%20India%20Website/Admin/panCard.php?id=<?php echo $ans[$x]['id']; ?>&r_id=<?php echo $ans[$x]['r_id'];?>"><input type="button" value="Reply"></a>
								</td>
							</tr>
					<?php
					}
				} else {
					echo "<h2>There is no data</h2>";
				}
					?>
						</tbody>
				</table>
		</div>

	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>