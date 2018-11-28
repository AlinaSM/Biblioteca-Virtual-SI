<?php

class Router{
    public $route;

    public function __construct($route){

        $session_options = array(
			'use_only_cookies' => 1,
			//'auto_start' => 1,
			'read_and_close' => true
        );
        
        if( !isset( $_SESSION ) )  session_start( $session_options );
        if( !isset( $_SESSION['ok'] ) ) $_SESSION['ok'] = false;

        if( $_SESSION['ok'] ){

        }else{
            $frm = new ViewController();
            $userController = new UsuariosController(); 

            switch($route){
                case 'login':
                    $frm->loadView('login');
                break;

                case 'users':
                    
                    if( !isset($_POST['r']) ) $frm->loadView('dat-user');
                    
                    else if ( $_POST['r'] == 'profile-user') {
                        $frm->loadView('profile-user');
                    }
                    else if ( $_POST['r'] == 'validate-user' && $row = $userController->validate( $_POST['username'], $_POST['password'] )){
                        header('Location: home');
                    }else{
                        header('Location: failed-login');
                    }
                break;

                case 'profile-user':
                    $frm->loadView('profile-user');
                break;
                
                case 'ver-libro':
                    $frm->loadView('ver-libro');
                break;
                

            }

        }
    }

}