<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mymoies";

$conn = new mysqli($servername, $username, $password, $database);

//connection checking
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "connected";//return "connected";
}

$sql = "SELECT * FROM `mymovie` WHERE 1";
$query =  mysqli_query($conn, $sql);
 

   
  ?>
   <table border="1">
       <tr>
           <td>serial_no.</td>
           <td>Movies</td>
           <td>leading_actor</td>
           <td>leading_actress</td>
		   <td>Director</td>
		   <td>Date_of_release</td>
       </tr>
       <?php foreach ($query as $rows) {?>
       <tr>
           <td><?php echo $rows['serial_no.'];?></td>
           <td><?php echo $rows['Movies'];?></td>
           <td><?php echo $rows['leading_actor'];?></td>
           <td><?php echo $rows['leading_actress'];?></td>
		   <td><?php echo $rows['Director'];?></td>
		   <td><?php echo $rows['Date_of_release'];?></td>
       </tr>
       <?php }?>
   </table> 
  <?php


?>
