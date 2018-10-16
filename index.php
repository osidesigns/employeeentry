<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<!-- Bootstrap 4 CSS CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />

	<!-- Custom CSS Styles -->
	<link rel="stylesheet" href="css/style.css" />
	<title>New Employee Entry</title>
</head>
<body>
	
	<div class="container py-3 mt-3">
		
		<h1>NEW EMPLOYEE ENTRY FORM</h1>

		<form method="POST" action="scripts/create.php">
		  <div class="row">
		  	<div class="col-12 col-md-5">
			  <div class="form-group">
			    <label for="firstName">First Name</label>
			    <input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name">
			  </div>
			</div>
			<div class="col-12 col-md-5">
			  <div class="form-group">
			  	<label for="lastName">Last Name</label>
			    <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name">
			  </div>
			</div>
			<div class="col-12 col-md-2">
			  <div class="form-group">
			  	<label for="age">Age</label>
			    <input type="text" name="age" class="form-control" id="age" placeholder="Age">
			  </div>
			</div>
		  </div>

		  <div class="row">
			<div class="col">
			  <div class="form-group">
			  	<label for="address">Address</label>
			    <input type="text" name="address" class="form-control" id="address" placeholder="Address">
			  </div>
			</div>
		  </div>

		  <div class="row">
			<div class="col">
			  <div class="form-group">
			  	<label for="address">City</label>
			    <input type="text" name="city" class="form-control" id="city" placeholder="City">
			  </div>
			</div>
			<div class="col">
			  <label for="address">State</label>
			  <select class="custom-select" name="state">
				  <option selected>-Select State-</option>
				  <option value="AL">AL</option>
				  <option value="FL">FL</option>
				  <option value="GA">GA</option>
				  <option value="LA">LA</option>
				  <option value="MS">MS</option>
				  <option value="SC">SC</option>
				  <option value="TN">TN</option>
			  </select>
			</div>
			<div class="col">
			  <div class="form-group">
			  	<label for="zip">Zip Code</label>
			    <input type="text" name="zipcode" class="form-control" id="zip" placeholder="Zip Code">
			  </div>
			</div>
	  	  </div>

	  	  <div class="row">
		  	<div class="col">
			  <div class="form-group">
			    <label for="ssn">SSN</label>
			    <input type="text" name="ssn" class="form-control" id="ssn" placeholder="Social Security Number">
			  </div>
			</div>
			<div class="col">
			  <div class="form-group">
			  	<label for="phone1">Phone 1</label>
			    <input type="text" name="phone1" class="form-control" id="phone1" placeholder="Primary Phone">
			  </div>
			</div>
		  </div>

		  <div class="row">
		  	<div class="col">
			  <div class="form-group">
			    <label for="email">Email Address</label>
			    <input type="text" name="email" class="form-control" id="email" placeholder="Primary Email Address">
			  </div>
			</div>
			<div class="col">
			  <div class="form-group">
			  	<label for="phone2">Phone 2</label>
			    <input type="text" name="phone2" class="form-control" id="phone2" placeholder="Alternate Phone">
			  </div>
			</div>
		  </div>
		  
		  <div class="row">
		  	<div class="col text-center my-3">
		  	<p>*NOTE: Information Enter Into This Form Is Stored Safely On Our State Of The Art Servers.</p>
		  	</div>
		  </div>

		  <div class="row">
		  	<div class="col text-center my-3">
		  	<button type="submit" id="submitBtn" class="btn btn-warning btn-lg"><strong>Add Employee</strong></button>
		  	</div>
		  </div>

		</form><!--end of form -->

		<div class="row" style="color: white;">
			<hr class="style2">
			<div id="empList" class="col">
				
			</div>
		</div>
	</div><!-- end of container -->


	<!-- Bootstrap 4 JS CDN -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="js/getEmployees.js"></script>
	<script src="js/editEmployees.js"></script>

</body>
</html>