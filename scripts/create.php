<?php
	//Require db connection
	require_once('database.php');

	//Variable declaration and assignment
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zipcode = $_POST['zipcode'];
	$ssn = $_POST['ssn'];
	$email = $_POST['email'];
	$phone1 = $_POST['phone1'];
	$phone2 = $_POST['phone2'];

	$dbh = new Database(); //Inistantiate Db Object
	$conn = $dbh->getConnection(); //Get Db Connection

	//SQL QUERY TO BE EXECUTED
	$sql = 'INSERT INTO employees (S_FIRSTNAME, S_LASTNAME, N_AGE, S_ADDRESS, S_CITY, S_STATE, N_ZIPCODE, N_SSN, S_EMAIL, N_PHONE1, N_PHONE2) VALUES(:firstName, :lastName, :age, :address, :city, :state, :zipcode, :ssn, :email, :phone1, :phone2)';


	//Prepare your query to be executed
	$stmnt = $conn->prepare($sql);

	//Execute the statement
	$stmnt->execute(array(
		':firstName' => $firstName,
		':lastName' => $lastName,
		':age' => $age,
		':address' => $address,
		':city' => $city,
		':state' => $state,
		':zipcode' => $zipcode,
		':ssn' => $ssn,
		':email' => $email,
		':phone1' => $phone1,
		':phone2' => $phone2
	));

	$stmnt = null;
