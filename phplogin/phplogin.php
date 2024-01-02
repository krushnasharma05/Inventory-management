<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
include 'dbconnection.php';
$name = $_POST["username"];
$password = $_POST["password"];
$sql =  "SELECT * FROM `admin` where username='$name'";
$result = mysqli_query($conn, $sql);
$numRows = mysqli_num_rows($result);
if ($numRows == 1) {
$row = mysqli_fetch_assoc($result);
if ($password == $row['Password']) {
$username = $row['username'];
$name = $row['name'];
session_start();
$_SESSION['loggedin'] = true;
$_SESSION['username'] = $username;
$_SESSION['name'] = $name;
}
else {           header("Location:Login.php?login=fail");
echo "Password is wrong";
exit();
}
header("Location:Dashboard.php?login=success");
exit();
} else {
header("Location:Login.php?login=fail");
echo "username not found";
exit();
}
mysqli_close($conn);
}

