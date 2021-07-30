<?php 


function registrasi($data){
	$conn = mysqli_connect("localhost", "root", "", "dbuser");
	$username = strtolower(stripcslashes(($data["username"])));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	if(mysqli_fetch_assoc($result)){

		return false;
	}

	if($password !== $password2){

		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);
	$query = "INSERT INTO user VALUES ('', '$username', '$password')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

 ?>