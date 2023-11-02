<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel='stylesheet' href='../style/style.css'>
	<title>Login</title>
	</head>
	<body>
		<?php include('../include/admin_navigation.php'); ?>
		

	<?php
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

		require('db.php');
		session_start();
	    // If form submitted, insert values into the database.
	    if (isset($_POST['username'])){
			
			$username = stripslashes($_REQUEST['username']); // removes backslashes
			$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($con,$password);
			
		//Checking is user existing in the database or not
	        $query = "SELECT * FROM `admin` WHERE username='$username' and password='$password'";
			$result = mysqli_query($con,$query) or die(mysqli_error());
			$rows = mysqli_num_rows($result);
	        if($rows==1){
				$_SESSION['username'] = $username;
				header("Location: management.php"); // Redirect user to index.php
	            }else{
					echo "<header>
      <div class='container'>
        <img alt='background imag' class='background-image' src='../images/enquiry.jpg'    >
        <div class='welcome-wrapper'>
          <div class='service-topic'>Admin login</div>
        </div>
      </div>
    </header><br><br><br><div class='form-wrapper'><div class='enquiry-form'><h3>Username/password is incorrect.</h3><br><p>Username: admin</p>
				<p>Password: admin</p><br>Click here to <a href='login.php'>try again</a></div></div>";

					
					}
	    }else{
	            	require('admin_del.php');
	?>
	<header>
      <div class='container'>
        <img alt="background imag" class="background-image" src="../images/enquiry.jpg"    >
        <div class="welcome-wrapper">
          <div class='service-topic'>Admin login</div>
        </div>
      </div>
    </header>

		<br>
		<br>
		<br>

	
	<div class="form">

	<div class="form-wrapper">
		<div class="enquiry-form">
			<form action="" method="post" name="login">
				<input type="text" name="username" placeholder="Username" required />
				<input type="password" name="password" placeholder="Password" required />
				<input name="submit" type="submit" value="Login" />
				<p>Username: admin</p>
				<p>Password: admin</p>
			</form>
		</div>
	</div>
	<?php } ?>

	<?php include('../include/footer.php'); ?>
	</body>
</html>

<?php
	// set the servername,username and password
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

	// Create database
	//mysqli_query() function performs a query against a database.
	$sql = "CREATE DATABASE Mangkuk";
	if (mysqli_query($conn, $sql)) {
	} else {
	}

	// sql to create table
	$sql = "CREATE TABLE admin (
	username VARCHAR(30) NOT NULL,
	password VARCHAR(30) NOT NULL
	)";

	if (mysqli_query($conn, $sql)) {
	} else {
	}

	$sql = "INSERT INTO admin (username, password)
		VALUES ('admin', 'admin')";

	if (mysqli_query($conn, $sql)) {
		} else {
		}

	mysqli_close($conn);
?>
