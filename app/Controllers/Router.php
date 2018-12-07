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

                case 'home':
                    $frm->loadView('home');
                break;


                case 'profile-user':
                    $frm->loadView('profile-user');
                break;
                
                case 'ver-libro':
                if(isset($_POST['idLibro'])){
                    $idLibro = $_POST['idLibro'];
                    $frm->loadView('ver-libro');
                 }else {
                    //$frm->loadView('ver-libro');
                 }
                    
                break;

                case 'buscador':
                    $frm->loadView('buscador');
                break;
                
                case 'buscadorcategoria':
                    if(isset($_GET['valor'])){
                        echo "Hola";
                    } else if( !isset($_POST['cat']) ) $frm->loadView('buscadorcategoria');
                    else if( $_POST['cat'] ){
                        $frm->loadView('buscadorcategoria');
                    }
                     
                    
                break;


            }

        }
    }

}