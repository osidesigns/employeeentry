<?php

	require_once('database.php');

	$dbh = new Database();
	$conn =  $dbh->getConnection();

	$sql = 'SELECT S_FIRSTNAME,S_LASTNAME,S_EMAIL,N_PHONE1 FROM employees';



	$stmnt = $conn->prepare($sql);
	$stmnt->execute();
	$result = $stmnt->fetchAll();

	$result = json_encode($result);

	echo $result;

	$stmnt->closeCursor();
	$dbh = null;
