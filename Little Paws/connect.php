<?php

//database connection code

$con = mysqli_connect('localhost:3307', 'root', '','littlepaws');

// get the post records
$Name = $_POST['Name'];
$BName = $_POST['BName'];
$Buddy = $_POST['Buddy'];
$email=$_POST['email'];
$password = $_POST['password'];

// database insert SQL code
$sql = "INSERT INTO credentials(Name, BName, Buddy, email, password) values('$Name', '$BName', '$Buddy', '$email', '$password')";
$rs = mysqli_query($con, $sql);
if($rs)
{
    echo "Contact Records Inserted";
}
else
{
    echo "Are you a genuine visitor?";
	
} 

?>