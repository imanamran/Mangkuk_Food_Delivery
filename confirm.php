<!DOCTYPE html>
<html lang='en'>
	<!-- Description: Mangkuk Enquiry Page -->
	<!-- Author: Amirul Iman bin Amran -->

	<?php include('include/head.php'); ?>

	<body>
		<?php
			include('include/navigation.php');
			$title='Confirmation';
			$file='"images/enquiry.jpg"';
			include('include/header.php');

	    	//get the value from enquiry.php
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
    	?>

    	<section>
	    	<h1 class="desc-h1">Confirmation</h1>

	    	<div class="form-wrapper">
				<div class="confirm-form">
			    	<form id="bookform" method="post" action="enquiry_process.php">
			    	<!--keep the value as hidden-->
			    	<!--so this value can pass to process.php-->
				        <input type="hidden" name="first_name" value="<?php echo $fname; ?>">
				        <input type="hidden" name="last_name" value="<?php echo $lname; ?>">
				        <input type="hidden" name="email" value="<?php echo $email; ?>">
				        <input type="hidden" name="street_address" value="<?php echo $address; ?>">
				        <input type="hidden" name="city_town" value="<?php echo $city_town; ?>">
				        <input type="hidden" name="state" value="<?php echo $state; ?>">
				        <input type="hidden" name="postcode" value="<?php echo $postcode; ?>">
				        <input type="hidden" name="phone_num" value="<?php echo $phone_num; ?>">
				        <input type="hidden" name="subject" value="<?php echo $subject; ?>">
				        <input type="hidden" name="description" value="<?php echo $desc; ?>">

				        <fieldset>
				        	<table>
				        		<tr>
				        			<td colspan="2">Details</td>
				        		</tr>
					            <tr>
					            	<td>First Name</td>
					            	<td>: <?php echo $fname; ?><span id="confirm_fname"></span></td>
					            </tr>
					            <tr>
					            	<td>Last Name</td>
					            	<td>: <?php echo $lname; ?><span id="confirm_lname"></span></td>
					            </tr>
					            <tr>
					            	<td>Email</td>
					            	<td>: <?php echo $email; ?><span id="confirm_email"></span></td>
					            </tr>
					            <tr>
					            	<td>Street address</td>
					            	<td>: <?php echo $address; ?><span id="confirm_address"></span></td>
					            </tr>
					            <tr>
					            	<td>City/town</td>
					            	<td>: <?php echo $city_town; ?><span id="confirm_city_town"></span></td>
					            </tr>
					            <tr>
					            	<td>State</td>
					            	<td>: <?php echo $state; ?><span id="confirm_state"></span></td>
					            </tr>
					            <tr>
					            	<td>Postcode</td>
					            	<td>: <?php echo $postcode; ?><span id="confirm_postcode"></span></td>
					            </tr>
					            <tr>
					            	<td>Phone number</td>
					            	<td>: <?php echo $phone_num; ?><span id="confirm_phonenum"></span></td>
					            </tr>
					            <tr>
					            	<td>Subject</td>
					            	<td>: <?php echo $subject; ?><span id="confirm_subject"></span></td>
					            </tr>
					           <tr>
					           	<td>Description</td>
					           	<td>: <?php echo $desc; ?><span id="confirm_desc"></span></td>
					           </tr>
					            <!--Here I only confirm three but you have to confirm all content-->
					            <!--Create the rest of the data output here -->
						        <tr>
						            <td><input type="button" value="Cancel" id="cancelButton" onclick="cancelBooking()"></td>
						            <td><input type="submit" value="Confirm"></td>
						        </tr>
					        </table>
				        </fieldset>
			    	</form>
			    </div>
			</div>
		</section>

		<?php include('include/footer.php'); ?>
	</body>
</html>