<?php
require_once('app/Controllers/Autoload.php');
$autoload = new Autoload();


if(isset($_GET['t'])){
    $route =  isset($_GET['r']) ? 'login' : $_GET['r'] ;
    $page = new Router( $route );
}else{
    header('Location: page/login');
}

?>