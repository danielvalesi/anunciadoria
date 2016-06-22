<?php 
session_start();
require_once("src/facebook.php");
require_once("src/config.php");

$facebook = new Facebook($config);
$facebook_id = $facebook->getUser();

// $datos = $facebook->api("/me");

if ($facebook_id!=0){
	// conectar no banco de dados
	$mysqli= new mysqli($server, $user, $pass, $bd);
	
	// verificar se o usuario ja existe
	$query = $mysqli->query("SELECT * FROM usuarios WHERE facebook_id='$facebook_id'");
	
	if ($query->num_rows>0){
		//o usuario existe
		$datos = $facebook->api("/me");
		//var_dump($datos);
		
		// obtendo dados do usuario no mysql
		$datos=$query->fetch_array(MYSQLI_ASSOC);
		
		// iniciar sessão
		$_SESSION["facebook_id"]=$facebook_id;
		$_SESSION["username"]=$datos["username"];
		$_SESSION["email"]=$datos["email"];
		
	} else {
		// o usuario nao existe
		
		// obtendo dados do usuario
		$datos = $facebook->api("/me");
		$username = $datos["username"];
		$genero = $datos["genrer"];
		$email = $datos["email"];
		
		// Inserindo na base de dados
		$insert_user = $mysqli->query ("INSERT INTO usuarios (facebook_id, username, email, genero) VALUES ('$facebook_id','$username','$email','$genero')");
		
		// iniciar sessão
		$_SESSION["facebook_id"]=$facebook_id;
		$_SESSION["username"]=$username;
		$_SESSION["email"]=$email;
	}
} 
header ("Location:index.php");

?>





