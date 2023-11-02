<!DOCTYPE html>
<html lang='en'>
	<!-- Description: Mangkuk Enhancement Page -->
	<!-- Author: Amirul Iman bin Amran -->
	
	<?php include('include/head.php'); ?>

	<body>
		<?php
			include('include/navigation.php');
			$title='CSS enhancement';
			$file='"images/enhancement.jpg"';
			include('include/header.php');
		?>

		<section>
			<div class="shape">
				<div class="inline">
					<div class="e-flip-card">
				  		<div class="e-flip-card-inner">
				    		<div class="e-flip-card-front">
				      			<img class="r-pic" src="images/prod2.jpg" alt="Avatar" >
				      			<h1>Acai Bowl</h1>
				    		</div>
					    	<div class="e-flip-card-back"> 
					      		 <div>Ingridients</div>
					      		 <p>Pure Unsweetened Acai Puree</p> 
						      	 <p>Frozen blueberries and strawberries</p>
						         <p>Banana</p>
						      	 <p>Liquid</p>
						      	 <p>Yogurt</p>
						      	 <p>Fresh sliced fruit</p>
						      	 <p>Nuts</p>
					    	</div>
				  		</div>
					</div>
				</div>

				<div id="explain">
					<h1>Flip Card</h1>
					<br>
					<p>
						Flip Card is used to avoiding using a lot of spaces but provide vast information simultaneously. It also portrays a flipping movement which is intriguing for users to read as they can imagine it as an actual card. Since the information is packed, it would not be interesting to look at websites with many wording because not all users want to read it anyway. Hence, putting the information at the back of the cards will only allow users to choose which information they want to read. 
					</p>
					<br>
					<p><a href="recipes.php#didyouknow">Click me!</a></p>
					<br>
					<p>
						Source: <a href=https://www.w3schools.com/howto/howto_css_flip_card.asp target="_blank">W3Schools</a>
					</p>
				</div>
			</div>
		</section>

		<section>
			<div class="booking-shape">
				<div class="clearfix">
		  			<div class="box-img">
		  				<div class="slidershow middle">
		  					<div class="slides">
		  						<input type="radio" name="r" id="r1" checked>
		  						<input type="radio" name="r" id="r2">
		  						<input type="radio" name="r" id="r3">
		  						<input type="radio" name="r" id="r4">

		  						<div class="slide s1">
									<img class="booking-pic" alt="Room" src="images/room1.jpg">
								</div>

								<div class="slide">
									<img class="booking-pic" alt="Room" src="images/room2.jpg">
								</div>

								<div class="slide">
									<img class="booking-pic" alt="Room" src="images/room3.jpg">
								</div>

								<div class="slide">
									<img class="booking-pic" alt="Room" src="images/room4.jpg">
								</div>
							</div>
							<div class="navigation">
								<label for="r1" class="bar"></label>
								<label for="r2" class="bar"></label>
								<label for="r3" class="bar"></label>
								<label for="r4" class="bar"></label>
							</div>
						</div>
					</div>

					<div>
						<h1>Slideshow with buttons</h1>
						<p>
							Slideshow let users navigate images with the bar buttons at the bottom of each image. This allows the user to compare directly between the photos. For example, if they want to compare two images, all they need to do is just click on the buttons according to the images. Instantly, they can spot the images' differences and choose the best option based on their preferences. The animation from side to side is eye-cacthing as they can see the images slide and disappear to the left or right. 
						</p>
						<br>
						<p><a href="booking.php#rooms">Click me!</a></p>
						<br>
						<p>
							Source: <a href="https://www.youtube.com/watch?v=9Irz0c-6UGw" target="_blank">YouTube</a>
						</p>
					</div>
				</div>
			</div>
		</section>

		<?php include('include/footer.php'); ?>
	</body>

</html>
	