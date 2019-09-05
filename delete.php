<?php

include_once 'dbh.inc.php';

mysqli_select_db($connt,"doctorappointment");
$sql="DELETE FROM registration WHERE serial='$_GET[id]'";
if(mysqli_query($connt,$sql))
header("refresh:1; url=index.php");
?>
