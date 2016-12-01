<?php 
	include ("../db_connection.php") ; 
	include ("../crud.php");

	$db = new db_connection() ; 

	$email = $_POST["email_txt"];

	$data = new crud_all () ; 
	$data = $data -> login ($email);
	while ($row = mysql_fetch_array($data))
	{
		$sid = $row['id'];
		// $_POST['fullname_id'] = $row['first_name']." ".$row['last_name'] ; 
		// $_POST['address_id'] = $row['address'];
		// $_POST['phone_id'] = $row['phone'];
		// $_POST['email_id'] = $row['email'];
		// $_POST['dob_id'] = $row['dob'];
		// $_POST['hq_id'] = $row['highest_qualification'];
		// $_POST['nog_id'] = $row['nog'];
		// $_POST['gender_id'] = $row['gender'];
		// $_POST['image_id'] = $row['image'];
		header("Location:../id_card.php?id=$sid");
	}
	
?>