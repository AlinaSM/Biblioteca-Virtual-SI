<?php
require_once('app/Controllers/Autoload.php');
$autoload = new Autoload();


if(isset($_GET['t'])){
    echo $_GET['p'];
    $route =  !isset($_GET['p']) && $_GET['p'] == 'login'? 'login' : $_GET['p'] ;
    $page = new Router( $route );
}else{
    header('Location: page/login');
}

?>