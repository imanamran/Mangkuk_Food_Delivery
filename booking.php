<!DOCTYPE html>
<html lang='en'>
	<!-- Description: Mangkuk Booking Page -->
	<!-- Author: Amirul Iman bin Amran -->

	<?php include('include/head.php'); ?>

	<body>
		<?php
			include('include/navigation.php');
			$title='Booking';
			$file='"images/booking.jpg"';
			include('include/header.php');
		?>

		<section>
			<div class='taste'>
				<div class="clock">
					<div class="display"></div>
			  </div>
				<h2>Description</h2>
				<p class="desc-pa">
					Mangkuk is more than just delivering food & recipes tutorial, we aim to do more than that. Our restaurant provides a quality venue for handling small events such as birthday parties, family gatherings, client meetings, etc. You can even book the whole restaurants to allow a large number of attendees. As for people who prefer to keep it small and private, there are 5 rooms for them to choose from. You can visit the same place over and over again and see it differently each time. Booking our venue means you are free to decorate it based on your own theme. Other than that, we also allow you to book our catering service. This will help suffice those who really fond of our foods but wanting it to be at their place’s event. We are prone to deliver the foods environment the same as the restaurant; home feels like a restaurant. When eating, we must be comfortable with the surrounding. Handling certain events in our venue does not entirely suit people’s needs because they only want the foods. Catering is the best option for them to do so. We also provide our kitchen appliances for them to use in their events.
				</p>
			</div>
		</section>

		<section>
			<div id="whole-restaurant">
				<h1 class="sub-delivery">Whole Restaurant</h1>
				<div class="booking-shape">
					<div class="clearfix">
			  			<div class="box-img">
							<img class="booking-pic" alt="background imag" src="images/whole-res.jpg">
						</div>

						<div class="box">
							<p>
								Ideal of course for private dining, parties is especially popular, providing delicious food and tempting drinks to keep all your guests refreshed and satisfied. We have something to suit every occasion and every possible taste – be it in terms of the décor or the menu. Speaking of the food, we have award-winning cuisine and those that offer the opportunity to create entirely bespoke, seasonal menus. So be it for a wedding reception, birthday bash, traditional Christmas dinner or any other dining experience, look no further than Mangkuk.
							</p>
						</div>

						<div class="booking-table">
								<table>
									<tr>
										<td>Date</td>
										<td><input type="date" name="Date"></td>
									</tr>

									<tr>
										<td>Time</td>
										<td><input type="time" id="appt1" name="Time"></td>
									</tr>

									<tr>
										<td>Attendees</td>
										<td><input type="number" id="quantity1" name="Attendees" min="1" max="15"></td>
									</tr>

									<tr>
										<td>Parking</td>
										<td>
											<input type="radio" id="yes1" name="Parking" value="yes">
					 						<label for="yes1">Yes</label>
					 						<input type="radio" id="no1" name="Parking" value="no">
					  						<label for="no1">No</label>
					  					</td>
									</tr>

									<tr>
										<td>Wi-Fi</td>
										<td>
											<input type="radio" id="yes2" name="Wi-Fi" value="yes">
					 						<label for="yes2">Yes</label>
					 						<input type="radio" id="no2" name="Wi-Fi" value="no">
					  						<label for="no2">No</label>
					  					</td>
									</tr>

									<tr>
										<td>AV</td>
										<td>
											<input type="radio" id="yes3" name="AV" value="yes">
					 						<label for="yes3">Yes</label>
					 						<input type="radio" id="no3" name="AV" value="no">
					  						<label for="no3">No</label>
					  					</td>
									</tr>

									<tr >
										<td colspan="2"><a class="button_1" onclick="storeitem(['Booking', ' Whole Restaurant'])">
											<button type="submit" name="button">Enquiry</button>
										</a></td>
									</tr>
								</table>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div id="rooms">
				<h1 class="sub-delivery">Rooms</h1>
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

						<div class="box">
							<p>
								From board meeting buffets and wedding parties to five-course feasts and birthday dinners our adaptable private dining spaces – named after clouds – can be hired as single rooms, or combined and shaped to fit your occasion. These private dining rooms are situated on level 38 on The Gherkin offering stunning views of the city with one entire glass wall from floor to ceiling. Here, the private dining is both refined and secluded, offering a privileged perspective to impress your guests.
							</p>
						</div>

						<div class="booking-table">
								<table>
									<tr>
										<td>Date</td>
										<td><input type="date" name="Date"></td>
									</tr>

									<tr>
										<td>Time</td>
										<td><input type="time" id="appt2" name="Time"></td>
									</tr>

									<tr>
										<td>Attendees</td>
										<td><input type="number" id="quantity2" name="Quantity" min="1" max="15"></td>
									</tr>

									<tr>
										<td>Room</td>
										<td>
										<select name="Room" class="custom-select">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											</select>
										</td>
									</tr>

									<tr>
										<td>Wi-Fi</td>
										<td>
											<input type="radio" id="yes4" name="Wi-Fi" value="yes">
					 						<label for="yes4">Yes</label>
					 						<input type="radio" id="no4" name="Wi-Fi" value="no">
					  						<label for="no4">No</label>
					  					</td>
									</tr>

									<tr>
										<td>AV</td>
										<td>
											<input type="radio" id="yes5" name="AV" value="yes">
					 						<label for="yes5">Yes</label>
					 						<input type="radio" id="no5" name="AV" value="no">
					  						<label for="no5">No</label>
					  					</td>
									</tr>

									<td colspan="2"><a class="button_1" onclick="storeitem(['Booking', ' Rooms'])">
										<button type="submit" name="button">Enquiry</button>
									</a></td>
								</table>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div id="catering">
				<h1 class="sub-delivery">Catering</h1>
				<div class="booking-shape">
					<div class="clearfix">
			  			<div class="box-img">
							<img class="booking-pic" alt="background imag" src="images/catering.jpg">
						</div>

						<div class="box">
							<p>
								Our experienced culinary team specialises in creating menus that will thrill your guests and elevate your event to even higher levels. With dedicated kitchens on each of our meeting floors, we guarantee that food is fresh, first-class and utterly delicious. We are always delighted to discuss your needs and can develop menus specifically to your theme and requirements.
							</p>
						</div>

						<div>
								<table>
									<tr>
										<td>Date</td>
										<td><input type="date" name="date"></td>
									</tr>

									<tr>
										<td>Time</td>
										<td><input type="time" id="appt3" name="Time"></td>
									</tr>

									<tr>
										<td>Attendees</td>
										<td><input type="number" id="quantity3" name="quantity" min="1" max="100"></td>
									</tr>

									<tr>
										<td>Address</td>
										<td>
											<input type="text" name="Address line 1" placeholder="Address line 1" size="40" required="required" id="address1" maxlength="40">
					  					</td>
									</tr>

									<tr>
										<td></td>
										<td>
											<input type="text" name="Address line 2" placeholder="Address line 2" size="40" id="address2" maxlength="40">
					  					</td>
									</tr>

									<tr>
										<td></td>
										<td>
											<input type="text" name="Address line 3" placeholder="Address line 3" size="40" id="address3" maxlength="40">
					  					</td>
									</tr>

									<td colspan="2"><a class="button_1" onclick="storeitem(['Booking', ' Catering'])">
										<button type="submit" name="button">Enquiry</button>
									</a></td>
								</table>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div id="kitchen-app">
				<h1 class="sub-delivery">Kitchen Appliances</h1>
				<div class="booking-shape">
					<div class="clearfix">
		  			<div class="box-img">
						<img class="booking-pic" alt="background imag" src="images/kitchen.jpg">
					</div>
					<div class="box">
					<p>
						 Adding a food processor, microwave, dishwasher or hand blender to your event allows you to enjoy the latest in cooking and cooling technology. Prepare more of the dishes you love with ease with a new oven or stove. Take the hassle out of the post dinner clean up with a new large-capacity dishwasher and spend more time with your family and friends. Our selection of freestanding cookers, hobs and hoods also help make your cooking experience a more pleasant one with a wide range of features include a number of energy efficient features that can help you reduce your energy bills. 
					</p>
					</div>

					<div class="booking-table">
						<table>
							<tr>
								<td>Date</td>
								<td><input type="date" name="date"></td>
							</tr>

							<tr>
								<td>Time</td>
								<td><input type="time" id="appt4" name="Time" size="40"></td>
							</tr>

							<tr>
								<td>Attendees</td>
								<td><input type="number" id="quantity4" name="quantity" min="1" max="30"></td>
							</tr>

							<tr>
								<td>Tools</td>
								<td>
									<select name="Service" class="custom-select">
										<option value="Food processor">Food processor</option>
										<option value="Microwave">Microwave</option>
										<option value="Dishwasher">Dishwasher</option>
										<option value="Hand blender">Hand blender</option>
										<option value="Mixer Grinder">Mixer Grinder</option>
										<option value="Pressure cooker">Pressure cooker</option>
										<option value="Electric Kettle">Electric Kettle</option>
										<option value="Rice cooker">Rice cooker</option>
									</select>
								</td>
							</tr>
							<td colspan="2"><a class="button_1" onclick="storeitem(['Booking', ' Kitchen Appliances'])">
								<button type="submit" name="button">Enquiry</button>
							</a></td>
						</table>
				</div>
				</div>
			</div>
			</div>
			<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/arrow.png" alt="arrow" style="width:65px;height:65px;"></button>
		</section>
		
		<?php include('include/footer.php'); ?>
	</body>

</html>
	