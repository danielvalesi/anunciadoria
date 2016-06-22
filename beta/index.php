<?php
if(!isset($_COOKIE['test'])) setcookie('test',1,time()+2592000,'/','http://www.anunciadoria.pe.hu/');

header('Location: http://www.anunciadoria.pe.hu/');
?>
