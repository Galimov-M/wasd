<?php
	include "connect.php";
	if (!$conn) {
		die("Conn failed " . mysqli_connect_error());
	}

	$surname =$_GET["surname"];
	$email =$_GET["email"];
	$password = $_GET["password"];
	$login = $_GET["login"];
	$select = "SELECT login FROM users WHERE login = '$login'";
	$result = $conn -> query($select);
	$sql = "INSERT INTO users (surname, login, email, password) VALUES ('$surname', '$login', '$email', '$password')";
	if ($result) {
		echo $result;
	}
	// if($conn->query($sql)){
	// 	echo "Данные успешно добавлены";
	// 	header('Location: Person.html' );
	// } else{
	// 	echo "Ошибка: " . $conn->error;
	// }
	// $conn->close();

	



?>