
<?php
//logout.php -- Log out clear session and go back to login
session_start();
unset($_SESSION['username']);
header('Location: index.html');
?>