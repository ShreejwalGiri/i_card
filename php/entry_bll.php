<?php 
	include ("../db_connection.php") ; 
	include ("../crud.php");

	$db = new db_connection() ; 

	$full_name = $_POST['f_name'];
	$name = explode(" ",$full_name) ; 
	$first_name = $name[0] ; 
	$last_name = end($name) ; 
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$email = $_POST['email_id'];
	$dob = $_POST['dob'];
	$hig_quly = $_POST['hig_quali'];
	$nog = $_POST['guardian_name'];
	$gender = $_POST['gender'];
	$image = "no image found " ; 

	

	if (isset($_FILES['image']))
	{
		$image = $_FILES['image'];

		// file properties 
		$img_name = $image['name'];
		$img_tmp = $image['tmp_name'];
		$img_size = $image ['size'];
		$img_error = $image['error'];

		$name = explode(".",$img_name) ; 
		$ext_raw = end($name) ; 
		$ext = strtolower($ext_raw) ; 
		$allow_ext = array("jpeg","png","jpg") ; 
		if (in_array($ext,$allow_ext))
		{
			if ($img_error === 0)
			{
				$unique_name = uniqid('',true).".".$ext ; 
				$file_upload = "../uploaded_file/".$unique_name;
				$image = $unique_name ; 
				move_uploaded_file($img_tmp, $file_upload) ;
			}
		}

		
	}

	$data = new crud_all(); 
	$data -> insert_info($first_name,$last_name,$address,$phone,$email,$dob,$hig_quly,$nog,$gender,$image);
	header("location:../login.php");
	

	
?>