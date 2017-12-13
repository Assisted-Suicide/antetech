<?php
session_start();
include 'dbh.php';

$uid = $_POST['UID'];
$pwd = md5($_POST['pwd']);

$sql = "SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (!$row) {
  echo "Username or password is incorrect!";
} else {
  $_SESSION['logged'] = $uid;
  header("Location: \downloads.html");
}
?>