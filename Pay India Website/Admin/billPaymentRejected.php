<?php include("Admin2_backend/head_check.php"); ?>
<?php
if (isset($_GET['id'])) {
	$conn = mysqli_connect('localhost', 'root', '', 'payindia');
	$sql = "SELECT * FROM ";
	$id = $_GET['id'];
	$result = mysqli_query($conn, $sql);
	$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$sql = "UPDATE bill_payment SET status='false' WHERE id ='$id'";
	$result = mysqli_query($conn, $sql);
	if ($result == 1) {
		$address = "http://localhost/Pay%20India%20Website/Admin/billPaymentRejected.php";
		header("Location: " . $address);
		die();
	}
}
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'payindia');
$sql = "SELECT * FROM bill_payment where status='reject'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bill Payment Rejected</title>
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
							<th scope="col">Payment type</th>
							<th scope="col">CA number</th>
							<th scope="col">Operator Circle</th>
							<th scope="col">Amount</th>
							<th scope="col">Operator Circle 1</th>
							<th scope="col">Due Date</th>
							<th scope="col">Client Name</th>
							<th scope="col">Retry</th>
						</tr>
					</thead>
					<?php
					for ($x = 0; $x < sizeof($ans); $x++) {
					?>
						<tbody>
							<tr>
								<td>
									<p><?php echo $ans[$x]['payment_type']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['ca_number']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['operator_circle']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['amount']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['operator_circle_1']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['due_date']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['client_name']; ?></p>
								</td>
								<!-- <td>
									<?php if ($ans[$x]['other_documents'] != "") { ?>
										<p><a href="../uploads/<?php echo $ans[$x]['other_documents']; ?>">otherdocument</a></p>
									<?php } else {
										echo "No attachment";
									} ?>
								</td> -->
								<!-- <td>
									<?php if ($ans[$x]['comments'] != "") { ?>
										<p><?php echo $ans[$x]['comments']; ?></p>
									<?php } else {
										echo "No comments";
									} ?>
								</td> -->
								<td>
									<a href="http://localhost/Pay%20India%20Website/Admin/billPaymentRejected.php?id=<?php echo $ans[$x]['id']; ?>"><input type="button" value="Retry"></a>
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