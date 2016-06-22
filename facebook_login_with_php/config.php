<?php
include_once("inc/facebook.php"); //include facebook SDK
######### Facebook API Configuration ##########
$appId = '1692271104370843'; //Facebook App ID
$appSecret = 'dd8620c2cd8e38b6b30ebed7c708a13e'; // Facebook App Secret
$homeurl = 'http://anunciadoria.pe.hu/facebook_login_with_php/';  //return to home
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret

));
$fbuser = $facebook->getUser();
?>
