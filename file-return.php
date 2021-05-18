<?php include("./backend/head_check_retailer.php"); ?>
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
	<div class="col-12 padding-sidenav px-0 pr-md-0 ac">
		<div class="topnav">
			<h2 class="formheader">Client-List</h2>
			<?php include("retailer_wallet.php"); ?>

			<div class="col-12 padding-sidenav pr-md-0 main-index">

				<div class="mt-4 mb-0 d-md-none">
					<h2 class="formheader">Client-List</h2>
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
				<!-- <form class="form-container mt-4 form-padding-internal" action="backend/itr gst_b.php" method="post" enctype="multipart/form-data">
                    <label class="required" for="gst">Enter the GST number below and proceed</label>
					<input type="text" class="form-control" id="gst" placeholder="GST Number" name="gstno" required>
                    <button type="submit" class="btn btn-primary formbtn mx-auto submit">Submit</button>
				</form> -->

				<div class="client-main">
					<div class="table-container">
						<table id="clients" class="table-striped clients">
							<tr>
								<th>Sr.No.</th>
								<th>GST Number</th>
								<th>Mobile</th>
								<th>Entity Name</th>
								<th>Authorised Name</th>
								<th>Email</th>
								<th>Address</th>
								<th>Get Portal?</th>
								<th>Added Date</th>
								<th>Action</th>
							</tr>
							<tr>
								<td>1</td>
								<td>123</td>
								<td>2938419302</td>
								<td>Royal</td>
								<td>abcd</td>
								<td>@gmail</td>
								<td>asdf</td>
								<td>yes/no</td>
								<td>Date</td>
								<td><button onclick="">File Return</button></td>
							</tr>
						</table>

					</div>
					<nav class="table-nav">
					  <ul class="pagination">
					    <li class="page-item">
					      <a class="page-link" href="#" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					        <span class="sr-only">Previous</span>
					      </a>
					    </li>
					    <li class="page-item active"><a class="page-link" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item">
					      <a class="page-link" href="#" aria-label="Next">
					        <span aria-hidden="true">&raquo;</span>
					        <span class="sr-only">Next</span>
					      </a>
					    </li>
					  </ul>
					</nav>
				</div>

			</div>

		</div>

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>