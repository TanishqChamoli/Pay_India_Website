<?php include("Admin2_backend/head_check.php"); ?>
<?php
if (isset($_GET['id'])) {
	$conn = mysqli_connect('localhost', 'root', '', 'payindia');
	$sql = "SELECT * FROM insurance";
	$id = $_GET['id'];
	$result = mysqli_query($conn, $sql);
	$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$sql = "UPDATE insurance SET status='false' WHERE id ='$id'";
	$result = mysqli_query($conn, $sql);
	if ($result == 1) {
		$address = "http://localhost/Pay%20India%20Website/Admin/insuranceRejected.php";
		header("Location: " . $address);
		die();
	}
}
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'payindia');
$sql = "SELECT * FROM insurance where status='reject'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insurance Rejected</title>
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
							<th scope="col">fname</th>
							<th scope="col">lname</th>
							<th scope="col">address_person</th>
							<th scope="col">pincode</th>
							<th scope="col">state_person</th>
							<th scope="col">district</th>
							<th scope="col">city</th>
							<th scope="col">nfname</th>
							<th scope="col">nlname</th>
							<th scope="col">relation</th>
							<th scope="col">email</th>
							<th scope="col">phone</th>
							<th scope="col">typev</th>
							<th scope="col">typeu</th>
							<th scope="col">registation</th>
							<th scope="col">yyear</th>
							<th scope="col">ddate</th>
							<th scope="col">nname</th>
							<th scope="col">model</th>
							<th scope="col">enginno</th>
							<th scope="col">chassisno</th>
							<th scope="col">loan</th>
							<th scope="col">bankname</th>
							<th scope="col">enginCap</th>
							<th scope="col">pai</th>
							<th scope="col">lil</th>
							<th scope="col">adhaar</th>
							<th scope="col">registry</th>
							<th scope="col">conf1</th>
							<th scope="col">conf2</th>
							<th scope="col">comments</th>
						</tr>
					</thead>
					<?php
					for ($x = 0; $x < sizeof($ans); $x++) {
					?>
						<tbody>
							<tr>
								<td>
									<p><?php echo $ans[$x]['fname']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['lname']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['address_person']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['pincode']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['state_person']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['district']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['city']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['nfname']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['nlname']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['relation']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['email']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['phone']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['typev']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['typeu']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['registation']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['yyear']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['ddate']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['nname']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['model']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['enginno']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['chassisno']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['loan']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['bankname']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['enginCap']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['pai']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['lil']; ?></p>
								</td>
								<td>
									<?php if ($ans[$x]['adhaar'] != "") { ?>
										<a href='../uploads/<?php echo $ans[$x]['adhaar']; ?>'>Open</a></p>
									<?php } else { ?>
										<p>There is no data</p>
									<?php } ?>
								</td>
								<td>
									<?php if ($ans[$x]['registry'] != "") { ?>
										<a href='../uploads/<?php echo $ans[$x]['registry']; ?>'>Open</a></p>
									<?php } else { ?>
										<p>There is no data</p>
									<?php } ?>
								</td>
								<td>
									<p><?php echo $ans[$x]['conf1']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['conf2']; ?></p>
								</td>
								<td>
									<p><?php echo $ans[$x]['comments']; ?></p>
								</td>
								<td>
									<a href="http://localhost/Pay%20India%20Website/Admin/insuranceRejected.php?id=<?php echo $ans[$x]['id']; ?>"><input type="button" value="Retry"></a>
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