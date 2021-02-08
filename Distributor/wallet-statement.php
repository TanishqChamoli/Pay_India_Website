<?php include("./backend/head_check.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wallet Statement</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<?php include("sidenav.php"); ?>
	<?php include("topnav.php"); ?>
	<div class="row padding-sidenav px-0 pr-md-0">
		<div class="col-12 col-md-3">
			<div class="card mt-3 mb-4">
				<div class="card-body topicons">
					<div class="figures">
						<h2 class="card-number d-inline-block">100</h2>
						<i class="fa fa-users d-inline-block float-right"></i>
					</div>
					<h5 class="card-title">Retailers</h5>
					<h6 class="card-subtitle mb-2 text-muted">Total Active Retailers</h6>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-3">
			<div class="card mt-3 mb-4">
				<div class="card-body topicons">
					<div class="figures">
						<h2 class="card-number d-inline-block">100</h2>
						<i class="fa fa-users d-inline-block float-right"></i>
					</div>
					<h5 class="card-title">User Banned</h5>
					<h6 class="card-subtitle mb-2 text-muted">Total Suspended Retailers</h6>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-3">
			<div class="card mt-3 mb-4">
				<div class="card-body topicons">
					<div class="figures">
						<h2 class="card-number d-inline-block">100</h2>
						<i class="fa fa-area-chart d-inline-block float-right"></i>
					</div>
					<h5 class="card-title">Order Recieved</h5>
					<h6 class="card-subtitle mb-2 text-muted">Total Retailer Order Received</h6>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-3">
			<div class="card mt-3 mb-4">
				<div class="card-body topicons">
					<div class="figures">
						<h2 class="card-number d-inline-block">100</h2>
						<i class="fa fa-line-chart d-inline-block float-right"></i>
					</div>
					<h5 class="card-title">Total Earnings</h5>
					<h6 class="card-subtitle mb-2 text-muted">Total Earning Order</h6>
				</div>
			</div>
		</div>
	</div>

	<div class="row padding-sidenav pt-4 pr-md-0">
		<div class="col-12">
			<div class="table-container">
				<table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>First name</th>
							<th>Last name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Age</th>
							<th>Start date</th>
							<th>Salary</th>
							<th>Extn.</th>
							<th>E-mail</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Tiger</td>
							<td>Nixon</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>61</td>
							<td>2011/04/25</td>
							<td>$320,800</td>
							<td>5421</td>
							<td>t.nixon@datatables.net</td>
							<td>
								<button type="submit" class="btn action-btn">
									<i class="fa fa-edit"></i>
								</button>
							</td>
							<td>
								<button type="submit" class="btn action-btn">
									<i class="fa fa-window-close"></i>
								</button>
							</td>
						</tr>
						<!-- <tr>
								<td>Garrett</td>
								<td>Winters</td>
								<td>Accountant</td>
								<td>Tokyo</td>
								<td>63</td>
								<td>2011/07/25</td>
								<td>$170,750</td>
								<td>8422</td>
								<td>g.winters@datatables.net</td>
							</tr>
							<tr>
								<td>Ashton</td>
								<td>Cox</td>
								<td>Junior Technical Author</td>
								<td>San Francisco</td>
								<td>66</td>
								<td>2009/01/12</td>
								<td>$86,000</td>
								<td>1562</td>
								<td>a.cox@datatables.net</td>
							</tr>
							<tr>
								<td>Cedric</td>
								<td>Kelly</td>
								<td>Senior Javascript Developer</td>
								<td>Edinburgh</td>
								<td>22</td>
								<td>2012/03/29</td>
								<td>$433,060</td>
								<td>6224</td>
								<td>c.kelly@datatables.net</td>
							</tr> -->
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