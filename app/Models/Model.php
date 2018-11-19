<?php

//Clase abstracta que nos permitira conectarnos a MySQL mediante PDO
abstract class Model{
    private static $db_option_charset = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

    private $cnn;
    protected $query;
    protected $rows = array();

    // Metodos abstractos para el CRUD que hereden
    abstract protected function create();
    abstract protected function read();
    abstract protected function update();
    abstract protected function delete();

    //Metodo privado para conectarno a la base de datos
    private function dbOpen(){
        try{
            $this->cnn =  new PDO("mysql:host=localhost;dbname=dbBibliotecaVirtual","root","", self::$db_option_charset);
            $this->cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(Exception $e){
            echo "El error se produjo: ".$e->getLine();
        }
    }

    //Metodo para ejecutar una consulta que afecte datos INSERT, DELETE o UPDATE
    protected function setQuery(){
        $this->dbOpen();
        $this->cnn->query($this->query);
    }

    //Metodo que obtenga los datos de una consulta SELECT 
    protected function getQuery(){
        $this->dbOpen();
        $result = $this->cnn->query($this->query); //$this->query
        
        while( $this->rows[] = $result->fetch(PDO::FETCH_ASSOC) );
        $result = null;

        return array_pop($this->rows);
    }


}