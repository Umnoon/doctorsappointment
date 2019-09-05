<?php
	include_once 'dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
           <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> 

<body background="image.jpg">

<br /><br />  
           <div class="container" style="width:900px;">  
           	<div class="panel panel-danger">
           	<div class="panel-heading text-center">
                <h2 align="center">Appointment Details</h2>  
            </div>
        </div>
            <div style="clear:both"></div>                 
            <br />  


	<table class="table table-dark">
  <thead>
    <tr>
    	<th scope="col">Serial#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Doctor's Name</th>
      <th scope="col">Appointment Date</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
	<?php

		$sql2 = "SELECT * FROM registration ORDER BY serial DESC LIMIT 1";
		$result2 = mysqli_query($connt,$sql2);
		$resultcheck2 = mysqli_num_rows($result2);

		if($resultcheck2>0){
			while($row = mysqli_fetch_assoc($result2)) {
				 echo "<tr><td>" . $row["serial"]. "</td><td>" . $row["firstName"].  "</td><td>" . $row["lastName"]."</td><td>" . $row["age"]. "</td><td>" . $row["gender"]. "</td><td>".$row["number"]. "</td><td>" . $row["doctor_name"]. "</td><td>" . $row["date"]."</td>";
         echo "<td><a href=delete.php?id=".$row['serial'].">CLICK</a></td>";
         
         "</tr>";
			}
		}

	?>
</tbody>
</table>

</body>
</html>
