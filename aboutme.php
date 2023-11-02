<!DOCTYPE html>
<html lang='en'>
	<!-- Description: Mangkuk About Author Page -->
	<!-- Author: Amirul Iman bin Amran -->

	<?php include('include/head.php'); ?>

	<body>
		<?php
			include('include/navigation.php');
			$title='About me';
			$file='"images/background-about-me.jpg"';
			include('include/header.php');
		?>

		<main>
			<br>
			<br>
			<div class="clock">
				<div class="display"></div>
		  </div>
			<div class="booking-shape">
				<div class="about-me">

					<div class="me-wrap">
						<img src="images/about-me.jpg" alt="Avatar">
					</div>

					<div class="me-wrap-table">
						<div class="me-main-text">	
							<div class="name">Amirul Iman bin Amran</div>
							<div class="student-id">101234444</div>
							<div class="course">Bachelor in Computer Science</div>
						</div>
						<table id="customers" >
							<tr>
								<th>Date of birth</th>
								<td>6th of March, 2002</td>
							</tr>

							<tr>
								<th>Gender</th>
								<td>Male</td>
							</tr>

							<tr>
								<th>Age</th>
								<td>19</td>
							</tr>

							<tr>
								<th>Siblings</th>
								<td>4; 2 older sisters, 1 older brother & 1 younger brother</td>
							</tr>

							<tr>
								<th>Marital status</th>
								<td>Single</td>
							</tr>

							<tr>
								<th>Number of children</th>
								<td>0</td>
							</tr>

							<tr>
								<th>Hobbies</th>
								<td>Listening to music, watching movies and reading books</td>
							</tr>

							<tr>
								<th>About Kajang</th>
								<td>Kajang is best known for its Sate Kajang. It is also the birth place of Malaysia's heroic figure, Lieutenant Adnan.</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/arrow.png" alt="arrow" style="width:65px;height:65px;"></button>
		</main>

		<?php include('include/footer.php'); ?>
	</body>

</html>
	