<?php 

	session_start();
	
	if (empty($_SESSION["facebook_id"])) {

		require_once("src/facebook.php");
		require_once("src/config.php");

		$facebook = new Facebook($config);
		$params = array (
		    'scope' => 'email',
		    'redirect_url' => 'http://www.anunciadoria.pe.hu/facebooklogin/registro.php'
		);

		$loginUrl = $facebook->getLoginUrl($params);
		
?>

<a href="<?php echo $loginUrl; ?>">Login com Facebook</a>

<?php 

	} else {
		?>
		<a href="sair.php">Sair</a>
		<?php 
		echo "Olá ".$_SESSIO["username"];
	}

?>
