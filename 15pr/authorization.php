<?php
include "connect.php";
$login = $_GET['login'];
$password = $_GET['password'];
$sqlselect = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
$result = $conn -> query($sqlselect);
if ($result) {
    while ($row = $result->fetch_object()) {
        if ($row -> is_admin) {
            header("Location: admin.html");
        }
    }
}
?>