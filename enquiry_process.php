<!DOCTYPE html>
<html lang='en'>
	<!-- Description: Mangkuk Enquiry Page -->
	<!-- Author: Amirul Iman bin Amran -->

	<?php include('include/head.php'); ?>

	<body>
		<?php
			include('include/navigation.php');

			//get the value from confirm.php
	        $fname = $_POST['first_name'];
	        $lname = $_POST['last_name'];
	        $email = $_POST['email'];
	        $address = $_POST['street_address'];
	        $city_town = $_POST['city_town'];
	        $state = $_POST['state'];
	        $postcode = $_POST['postcode'];
	        $phone_num = $_POST['phone_num'];
	        $subject = $_POST['subject'];
	        $desc = $_POST['description'];

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "Mangkuk";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "INSERT INTO enquiry (first_name, last_name, email, street_address, city_town, state, postcode, phone_num, subject, description)
			VALUES ('$fname', '$lname', '$email', '$address', '$city_town', '$state', '$postcode', '$phone_num', '$subject', '$desc')";


			if (mysqli_query($conn, $sql)) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);

			$title='Enquiry';
			$file='"images/enquiry.jpg"';
			include('include/header.php');
    	?>

    	<section>
			<h1 class="desc-h1">Thank you & come again</h1>

			<div class="form-wrapper">
				<div class="confirm-form">
					<fieldset>
				    	<table>
				    		<tr>
						        <td>Description</td>
						        <td>Value</td>
						    </tr>
					        <tr><td>First name</td><td>: <?php echo $fname;?></td></tr>
					        <tr><td>Last name</td><td>: <?php echo $lname;?></td></tr>
					        <tr><td>E-mail address</td><td>: <?php echo $email;?></td></tr>
					        <tr><td>Street address</td><td>: <?php echo $address;?></td></tr>
					        <tr><td>City/town</td><td>: <?php echo $city_town;?></td></tr>
					        <tr><td>State</td><td>: <?php echo $state;?></td></tr>
					        <tr><td>Postcode</td><td>: <?php echo $postcode;?></td></tr>
					        <tr><td>Phone number</td><td>: <?php echo $phone_num;?></td></tr>
					        <tr><td>Subject</td><td>: <?php echo $subject;?></td></tr>
					        <tr><td>Desciption</td><td>: <?php echo $desc;?></td></tr>
					        <tr>
						        <td colspan="2"><a href='index.php'><input type="submit" value="Home page"></a></td>
						    </tr>
				    	</table>
				    </fieldset>
			    </div>
			</div>
		</section>

		<?php include('include/footer.php'); ?>
	</body>
</html>