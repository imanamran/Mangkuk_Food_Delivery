<?php
 
require('db.php');
include("auth.php");
?>

<!DOCTYPE html>
<html lang='en'>
  <!-- Description: Mangkuk Enquiry Page -->
  <!-- Author: Amirul Iman bin Amran -->

  <?php include('../include/admin_head.php'); ?>

  <body>
    <?php include('../include/admin_navigation.php'); ?>

    <?php require('admin_del.php'); ?>

    <header>
      <div class='container'>
        <img alt="background imag" class="background-image" src="../images/enquiry.jpg"    >
        <div class="welcome-wrapper">
          <div class='service-topic'>View</div>
        </div>
      </div>
    </header>

    <section>
      <br>
      <br>
      <div class="form-wrapper">
        <div class="view-table">
          <div style="overflow-x:auto;">
            <table id="view" width="100%" border="1" style="border-collapse:collapse;">
        
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>E-mail</th>
                  <th>Street address</th>
                  <th>City/town</th>
                  <th>State</th>
                  <th>Postcode</th>
                  <th>Phone number</th>
                  <th>Subject</th>
                  <th>Description</th>
                  <th>Time</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
              <?php
              $count=1;

              $sel_query= "SELECT id, first_name, last_name, email, street_address, city_town, state, postcode, phone_num, subject, description, reg_date FROM enquiry";

              $result = mysqli_query($con,$sel_query);

              while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                  <td align="center"><?php echo $row["id"]; ?></td>
                  <td align="center"><?php echo $row["first_name"] . " " . $row["last_name"]; ?></td>
                  <td align="center"><?php echo $row["email"]; ?></td>
                  <td align="center"><?php echo $row["street_address"]; ?></td>
                  <td align="center"><?php echo $row["city_town"]; ?></td>
                  <td align="center"><?php echo $row["state"]; ?></td>
                  <td align="center"><?php echo $row["postcode"]; ?></td>
                  <td align="center"><?php echo $row["phone_num"]; ?></td>
                  <td align="center"><?php echo $row["subject"]; ?></td>
                  <td align="center"><?php echo $row["description"]; ?></td>
                  <td align="center"><?php echo $row["reg_date"]; ?></td>
                  <td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>" class="edit">Edit</a>
                    <br>
                    <br>
                    <a href="delete.php?id=<?php echo $row["id"]; ?>" class="delete">Delete</a></td>
                </tr>

                <?php $count++; } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <?php include('../include/footer.php'); ?>
  </body>
</html>