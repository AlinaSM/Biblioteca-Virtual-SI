<?php

class LibrosController{
    private $model;

    public function __construct(){
        $this->model = new LibrosModel();
    }

    public function create( $data = array() ){
        return $this->model->create($data);
    }

    public function read( $id = '' ){
        return $this->model->read($id);
    }

    public function update( $data = array() ){
        return $this->model->update($data);
    }

    public function delete( $id = '' ){
        return $this->model->delete($id);
    }

    public function readByTitulo( $titulo = '' ){
        return $this->model->readByTitulo($titulo);
    }

    public function readByCategoria(  $categoria ){
        return $this->model->readByCategoria($categoria);
    }

    public function readListadoCategorias( $categoria ='' ){
        return $this->model->readListadoCategorias($categoria);
    }

}