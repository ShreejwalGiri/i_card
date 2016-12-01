<?php 

	class crud_all
	{
		function insert_info ($first_name,$last_name,$address,$phone,$email,$dob,$hig_quly,$nog,$gender,$image)
		{
			// include ("db_connection.php") ;
			// $db = new db_connection() ; 
			// global $con ;   
			$query = "insert into student_info (first_name,last_name,address,phone,email,dob,highest_qualification,nog,gender,image) values('$first_name','$last_name','$address','$phone','$email','$dob','$hig_quly','$nog','$gender','$image')" ;
			$data = mysql_query($query) ; 
			return $data ;  
		}

		function id_card ($s_id)
		{
			$query = "select * from student_info where id = '$s_id' " ; 
			$data = mysql_query($query) ; 
			return $data ; 
		}

		function login ($email)
		{
			$query = "select * from student_info where email = '$email' " ; 
			$data = mysql_query($query) ; 
			return $data ; 
		}
	}
?>