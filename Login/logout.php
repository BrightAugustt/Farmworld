<?php
session_start();
session_unset();
session_write_close();
$url = "login.php";
header("Location: $url");

?>