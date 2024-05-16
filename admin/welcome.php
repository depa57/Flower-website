<?php
session_start();
 
 if(!isset($_SESSION['login']))
 {
	header("location:signup.php");
 	exit();
 }
include "nav.php";

 

    

?>


<table class="table table-striped" id="myTable">
    <thead>
      <tr>
        <th>Sn</th>
        <th>fNAME</th>
        <th>LNAME</th>
        <th>Address</th>
        <th>Email</th>
		<th>Mobile NO.</th>
		<th>Order</th>
      </tr>
    </thead>
    <tbody>
        <?php
		  include 'connect_sql.php';
          $sql = "SELECT * FROM `orders`";
          $result = mysqli_query($con, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            echo"<tr>
              <td>". $row['id'] ."</td>
              <td>". $row['fname'] ."</td>
              <td>". $row['lname'] ."</td>
              <td>". $row['address'] ."</td>
			  <td>". $row['email'] ."</td>
			  <td>". $row['mobile'] ."</td>
			  <td>". $row['Order_Item'] ."</td>
              </tr>";
          }

        ?>
    </tbody> 
	</table>
	

</html>
