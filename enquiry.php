<!DOCTYPE html>
<html lang='en'>
<!-- Description: Mangkuk Enquiry Page -->
<!-- Author: Amirul Iman bin Amran -->

	<?php include('include/head.php'); ?>

	<body>
		<?php
			include('include/navigation.php');
			// set the servername,username and password
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "Mangkuk";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			// Create database
			//mysqli_query() function performs a query against a database.
			$sql = "CREATE DATABASE Mangkuk";
			if (mysqli_query($conn, $sql)) {
			    echo "Database created successfully";
			} else {
			    echo "Error creating database: " . mysqli_error($conn);
			}

			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			// sql to create table
			$sql = "CREATE TABLE enquiry ( 
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			first_name VARCHAR(30) NOT NULL,
			last_name VARCHAR(30) NOT NULL,
			email VARCHAR(20) NOT NULL,
			street_address VARCHAR(50) NOT NULL,
			city_town VARCHAR(50) NOT NULL,
			state VARCHAR(50) NOT NULL,
			postcode VARCHAR(10) NOT NULL,
			phone_num VARCHAR(20) NOT NULL,
			subject VARCHAR(50) NOT NULL,
			description VARCHAR(200),
			reg_date TIMESTAMP
			)";

			if (mysqli_query($conn, $sql)) {
			    echo "Table Enquiry created successfully";
			} else {
			    echo "Error creating table: " . mysqli_error($conn);
			}

			mysqli_close($conn);
			$title='Enquiry';
			$file='"images/enquiry.jpg"';
			include('include/header.php');
		?>

		<section>
			<br>
			<br>
			<div class="clock">
				<div class="display"></div>
			</div>
			<h1 class="desc-h1">Submit an enquiry</h1>

			<div class="form-wrapper">
				<div class="enquiry-form">
					<form id="f" method="post" action="confirm.php" novalidate="novalidate" onsubmit="return validateForm();">
						<fieldset>
							<table>
								<tr>
									<td>First name</td>
									<td>Last name</td>
								</tr>

								<tr>
									<td><input type="text" name="first_name" placeholder="First name" size="20"
											id="first_name" maxlength="25" pattern="[a-zA-Z]+"
											title="Alphabetical characters only"></td>
									<td><input type="text" name="last_name" placeholder="Last name" size="20"
											id="second_name" maxlength="25" pattern="[a-zA-Z]+"
											title="Alphabetical characters only"></td>

								</tr>

								<tr>
									<td>E-mail address</td>
									<td></td>
								</tr>

								<tr>
									<td colspan="2"><input type="text" name="email" placeholder="e-mail" id="email"
											size="40" id="name3" maxlength="25"></td>
								</tr>



								<tr>
									<td>Address</td>
									<td></td>
								</tr>

								<tr>
									<td class="address">Street address</td>
									<td><input type="text" name="street_address" placeholder="Street address" size="40"
											id="address" maxlength="40"></td>
								</tr>

								<tr>
									<td class="address">City/town</td>
									<td><input type="text" name="city_town" placeholder="City/town" size="40" id="town"
											maxlength="20"></td>
								</tr>

								<tr>
									<td class="address">State</td>
									<td>
										<select id="statefedter" name="state" style="width:200px;">
											<optgroup id="state" label="States">
												<option value="none" selected="selected">---</option>
												<script>statelist()</script>
											</optgroup>

											<optgroup id="fedter" label="Federal Territories">
												<script>fedterlist()</script>
											</optgroup>
										</select>

									</td>
								</tr>

								<tr>
									<td></td>
									<td class="address">*Refresh, if the options do not appear</td>
								</tr>

								<tr>
									<td class="address">Postcode</td>
									<td><input type="text" name="postcode" placeholder="Postcode" size="40" id="postcode"
											maxlength="5" title="Numbers only"></td>
								</tr>

								<tr>
									<td>Phone number</td>
									<td><input type="text" name="phone_num" placeholder="Phone number" size="40"
											id="phone" maxlength="10" title="Numbers only"></td>
								</tr>

								<tr>
									<td>Subject Enquiry on</td>
									<td>
										<input type="text" id="subject" name="subject" value="" />
									</td>
								</tr>

								<tr>
									<td>Service Categories</td>
									<td>
										<select name="product" id="product"
											onchange="change(); configureDDL2(this, document.getElementById('ddl2'))">
											<optgroup label="Services">
												<option value="none" selected="selected">---</option>
												<script>productlist1()</script>
											</optgroup>
										</select>
									</td>
								</tr>

								<tr>
									<td>Service</td>
									<td><select id="ddl2" onchange="change();">
											<option value="none" selected="selected">---</option>
										</select></td>
								</tr>

								<tr>
									<td>Description of your quiries</td>
									<td><textarea id="Issue-comment" name="description" placeholder="Description" rows="3"
											cols="40"></textarea></td>
								</tr>
							</table>
						</fieldset>
						<input type="submit" value="Submit">
					</form>
				</div>
			</div>
			
			<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/arrow.png" alt="arrow"
					style="width:65px;height:65px;"></button>
		</section>

		<?php include('include/footer.php'); ?>
	</body>

</html>