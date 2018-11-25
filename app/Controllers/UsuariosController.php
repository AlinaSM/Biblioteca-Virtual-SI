<?php

class UsuariosController{
    private $model;

    public function __construct(){
        $this->model = new UsuariosModel();
    }

    public function create( $usuario_data = array() ){
        return $this->model->create($usuario_data);
    }

    public function read( $id_usuario ='' ){
        return $this->model->read($id_usuario);
    }

    public function update( $usuario_data = array() ){
        return $this->model->update($usuario_data);
    }

    public function delete( $id = '' ){
        return $this->model->delete($id_usuario);
    }

    public function validate( $username = '', $password = '' ){
        return $this->model->validate( $username, $password );
    }
}