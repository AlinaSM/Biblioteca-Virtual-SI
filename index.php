<?php
require_once('app/Controllers/Autoload.php');
$autoload = new Autoload();

$route =  isset($_GET['r']) ? 'login' : $_GET['r'] ;
$gro_cultural = new Router( $route );

?>