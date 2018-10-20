<?php
$servername="localhost";
$username="root";
$password="";
$db="onlinestore";

//create connection
$con=mysqli_connect($servername,$username,$password,$db);

//check connection
if(!$con){
			die("Connection Failed:" .mysqli_connect_error());
			}
			
?>