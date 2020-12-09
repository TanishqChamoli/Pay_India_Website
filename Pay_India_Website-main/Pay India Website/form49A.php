<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form 49A</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	


    <div class="container mb-5">
    	<div class="row">
    		<div class="col-md-12">
    			<h1 class="text-center mt-3 mb-3">Form 49A</h1>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-12">
    			<div class="mt-4 mb-0 d-md-none">
					<h3><?php if (!empty($_GET['message'])) {
						?>
							<script>
								alert("<?php echo $_GET['message']; ?>")
							</script>
						<?php
						} ?></h3>
				</div>


		   		<form class="form-container mt-4">

		   			<div class="form-group">
					    <label class="required" for="afname">Area Code</label>
					    <input type="text" class="form-control" id="acode" placeholder="Area Code" name="afname" required>
					  </div>
					  <div class="form-group">
					    <label class="required" for="afname">AO Type</label>
					    <input type="text" class="form-control" id="aotype" placeholder="AO Type" name="afname" required>
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
							<option value="option1">Shri</option>
							<option value="option2">Smt</option>
							<option value="option3">Kumari</option>
							<option value="option4">M/s</option>
						  </select>
					  </div>
					  
					  <div class="form-group">
					    <label class="required" for="afname">Applicant Last/Surname</label>
					    <input type="text" class="form-control" id="surname" placeholder="Last Name" name="afname" required>
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
							    <input type="radio" class="form-check-input" name="optradio" checked>Yes
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" name="optradio">No
							  </label>
							</div>
							
						</div> 
						<br><p>If Yes Please Fill the  details below</p>
						<div class="form-group">
							<label class="required" for="afname">Applicant Last/Surname</label>
							<input type="text" class="form-control" id="surname" placeholder="Last Name" name="afname" >
						  </div>
							 
							 <div class="form-group">
							<label class="required" for="afname">Applicant First Name</label>
							<input type="text" class="form-control" id="firstname" placeholder="Applicant First Name" name="firstname" >
						  </div>
						  <div class="form-group">
							<label class="required" for="afname">Applicant Last Name</label>
							<input type="text" class="form-control" id="Lastname" placeholder="Applicant Last Name" name="lastname" >
						  </div>


					  

					  <div class="form-group">
					    <label class="required" for="gender">Gender</label><br>
					     <div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" name="optradio" checked>Male
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" name="optradio">Female
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" name="optradio">Transgender
							  </label>
						</div> 
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
