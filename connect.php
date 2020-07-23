<?php
 
 if (isset($_POST["submit1"])) {
 	$con =mysqli_connect("localhost","root","");
 	mysqli_select_db($con,"store");
 	$result =  mysqli_query($con,"insert into mydata values('$_POST[name]','$_POST[message]','$_POST[findus]','$_POST[email]')");
 }

?>