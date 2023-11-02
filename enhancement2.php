<!DOCTYPE html>
<html lang='en'>
	<!-- Description: Mangkuk Enhancement Page -->
	<!-- Author: Amirul Iman bin Amran -->

	<?php include('include/head.php'); ?>

	<body>
		<?php
			include('include/navigation.php');
			$title='JavaScript enhancement';
			$file='"images/enhancement2.jpg"';
			include('include/header.php');
		?>

		<section>
			<div class="booking-shape">
				<div class="inline">
					<div id="explain">
						<br>
						<div class="slideshow-containere">

							<div class="mySlides fade">
							<img src="images/background-img.jpg" style="width:50%">
							</div>
							
							<div class="mySlides fade">
							<img src="images/background-img1.jpg" style="width:50%">
							</div>
							
							<div class="mySlides fade">
							<img src="images/background-img2.jpg" style="width:50%">
							</div>
			
							<div class="mySlides fade">
								<img src="images/background-img3.jpg" style="width:50%">
							</div>
							
							<div class="mySlides fade">
								<img src="images/background-img4.jpg" style="width:50%">
							</div>
						</div>
							
						<div style="text-align:center">
							<span class="dot"></span> 
							<span class="dot"></span> 
							<span class="dot"></span>
							<span class="dot"></span>
							<span class="dot"></span>
						</div>
					</div>
					
					<div class="enc2descp">
						<h1>Automatic slideshow</h1>
						<p>
							Slideshow can make the website to look more interactive. It allows users to have a preview of different type of the products in order to give them a roughly idea of the website. This can potentially extend users’ time spent on website as they can stay a bit longer to finish viewing all the images. </p>
						<br>
						<p><a href="index.php">Click me!</a></p>
						<br>
						<p>
							Source: <a href="https://www.w3schools.com/howto/howto_js_slideshow.asp" target="_blank">W3Schools</a>
						</p>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="booking-shape">
					<div id="explain">
						<div class="clock">
							<div class="display"></div>
					</div>
					</div>

				<div class="enc2descp">
					<h1>Real-time clock</h1>
					<p>
						Real time clock helps users to check their time while still surfing on the website so that they do not have to minimise or close the browser to look at the time. This will help them to track their time for how long they have been on the website to avoid spending too much time on it. </p>
					<br>
					<p><a href="index.php">Click me!</a></p>
					<br>
					<p>
						Source: <a href="https://www.youtube.com/watch?v=CP2V4tN8kYI&feature=emb_title" target="_blank">YouTube</a>
					</p>
				</div>
			</div>
		</section>

		<section>
			<div class="booking-shape">
					<div id="explain">
						<button onclick="topFunction()" title="Go to top"><img src="images/arrow.png" alt="arrow" style="width:65px;height:65px;"></button>
					</div>

				<div class="enc2descp">
					<h1>Scroll back to top button</h1>
					<p>
						Despite having a constant navigation bar, users can still use the scroll back button to go up. This is mainly to let users view back the beginning of the page regardless from where they last stop. The button position will be fixed and follow the page from the top to bottom. The users can just left click it to go up. </p>
					<br>
					<p><a href="index.php">Click me!</a></p>
					<br>
					<p>
						Source: <a href="https://www.youtube.com/watch?v=Vef9bxTilCU" target="_blank">YouTube</a>
					</p>
				</div>
			</div>
		</section>

		<?php include('include/footer.php'); ?>
	</body>

</html>
	