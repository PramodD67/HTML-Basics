<?php

$Email = $_POST['Email'];
$Password = filter_input(INPUT_POST, 'Password');

if (!empty($Email)){
if (!empty($Password)){
    $host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "myfirstwebsite";
}

//Create Connection

$conn = new mysqli($host, $dbusername,$dbpassword,$dbname);

if (mysqli_connect_error()){
	die("Connect Error ('.mysqli_connect_errno().')'
	.mysqli_connect_error()
else {
	$sql = "INSERT INTO account(Email , Password) values('$Email' , '$Password')";
}
		
			if ($conn->query($sql)){
		echo "New record inserted succesfully";
		

			}
			else {
				echo "Error: ".$sql ."<br> . $conn->error;
			}
	$conn=>close();

}
	
else{
	echo "Password should not be empty";
	die();
}

else{
	echo "Email should not be empty";
	die();
}
?>
	