<!DOCTYPE html>
<html lang='en'>
	<!-- Description: Mangkuk Food Delivery Page -->
	<!-- Author: Amirul Iman bin Amran -->
	
	<?php include('include/head.php'); ?>

	<body>
		<?php
			include('include/navigation.php');
			$title='Food deliveryinclude';
			$file='"images/food-delivery.jpg"';
			include('include/header.php');
		?>

		<section>
			<div class='taste'>
				<div class="clock">
					<div class="display"></div>
			  </div>
				<h2>Description</h2>
				<p class="desc-pa"> We don’t always have to search for foods, sometimes we have to open our doors and let them come to us. With the food delivery service, you can order our food at your fingertips without having to go to the restaurant. Despite COVID-19, we aim to deliver them as if you were in our restaurant because our foods imbued by the vibes. There are things in our life that can only be with us through thick, but foods always be with us through thin. At the same time, we have to maintain our healthy consumption and smoothies are the best to help us in our horrendous moment of life. Smoothies can be consumed at any time and place. Thanks to our delivery service, our menu transcends all meals, breakfast, lunch & dinner. Even more, we allow you to order more than just these ordinary meals but also a special category, specifically to let you experience a whole new taste of smoothies. Smoothie is the best way for every beginner to be part of the green cycle. In life, much like smoothies, you get out what you put in. A healthy person starts from the inside; it begins with a Mangkuk smoothie.</p>
			</div> 
		</section>

		<section>
			<div id="breakfast" class="sub-delivery-wrapper">
				<h1 class="sub-delivery">Breakfast</h1>
				<div class='product'>
					<div class="rounded-shape">
						<img alt="Strawberry Bowl" src="images/Prod1.jpg"    >
						<p>Strawberry Bowl</p>
						<p>RM 15.00</p>
						<a class="button_1" onclick="storeitem(['Food Delivery', ' Breakfast'])">
							<button type="submit" name="button">Enquiry</button>
						</a>
					</div>

					<div class="rounded-shape">
						<img alt="Acai Bowl" src="images/Prod2.jpg"    >
						<p>Acai Bowl</p>
						<p>RM 15.00</p>
						<a class="button_1" onclick="storeitem(['Food Delivery', ' Breakfast'])">
							<button type="submit" name="button">Enquiry</button>
						</a>
					</div>

					<div class="rounded-shape">
						<img alt="Mango Bowl" src="images/Prod3.jpg"    >
						<p>Mango Bowl</p>
						<p>RM 15.00</p>
						<a class="button_1" onclick="storeitem(['Food Delivery', ' Breakfast'])">
							<button type="submit" name="button">Enquiry</button>
						</a>
					</div>

					<div class="rounded-shape">
						<img alt="Ocean Blue Bowl" src="images/Prod4.jpg"    >
						<p>Ocean Blue Bowl</p>
						<p>RM 15.00</p>
						<a class="button_1" onclick="storeitem(['Food Delivery', ' Breakfast'])">
							<button type="submit" name="button">Enquiry</button>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div id="lunch" class="sub-delivery-wrapper">
				<h1 class="sub-delivery">Lunch</h1>

				<div class='product'>
					<div class="rounded-shape">
						<img alt="Dragon Fruit Bowl" src="images/Prod5.jpg"    >
						<p>Dragon Fruit Bowl</p>
						<p>RM 15.00</p>
						<a class="button_1" onclick="storeitem(['Food Delivery', ' Lunch'])">
							<button type="submit" name="button">Enquiry</button>
						</a>
					</div>

					<div class="rounded-shape">
						<img alt="Avocado Bowl" src="images/Prod6.jpg"    >
						<p>Avocado Bowl</p>
						<p>RM 15.00</p>
						<a class="button_1" onclick="storeitem(['Food Delivery', ' Lunch'])">
							<button type="submit" name="button">Enquiry</button>
						</a>
					</div>

					<div class="rounded-shape">
						<img alt="Berry + Banana Bowl" src="images/Prod7.jpg"    >
						<p>Berry + Banana Bowl</p>
						<p>RM 15.00</p>
						<a class="button_1" onclick="storeitem(['Food Delivery', ' Lunch'])">
							<button type="submit" name="button">Enquiry</button>
						</a>
					</div>

					<div class="rounded-shape">
						<img alt="Orange Bowl" src="images/Prod8.jpg"    >
						<p>Orange Bowl</p>
						<p>RM 15.00</p>
						<a class="button_1" onclick="storeitem(['Food Delivery', ' Lunch'])">
							<button type="submit" name="button">Enquiry</button>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div id="dinner" class="sub-delivery-wrapper">
				<h1 class="sub-delivery">Dinner</h1>

				<div class='product'>
					<div class="rounded-shape">
						<img alt="Charcoal Bowl" src="images/Prod9.jpg"    >
						<p>Charcoal Bowl</p>
						<p>RM 15.00</p>
						<a class="button_1" onclick="storeitem(['Food Delivery', ' Dinner'])">
							<button type="submit" name="button">Enquiry</button>
						</a>
					</div>

					<div class="rounded-shape">
						<img alt="Red Berry Bowl" src="images/Prod10.jpg"    >
						<p>Red Berry Bowl</p>
						<p>RM 15.00</p>
						<a class="button_1" onclick="storeitem(['Food Delivery', ' Dinner'])">
							<button type="submit" name="button">Enquiry</button>
						</a>
					</div>

					<div class="rounded-shape">
						<img alt="Pineapple Bowl" src="images/Prod11.jpg"    >
						<p>Pineapple Bowl</p>
						<p>RM 15.00</p>
						<a class="button_1" onclick="storeitem(['Food Delivery', ' Dinner'])">
							<button type="submit" name="button">Enquiry</button>
						</a>
					</div>

					<div class="rounded-shape">
						<img alt="Spinach + Kale Bowl" src="images/Prod12.jpg"    >
						<p>Spinach + Kale Bowl</p>
						<p>RM 15.00</p>
						<a class="button_1" onclick="storeitem(['Food Delivery', ' Dinner'])">
							<button type="submit" name="button">Enquiry</button>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div id="special" class="sub-delivery-wrapper">
				<h1 class="sub-delivery">Special</h1>

				<div class='product'>
					<div class="rounded-shape">
						<img alt="Vegan Bowl" src="images/Prod13.jpg"    >
						<p>Vegan Bowl</p>
						<p>RM 30.00</p>
						<a class="button_1" onclick="storeitem(['Food Delivery', ' Special'])">
							<button type="submit" name="button">Enquiry</button>
						</a>
					</div>

					<div class="rounded-shape">
						<img alt="Caramel Bowl" src="images/Prod14.jpg"    >
						<p>Caramel Bowl</p>
						<p>RM 30.00</p>
						<a class="button_1" onclick="storeitem(['Food Delivery', ' Special'])">
							<button type="submit" name="button">Enquiry</button>
						</a>
					</div>

					<div class="rounded-shape">
						<img alt="Gold Bowl" src="images/Prod15.jpg"    >
						<p>Gold Bowl</p>
						<p>RM 30.00</p>
						<a class="button_1" onclick="storeitem(['Food Delivery', ' Special'])">
							<button type="submit" name="button">Enquiry</button>
						</a>
					</div>

					<div class="rounded-shape">
						<img alt="Rainbow Bowl" src="images/Prod16.jpg"    >
						<p>Rainbow Bowl</p>
						<p>RM 30.00</p>
						<a class="button_1" onclick="storeitem(['Food Delivery', ' Special'])">
							<button type="submit" name="button">Enquiry</button>
						</a>
					</div>
				</div>
			</div>
			<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/arrow.png" alt="arrow" style="width:65px;height:65px;"></button>
		</section>

		<?php include('include/footer.php'); ?>
	</body>

</html>
	