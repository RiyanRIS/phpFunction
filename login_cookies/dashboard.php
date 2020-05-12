<?php 
session_start();

require_once "authCookieSessionValidate.php";

if(!$isLoggedIn) {
    header("Location: index.php");
}
?>
<link rel="stylesheet" href="style.css">
<div class="member-dashboard">
    You have Successfully logged in!. <a href="logout.php">Logout</a>
</div>