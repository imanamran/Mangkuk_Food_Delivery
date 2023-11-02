<?php
 
	require('db.php');
	include("auth.php");
	$id=$_REQUEST['id'];
	$query = "SELECT * from enquiry where id='".$id."'"; 
	$result = mysqli_query($con, $query) or die ( mysqli_error());
	$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
	<?php include('../include/admin_head.php'); ?>

	<body>
		<?php include('../include/admin_navigation.php'); ?>
		<br>
		<br>
		<br>
		
		<h1 class="desc-h1">Edit</h1>
		<div class="form">

		<?php
			$status = "";
			if(isset($_POST['new']) && $_POST['new']==1)
			{
			$id=$_REQUEST['id'];
			$trn_date = date("Y-m-d H:i:s");
			$fname=$_REQUEST["first_name"];
			$lname=$_REQUEST["last_name"];

			$email=$_REQUEST["email"];
			$street_add=$_REQUEST["street_address"];
			$city_t=$_REQUEST["city_town"];
			$state=$_REQUEST["state"];
			$pcode=$_REQUEST["postcode"];
			$pnum=$_REQUEST["phone_num"];
			$subj=$_REQUEST["subject"];
			$desc=$_REQUEST["description"];

			$update="update enquiry set first_name='".$fname."', last_name='".$lname."', email='".$email."', street_address='".$street_add."', city_town='".$city_t."', state='".$state."', postcode='".$pcode."', phone_num='".$pnum."', subject='".$subj."', description='".$desc."' where id='".$id."'";

			mysqli_query($con, $update) or die(mysqli_error());

			$status = "Record Updated Successfully. </br></br><a href='management.php'>View Updated Record</a><br><br>";
			echo '<p style="color:#FF0000;">'.$status.'</p>';
			}else {
		?>

		<section>
			<div>
				<div class="form-wrapper">
					<div class="enquiry-form">
						<form name="form" method="post" action=""> 
							<input type="hidden" name="new" value="1" />
							<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
							<table>
								<tr>
									<td>
										First Name:
									</td>
									<td>
										<p>
											<input type="text" name="first_name" placeholder="Enter Name" required value="<?php echo $row['first_name'];?>" />
										</p>
									</td>
								</tr>

								<tr>
									<td>
										Last name:
									</td>

									<td>
										<p>
											<input type="text" name="last_name" placeholder="Enter Age" required value="<?php echo $row['last_name'];?>" />
										</p>
									</td>
								</tr>

								<tr>
									<td>
										E-mail:
									</td>

									<td>
										<p>
											<input type="text" name="email" placeholder="Enter Age" required value="<?php echo $row['email'];?>" />
										</p>
									</td>
								</tr>

								<tr>
									<td>
										Street address:
									</td>

									<td>
										<p>
											<input type="text" name="street_address" placeholder="Enter Age" required value="<?php echo $row['street_address'];?>" />
										</p>
									</td>
								</tr>

								<tr>
									<td>
										City/town:
									</td>

									<td>
										<p>
											<input type="text" name="city_town" placeholder="Enter Age" required value="<?php echo $row['city_town'];?>" />
										</p>
									</td>
								</tr>

								<tr>
									<td>
										State:
									</td>

									<td>
										<p>
											<input type="text" name="state" placeholder="Enter Age" required value="<?php echo $row['state'];?>" />
										</p>
									</td>
								</tr>

								<tr>
									<td>
										Postcode:
									</td>

									<td>
										<p>
											<input type="text" name="postcode" placeholder="Enter Age" required value="<?php echo $row['postcode'];?>" />
										</p>
									</td>
								</tr>

								<tr>
									<td>
										Phone number:
									</td>

									<td>
										<p>
											<input type="text" name="phone_num" placeholder="Enter Age" required value="<?php echo $row['phone_num'];?>" />
										</p>
									</td>
								</tr>

								<tr>
									<td>
										Subject:
									</td>

									<td>
										<p>
											<input type="text" name="subject" placeholder="Enter Age" required value="<?php echo $row['subject'];?>" />
										</p>
									</td>
								</tr>

								<tr>
									<td>
										Description:
									</td>

									<td>
										<p>
											<input type="text" name="description" placeholder="Enter Age" required value="<?php echo $row['description'];?>" />
										</p>
									</td>
								</tr>

								<tr>
									<td colspan="2">
										<p><input name="submit" type="submit" value="Update" /></p>
									</td>
								</tr>

							</table>
						</form>
					<?php } ?>
				</div>
			</div>

				</div>
			</div>
		</section>

		<?php include('../include/footer.php'); ?>
	</body>
</html>
