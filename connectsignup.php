<?php
 $firstname = filter_input(INPUT_POST, 'firstname');
 $lastname = filter_input(INPUT_POST, 'lastname');
 $email = filter_input(INPUT_POST, 'email');
 $password = filter_input(INPUT_POST, 'password');
 $confirmpassword = filter_input(INPUT_POST, 'confirmpassword');
 if (!empty($firstname)){
	if (!empty($lastname)){
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "nightclub";
	// Create connection
	$conn	= new mysqli ($host, $dbusername, $dbpassword, $dbname);
		if (mysqli_connect_error()){
		die('Connect Error ('. mysqli_connect_errno() .') '
		. mysqli_connect_error());
		}
		else{
		if ($_POST["password"] == $_POST["confirmpassword"]) {
		$sql = "INSERT INTO users (firstname, lastname, email, password, confirmpassword)
		values ('$firstname','$lastname','$email','$password','$confirmpassword')";
		}
		else {
		echo "Password not matching";
		die();
		}
			if ($conn->query($sql)){
			echo "New record is inserted sucessfully";
			}
			else{
			echo "Error: ". $sql ."
			". $conn->error;
			}
			$conn->close();
		}
	}
}


function confirm(){
if ($_POST["password"] == $_POST["confirmpassword"]) {
}
else {
   echo "Password not matching";
}
}
?>