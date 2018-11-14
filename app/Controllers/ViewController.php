<?php

class ViewController{
    private static $view_path = './App/Views/';

    public function loadView( $view ){
            require_once(self::$view_path .'Head.php');
            require_once(self::$view_path . 'Header.php');
            require_once(self::$view_path . $view . '.php');
            require_once(self::$view_path . 'Footer.php');
    }

}