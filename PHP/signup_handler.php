<?php
session_start();
include 'dbh.php';

$uid = mysqli_real_escape_string($conn, $_POST['new_UID']);
$pwd = md5($_POST['new_pwd']);
$email = mysqli_real_escape_string($conn, $_POST['new_email']);

  $sql = "SELECT * FROM users WHERE uid = '$uid' OR email = '$email'";
  //$sql = "INSERT INTO users (uid, pwd, email) VALUES ('$uid', '$pwd', '$email')";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

if ($row['uid'] or $row['email']) {
echo "You can't use that username and/or password!";
session_destroy();
} else {
  $sql = "INSERT INTO users (uid, pwd, email) VALUES ('$uid', '$pwd', '$email')";
  $result = mysqli_query($conn, $sql);
  $_SESSION['logged'] = $uid;
  header('Location: \downloads.html');
}
 ?>