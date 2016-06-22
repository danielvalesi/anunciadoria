<?php 
session_start();

// iniciar sessão
$_SESSION["facebook_id"]=null;
$_SESSION["username"]=null;
$_SESSION["email"]=null

session_destroy();

header("Location:index.php");

 ?>
