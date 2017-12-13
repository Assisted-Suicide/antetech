<?php

$conn = new mysqli('127.0.0.1', 'root', '', 'login');

// Check connection
if (!$conn) {
  die('Connection failed: '.mysqli_connect_error());
}
 ?>