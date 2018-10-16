<?php
	//Require db connection
	require_once('database.php');

	//Variable declaration and assignment
	$id = $_POST['id'];
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
	$sql = 'UPDATE employees SET S_FIRSTNAME = :firstName, S_LASTNAME = :lastName WHERE N_ID = :id';


	//Prepare your query to be executed
	$stmnt = $conn->prepare($sql);

	//Execute the statement
	$stmnt->execute(array(
		':id' => $id,
		':firstName' => strtoupper($firstName),
		':lastName' => strtoupper($lastName),
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

	header('Location: ../');
