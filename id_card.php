<html>
	<header>
		<title>Icard</title>
	</header>
	
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
	<BODY>
		<form method="post" action="entry_bll.php" enctype="multipart/form-data" >
			<div class="col-md-4">
				<a href="index.php">Registration Page</a> | <a href="login.php">Login </a>
			</div>
			<div class="col-md-4">
				<?php 

					include ("db_connection.php") ;
					include ("crud.php");

					$db = new db_connection() ; 
					$data = new crud_all(); 
					$id = $_GET['id'];
					$data = $data -> id_card($id); 

					while ($row = mysql_fetch_array($data))
					{

					
				?>

					<div class="row">
						<div class="container-fluid">
						<label style="font-size: 32px">ID Card</label>
						<hr>
							<div class="panel panel-primary" style=" color:white;background-color:#184BC1;" >
								<div class="panel panel-body" style="background-color: #7C9ADE;">
									<div class="col-md-8">
										<h3>Student I-Card</h3>
									<hr>
										<div>
											<label>Full name : </label>
											<label><?php echo $row["first_name"]." ".$row["last_name"] ?></label>
										</div>
										<div>
											<label>Address : </label>
											<label><?php echo $row["address"] ?></label>
										</div>
										<div>
											<label>Phone : </label>
											<label><?php echo $row["phone"] ?></label>
										</div>
										<div>
											<label>Email : </label>
											<label><?php echo $row["email"]?></label>
										</div>
										<div>
											<label>Date of Birth : </label>
											<label><?php echo $row["dob"]?></label>
										</div>
										<div>
											<label>Higest Qualification : </label>
											<label><?php echo $row["highest_qualification"]." "."Grade" ?></label>
										</div>
										<div>
											<label>Name of Guardian : </label>
											<label><?php echo $row["nog"]?></label>
										</div>
										<div>
											<label>Gender : </label>
											<label><?php echo $row["gender"] ?></label>
										</div>
									
									</div>
									<div class="col-md-4">

										 <div class="col-xs-6 col-md-3" style="margin-top: 80%;" >
										    <!-- <a href="#" class="thumbnail"> -->
										      <img width="100px" src="uploaded_file/<?php echo $row['image']?>"  />
										     
										   <!--  </a> -->
										  </div>
									</div>

								
								</div>
								<h6 align="center"><i>"This card in the property of ISMT college "</i></h6>
							</div>
						</div>
					</div>
				<?php

					// END of while loop  
					}
				?>
			</div>
			<div class="col-md-4">
			&nbsp;
			</div>
		</form>
	</BODY>
</html>