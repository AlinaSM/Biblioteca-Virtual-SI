<?php

class ViewController{
    private static $view_path = './app/Views/';

    public function loadView( $view ){
            require_once(self::$view_path .'head.php');
            require_once(self::$view_path . 'header.php');
            require_once(self::$view_path . $view . '.php');
            require_once(self::$view_path . 'footer.php');
    }

}