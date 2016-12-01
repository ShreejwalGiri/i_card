<html>
	<header><title>Icard</title></header>
	<BODY>
		<form method="post" action="php/entry_bll.php" enctype="multipart/form-data" >
			<div style="margin-top: 10%;">
				<table border="1.5px" align="center">
					<tr>
						<th colspan="2">Enter Your Details </th>
					</tr>
					<tr>
						<td><label>Name</label></td>
						<td><input type="text" name="f_name" placeholder="Full Name " /></td>
					</tr>
					<tr>
						<td><label>Address</label></td>
						<td><input type="text" name="address" placeholder="Address" /></td>
					</tr>
					<tr>
						<td><label>Phone</label></td>
						<td><input type="text" name="phone" placeholder="Phone" /></td>
					</tr>
					<tr>
						<td><label>Email</label></td>
						<td><input type="Email" name="email_id" placeholder="Email ID" /></td>
					</tr>
					<tr>
						<td><label>Date of Birth</label></td>
						<td><input type="text" name="dob" placeholder="Date of Birth" /></td>
					</tr>
					<tr>
						<td><label>Higher Qualification</label></td>
						<td>
							<select name="hig_quali">
								<option value="10">10Th</option>
								<option value="9" >9Th</option>
								<option value="8">8Th</option>
								<option value="7">7Th</option>
								<option value="6">6Th</option>
								<option value="5">5Th</option>
								<option value="4">4Th</option>
								<option value="3">3Th</option>
								<option value="2">2Th</option>
								<option value="1">1Th</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label>Name of Guardian </label></td>
						<td><input type="text" name="guardian_name" placeholder="Guardian Name " /></td>
					</tr>
					<tr>
						<td><label>Gender</label></td>
						<td>
							<select name="gender">
								<option value="m"> Male </option>
								<option value="f"> Female </option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label>Image</label></td>
						<td><input type="file" name="image" /></td>
					</tr>
					<tr>
						<td colspan="2" align="right" >
							<input type="submit" Value="Submit" name="btn_sub" />
						 	<!-- <input type="submit" value="Clear" name="clr" /> -->
						</td>
						
					</tr>
				</table>
			</div>
		</form>
	</BODY>
</html>