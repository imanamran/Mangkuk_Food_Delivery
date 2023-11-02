<!DOCTYPE html>
<html lang='en'>
	<!-- Description: Mangkuk Main Page -->
	<!-- Author: Amirul Iman bin Amran -->
	
	<?php include('include/head.php'); ?>

	<body>
		<?php
			include('include/navigation.php');
			include('include/index_header.php');
		?>
		
		<section id="clock">
			<div class='taste'>
				<div class="clock">
					<div class="display"></div>
			  </div>
				<h1 class="desc-h1">A taste of nature you will never forget.</h1>
				<p class="desc-p"> Mangkuk aims to imbue healthy foods in people’s lives without having to go through abrupt changes. Smoothie is the best place to start. More than that, we offer an outright insight of smoothies from tutorial to food delivery. We are pleased to invite you to take the first step of living the green dream. Start decorating your life with smoothies!</p>
			</div>
		</section>

		<section>
			<h1 class="desc-h1">What do we do?</h1>

			
			<div class="we-do-cont">
				<a href='food_delivery.php' target="_blank">
					<img class="we-do" src="images/index-delivery.jpg" alt="Delivery Image">
					<div class="overlay">
			    		<div class="text">Food Delivery</div>
			  		</div>
			  	</a>
			</div>

			<div class="we-do-cont">
				<a href='recipes.php' target="_blank">
					<img class="we-do" src="images/index-recipes.jpg" alt="Recipes Image">
					<div class="overlay">
			    		<div class="text">Recipes</div>
			  		</div>
			  	</a>
			</div>

			<div class="we-do-cont">
				<a href='booking.php' target="_blank">
					<img class="we-do" src="images/index-booking.jpg" alt="Booking Image">
					<div class="overlay">
			    		<div class="text">Booking</div>
			  		</div>
			  	</a>
			</div>

			<div class="we-do-cont">
				<a href='jobs.php' target="_blank">
					<img class="we-do" src="images/index-jobs.jpg" alt="Jobs Image">
					<div class="overlay">
			    		<div class="text">Jobs</div>
			  		</div>
			  	</a>
			</div>
		</section>

		<section>
			<div class='map-wrapper'>
				<div class='map-rectangle'>
					<h1 class="desc-h1">Locate us</h1>

					<p  class='googlemap'><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.674073437319!2d101.84985661473443!3d2.909836897880609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc3607787fcddf%3A0x5d7495c40879731!2sRestoran%20SA%20Lunch%20Box%20%40%20Eco%20Majestic!5e0!3m2!1sen!2smy!4v1615038054091!5m2!1sen!2smy" width="1000" height="600" style="border:0;" allowfullscreen="" loading="lazy" ></iframe></p>

				</div>
			</div>
			<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/arrow.png" alt="arrow" style="width:65px;height:65px;"></button>
		</section>
	</body>

	<?php include('include/footer.php'); ?>
</html>
	