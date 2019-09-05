<?php
	include_once 'dbh.inc.php';

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$number = $_POST['number'];
	$doctor_name = $_POST['doctor_name']; 
	$date = $_POST['date'];

	if($connt->connect_error){
		die('Connection Failed:' .$connt->connection_error);
	} else{
		$stmt = $connt->prepare("insert into registration(firstName,lastName,age,gender,number,doctor_name,date)
			value(?,?,?,?,?,?,?)");
		$stmt->bind_param("sssssss",$firstName,$lastName,$age,$gender,$number,$doctor_name,$date);
		$stmt->execute();

		
		// echo "Registration Successful";
		$stmt->close();
		$connt->close();
	}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
           <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> 
	<title>Appointment Successful</title>
</head>
<body background="image.jpg">
	<br /><br />  
           <div class="container" style="width:900px;">  
           	<div class="panel panel-danger">
           	<div class="panel-heading text-center"><h2 align="center">Appointment Successful</h2>  
            </div>
        </div>
                
                               
             <div style="clear:both"></div>                 
                <br />  
            <div align="center">
            	<a href = "view.php"><button class="btn btn-danger">View Details</button></a>
            </div>   
            <br /> 
            <div align="center">
            	<a href = "index2.php"><button class="btn btn-danger">Go Back</button></a>
            </div> 
            <br /> 
            <div align="center">
            	<a href = "index3.php"><button class="btn btn-danger">Go To Doctor's List</button></a>
            </div> 
  					
                
                               
                 

</body>
</html>
