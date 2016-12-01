<?php 
	
	class db_connection 
	{
		function __construct()
		{
			$database = "icard_info" ;
			$con = mysql_connect("localhost","root","");
			mysql_select_db($database,$con) ; 
			// mysqli_connect("localhost","root","",$database); 

		}
	}
?>