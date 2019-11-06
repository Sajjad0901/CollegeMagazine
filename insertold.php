<?php

$servername= "localhost";
$username="root";
$password = "";
$dbname= "test";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

$conn=new mysqli($servername ,$username,"",$dbname);
if($conn->connect_error)
{
	echo "Failed";
	die("connect Error".$conn->connect_error);
} else{
$sql= "INSERT INTO register (firstname,lastname,email,password,confirmpassword ) values('$firstname','$lastname','$email','$password','$confirmpassword')";
if ($conn->query($sql)==TRUE)
{
echo "New data inserted successfully";
header("Location: sign-in.html"); 

} else {
	echo "error:".$sql."<br>".$conn->error;
}
}

$conn->close();
?>
			
	