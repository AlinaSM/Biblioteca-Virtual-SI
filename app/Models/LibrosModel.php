<?php

class LibrosModel extends Model{
    private $id;
    private $titulo;
    private $dir_pdf;
    private $autor;
    private $dir_portada;
    private $Categoria_id;


    public function create( $usuario_data = array() ){
        foreach($usuario_data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }

        $this->query = "INSERT INTO libros (titulo, dir_pdf, autor, dir_portada, Categoria_id)
                        VALUES ($titulo, $dir_pdf, $autor, $dir_portada, $Categoria_id );";

        $this->setQuery();
    }
/*
    public function getArticuloById($id){
        $consulta = $this->db->query("SELECT * FROM articulos WHERE id='$id';");
        while($tupla = $consulta->fetch(PDO::FETCH_ASSOC)){
            return $tupla;
        }
        if(!$tupla){
            return false;
        } 
    }
*/
    public function read(  $id = '' ){
        $this->query =  $id != '' 
                        ? "SELECT * FROM libros WHERE id = $id;" 
                        : "SELECT * FROM libros;";
        $this->getQuery();

        return $this->rows;
    }

    public function readByTitulo(  $titulo ='' ){
        $this->rows = null;
        $this->query =  "SELECT * FROM libros WHERE titulo like '%$titulo%';";
        $this->getQuery();

        //return $this->rows;
        $arr = array();
        
		foreach ($this->rows as $key => $value) {
			array_push($arr, $value);
		}
		return $arr;
    }

    public function readByCategoria(  $categoria ){
        $this->rows = null;
        $this->query =  "SELECT * FROM libros WHERE Categoria_id = $categoria;";
        $this->getQuery();

        $arr = array();
        
		foreach ($this->rows as $key => $value) {
			array_push($arr, $value);
		}
		return $arr;

        //return $this->rows;
    }

    public function readListadoCategorias( $categoria ='' ){
        $this->query =  $categoria != '' 
                        ? "SELECT * FROM categoria WHERE categoria = $categoria;" 
                        : "SELECT * FROM categoria;";
        $this->getQuery();

        $data = array();
        
		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}
		return $data;

        //return $this->rows;
    }

    public function update( $usuario_data = array() ){
        foreach($usuario_data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }

        $this->query = "UPDATE libros SET titulo = $titulo, dir_pdf = $dir_pdf, autor = $autor, 
                        dir_portada = $dir_portada, Categoria_id = $Categoria_id WHERE id = $id";

        $this->setQuery();
    }

    public function delete( $id = '' ){
        $this->query = "DELETE FROM libros WHERE id = $id";
        $this->setQuery();
    }

    


}