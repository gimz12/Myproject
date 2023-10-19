<?php
include "con.php";
$sql ="SELECT * FROM Cust_info";
$result=mysqli_query($conn,$sql);


echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td>First Name</td> 
          <td>Last Name</td> 
          <td>Email Address</td> 
          <td>Gender</td> 
      </tr>';

      if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $firstname = $row["firstname"];
            $lastname = $row["lastname"];
            $email = $row["email"];
            $gender = $row["gender"];
    
 echo '<tr> 
            <td>'.$firstname.'</td> 
            <td>'.$lastname.'</td> 
            <td>'.$email.'</td> 
            <td>'.$gender.'</td> 
        </tr>';
    }
} 
?> 