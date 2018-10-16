<?php
	//Require db connection
	require_once('database.php');

	//Variable declaration and assignment
	$id = $_POST['id'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];

	$dbh = new Database(); //Instantiate Db Object
	$conn = $dbh->getConnection(); //Get Db Connection

	//SQL QUERY TO BE EXECUTED
	$sql = 'UPDATE employees SET S_FIRSTNAME = :firstName, S_LASTNAME = :lastName WHERE N_ID = :id';


	//Prepare your query to be executed
	$stmnt = $conn->prepare($sql);

	//Execute the statement
	$stmnt->execute(array(
		':id' => $id,
		':firstName' => strtoupper($firstName),
		':lastName' => strtoupper($lastName)
	));

	$stmnt = null;

	header('Location: ../');
