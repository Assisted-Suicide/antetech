<?php
include 'dbh.php';

$uid = $_POST['UID'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM users WHERE user_id='$uid' AND user_pwd='$pwd'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (!$row) {
  echo "Username or password is incorrect!";
} else {
  header("Location: LoggedIn.html");
}
?>