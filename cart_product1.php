<?php
session_start();
$servername = "localhost";
$username = "a0434";
$password = "pwd0434";
$database = "a0434";

$conn = new mysqli($servername, $username, $password, $database);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("連接失敗: " . $conn->connect_error);
}


$sql = "INSERT INTO `" . $_SESSION['mid'] . "` (`name`, `price`) VALUES ('一級能效變頻冷暖分離式冷氣', '22500');";
$result = $conn->query($sql);


$conn->close();

header("location:cart1.php");
?>
