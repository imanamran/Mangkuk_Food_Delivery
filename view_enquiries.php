<!DOCTYPE html>
<html lang='en'>
	<!-- Description: Mangkuk Enquiry Page -->
	<!-- Author: Amirul Iman bin Amran -->

	<?php include('include/head.php'); ?>

	<body>
		<?php
			include('include/navigation.php');
			$title='View enquiry';
			$file='"images/enquiry.jpg"';
			include('include/header.php');
		?>

		<section>
			<br>
			<br>
			<div class="form-wrapper">
				<div class="view-table">
					<div style="overflow-x:auto;">
						<table id="view">
							<th>ID</th>
							<th>Name</th>
							<th>E-mail</th>
							<th>Street address</th>
							<th>City/town</th>
							<th>State</th>
							<th>Postcode</th>
							<th>Phone number</th>
							<th>Subject</th>
							<th>Description</th>
							<th>Time</th>

							<?php
							// set the servername,username and password
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "Mangkuk";

							// Create connection
							$conn = mysqli_connect($servername, $username, $password,$dbname);
							// Check connection
							if (!$conn) {
							    die("Connection failed: " . mysqli_connect_error());
							}

							$sql = "SELECT id, first_name, last_name, email, street_address, city_town, state, postcode, phone_num, subject, description, reg_date FROM enquiry";
							$result = mysqli_query($conn, $sql);

							if (mysqli_num_rows($result) > 0) {
							    // output data of each row
							    while($row = mysqli_fetch_assoc($result)) {
							    	echo "<tr><td>" . $row["id"]. "</td><td>" . $row["first_name"]. " " . $row["last_name"] . "</td><td>". $row["email"]. "</td><td>" . $row["street_address"] . "</td><td>" . $row["city_town"] . "</td><td>" . $row["state"] . "</td><td>" . $row["postcode"] . "</td><td>" . $row["phone_num"] . "</td><td>" . $row["subject"] . "</td><td>" . $row["description"] . "</td><td>" . $row["reg_date"] . "</td></tr>";
							    }
							} else {
							    echo "<tr><td colspan='11'>" . "0 results" . "</td></tr>";
							}

							mysqli_close($conn);
							?>
						</table>
					</div>
				</div>
			</div>
		</section>

		<?php include('include/footer.php'); ?>
	</body>
</html>