<?php 

// database connection
define('DB_DRIVER', 'mysql');
define('DB_SERVER', 'mysql.hostinger.com.br');
define('DB_SERVER_USERNAME', 'u636977446_an');
define('DB_SERVER_PASSWORD', 'dleite');
define('DB_DATABASE', 'u636977446_an');

// site URL and facebook credentials
define("APP_ID", "1692271104370843");
define("APP_SECRET", "dd8620c2cd8e38b6b30ebed7c708a13e");
/* make sure the url end with a trailing slash */
define("SITE_URL", "http://www.anunciadoria.pe.hu");
/* the page where you will be redirected after login */
define("REDIRECT_URL", SITE_URL."index.php");
/* Email permission for fetching emails. */
define("PERMISSIONS", "email");

// create a facebook object
$facebook = new Facebook(array('appId' => APP_ID, 'secret' => APP_SECRET));
$userID = $facebook->getUser();

// Login or logout url will be needed depending on current user login state.
if ($userID) {
  $logoutURL = $facebook->getLogoutUrl(array('next' => SITE_URL . 'index.php'));
} else {
  $loginURL = $facebook->getLoginUrl(array('scope' => PERMISSIONS, 'redirect_uri' => REDIRECT_URL));
}

?>
