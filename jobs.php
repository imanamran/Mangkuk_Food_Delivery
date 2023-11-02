<!DOCTYPE html>
<html lang='en'>
	<!-- Description: Mangkuk Jobs Page -->
	<!-- Author: Amirul Iman bin Amran -->

	<?php include('include/head.php'); ?>

	<body>
		<?php
			include('include/navigation.php');
			$title='Jobs';
			$file='"images/jobs.jpg"';
			include('include/header.php');
		?>

		<section>
			<div class='taste'>
				<div class="clock">
					<div class="display"></div>
			  </div>
				<h2>Description</h2>
				<p class="desc-pa">Our community ranges from all customers and employees that have contributed to us since the commencement. We are here to give back to the community by offering job opportunities, from chefs to janitors. All these roles are what make Mangkuk a great restaurant. Our purpose is to deliver outstanding and quality services to the community. There are 4 jobs that we offer which are manager, chef, cashier and janitor. A manager plays a vital role in Mangkuk as we are pursuing to be the best franchise in the world. Managers will be responsible for the management of their own restaurant. Inside the kitchen, chefs are responsible for creating smoothies. In the front row, the cashier will have to deal with customers. Janitors will need to ensure that everything in our restaurant is in a neat and clean environment. We prioritized cleanliness and qualities the best we could. Our employees are trained to be professional in a way that customers desire to be treated. On this page, registration forms are available for them to apply for these jobs. If opportunity does not knock, build a door, and here at Mangkuk, we have plenty of doors that we would like to share.  </p>
			</div>
		</section>

		<section>
			<h1 class="sub-delivery">Manager</h1>
				<div id="manager" class="booking-shape-job">
					<div class="clearfix">

						<div class="box-img">
							<img class="booking-pic" alt="background imag" src="images/manager.jpg">
						</div>

						<div class="box">
							<p>
								Managers are the people in charge of employees and the facilities they work for. As a manager, your job is to plan and promote the daily schedule of employees and the business, interview, hire, and coordinate employees, create and maintain budgets, and coordinate with and report to senior management in the company. Leadership skills: You will have to keep your employees motivated, resolve conflicts and make hard decisions for your employees. A successful manager is a good leader. Time Management: You will be working with employees, customers and management. You might have to create schedules, order supplies and write reports. Time management is essential to make sure everything gets done.
							</p>
						</div>
					
						<div class="box-job">
								<div class="apply" style="overflow-x:auto;">
									<table>
										<tr>
											<th id="register-title1" colspan="3">Registration form</th>
										</tr>

										<tr>
											<td>Name:</td>
											<td><input type="text" name="First" placeholder="First" size="20" required="required" id="name1" maxlength="25"></td>
										<td><input type="text" name="Last" placeholder="Last" size="20" required="required" id="name2" maxlength="25"></td>
										</tr>	

										<tr>
											<td>Birth date:</td>
											<td colspan="2"><input type="date" name="date"></td>
										</tr>

										<tr>
											<td>Phone number:</td>
											<td colspan="2"><input type="tel" name="Phone number" placeholder="Phone number" size="40" required="required" id="name3" maxlength="10"></td>
										</tr>

										<tr>
											<td>Start date:</td>
											<td colspan="2"><input type="date" name="date"></td>
										</tr>	

										<tr>
											<td>Resume:</td>
											<td colspan="2" >
												<label for="file-upload1" class="custom-file-upload">
													
													<input type="file" id="file-upload1" name="File" multiple="multiple">File
												</label>
											</td>
										</tr>

										<tr>
											<td colspan="3"><a class="button_1" onclick="storeitem(['Jobs', ' Manager'])">
												<button type="submit" name="button">Enquiry</button>
											</a>
										</td>
										</tr>		
									</table>
								</div>
						</div>	
					</div>
				</div>
		</section>

		<section>
			<h1 class="sub-delivery">Chef</h1>
			<div id="chef" class="booking-shape-job">
				<div class="clearfix">
					<div class="box-img">
						<img class="booking-pic" alt="background imag" src="images/chef.jpg">
					</div>

					<div class="box">
						<p>
							Oversees a restaurant's kitchen by managing other members of the food preparation team, deciding what dishes to serve and adjusting orders to meet guests' requests. Chooses ingredients and designs a menu based on the seasonal availability of food items. Creates unique dishes that inspire guests to come back again and again to see what is new in the restaurant. Cooks guests' orders according to their preferences. Employs food safety best practices and makes sure that all kitchen staff members do the same. Acts with appropriate caution in a dangerous environment where there are knives and high-temperature surfaces
						</p>
					</div>
				
					<div class="box-job">
						<div class="apply" style="overflow-x:auto;">
								<table>
									<tr>
										<th id="register-title2" colspan="3">Registration form</th>
									</tr>

									<tr>
										<td>Name:</td>
										<td><input type="text" name="First" placeholder="First" size="20" required="required" id="name4" maxlength="25"></td>
										<td><input type="text" name="Last" placeholder="Last" size="20" required="required" id="name5" maxlength="25"></td>
									</tr>	

									<tr>
										<td>Birth date:</td>
										<td colspan="2"><input type="date" name="date"></td>
									</tr>

									<tr>
										<td>Phone number:</td>
										<td colspan="2"><input type="tel" name="Phone number" placeholder="Phone number" size="40" required="required" id="name6" maxlength="10"></td>
									</tr>

									<tr>
										<td>Start date:</td>
										<td colspan="2"><input type="date" name="date"></td>
									</tr>	

									<tr>
										<td>Resume:</td>
										<td colspan="2" >
											<label for="file-upload2" class="custom-file-upload">
												
											<input type="file" id="file-upload2" name="File" multiple="multiple">File
										</label>
										</td>
									</tr>
									<tr>
										<td colspan="3"><a class="button_1" onclick="storeitem(['Jobs', ' Chef'])">
											<button type="submit" name="button">Enquiry</button>
										</a>
									</td></tr>		
								</table>
							</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<h1 class="sub-delivery">Cashier</h1>
			<div id="cashier" class="booking-shape-job">
				<div class="clearfix">

					<div class="box-img">
						<img class="booking-pic" alt="background imag" src="images/cashier.jpg">
					</div>


					<div class="box">
						<p>
							A Cashier's primary role is to assist customers in the in-store check-out process. Main duties include ringing up sales, bagging items, requesting price checks, honoring coupons, collecting payment and giving appropriate change. Responsible for counting the contents of cash register drawer at the end of each shift, maintaining receipts, records and withdrawals. May be responsible for checking materials and supplies and reporting when stock is low. May require a high school diploma or its equivalent and 0-2 years of experience in the field or in a related area. Has knowledge of commonly-used concepts, practices and procedures within a particular field.
						</p>
					</div>
				
					<div class="box-job">
						<div class="apply" style="overflow-x:auto;">
								<table>
									<tr>
										<th id="register-title3" colspan="3">Registration form</th>
									</tr>

									<tr>
										<td>Name:</td>
										<td><input type="text" name="First" placeholder="First" size="20" required="required" id="name7" maxlength="25"></td>
									<td><input type="text" name="Last" placeholder="Last" size="20" required="required" id="name8" maxlength="25"></td>
									</tr>	

									<tr>
										<td>Birth date:</td>
										<td colspan="2"><input type="date" name="date"></td>
									</tr>

									<tr>
										<td>Phone number:</td>
										<td colspan="2"><input type="tel" name="Phone number" placeholder="Phone number" size="40" required="required" id="name9" maxlength="10"></td>
									</tr>

									<tr>
										<td>Start date:</td>
										<td colspan="2"><input type="date" name="date"></td>
									</tr>	

									<tr>
										<td>Resume:</td>
										<td colspan="2" >
											<label for="file-upload3" class="custom-file-upload">
												
											<input type="file" id="file-upload3" name="File" multiple="multiple">File
										</label>
										</td>
									</tr>

									<tr>
										<td colspan="3"><a class="button_1" onclick="storeitem(['Jobs', ' Cashier'])">
											<button type="submit" name="button">Enquiry</button>
										</a>
									</td></tr>		
								</table>
							</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<h1 class="sub-delivery">Janitor</h1>
			<div id="janitor" class="booking-shape-job">
				<div class="clearfix">

					<div class="box-img">
						<img class="booking-pic" alt="background imag" src="images/janitor.jpg">
					</div>

					<div class="box">
						<p>
							General cleaning of the building and keeping it maintained and in good condition. Vacuum, sweep, and mop floors. Cleaning and stock restrooms. Ensure doors are locked after hours. Clean up spills with appropriate equipment. Perform minor repairs. Notify supervisors or managers of major repairs. Collect and dispose of trash. Complete tasks in a timely manner with minimal supervision. Keep cleaning supplies in stock. Work with a contract cleaning service when necessary.
						</p>
					</div>
				
					<div class="box-job">
						<div class="apply" style="overflow-x:auto;">
								<table>
									<tr>
										<th id="register-title4" colspan="3">Registration form</th>
									</tr>

									<tr>
										<td>Name:</td>
										<td><input type="text" name="First" placeholder="First" size="20" required="required" id="name10" maxlength="25"></td>
									<td><input type="text" name="Last" placeholder="Last" size="20" required="required" id="name11" maxlength="25"></td>
									</tr>	

									<tr>
										<td>Birth date:</td>
										<td colspan="2"><input type="date" name="date"></td>
									</tr>

									<tr>
										<td>Phone number:</td>
										<td colspan="2"><input type="tel" name="Phone number" placeholder="Phone number" size="40" required="required" id="name12" maxlength="10"></td>
									</tr>

									<tr>
										<td>Start date:</td>
										<td colspan="2"><input type="date" name="date"></td>
									</tr>	

									<tr>
										<td>Resume:</td>
										<td colspan="2" >
											<label for="file-upload4" class="custom-file-upload">
												
											<input type="file" id="file-upload4" name="File" multiple="multiple">File
										</label>
										</td>
									</tr>

									<tr>
										<td colspan="3"><a class="button_1" onclick="storeitem(['Jobs', ' Janitor'])">
											<button type="submit" name="button">Enquiry</button>
										</a>
									</td></tr>		
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
	