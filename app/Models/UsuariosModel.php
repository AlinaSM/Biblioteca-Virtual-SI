<?php

class UsuariosModel extends Model{
    private $id;
    private $alias;
    private $nombre;
    private $apellidos;
    private $fecha_nac;
    private $contrasena;
    private $email;
    private $tipo;


    public function create( $usuario_data = array() ){
        foreach($usuario_data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }

        $this->query = "INSERT INTO usuarios(id, alias, nombre, apellidos, fecha_nac, contrasena, email, tipo) 
                        VALUES ($id, '$alias', '$nombre', '$apellidos', '$fecha_nac', MD5('$contrasena'), '$email', '$tipo')";

        $this->setQuery();
    }

    public function read( $id_usuario ='' ){
        $this->query =  $id_usuario != '' 
                        ? "SELECT * FROM usuarios WHERE id = $id_usuario;" 
                        : "SELECT * FROM usuarios;";
        $this->getQuery();

        return $this->rows;
    }

    public function update( $usuario_data = array() ){
        foreach($usuario_data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }

        $this->query = "UPDATE usuarios SET id = $id, alias = '$alias', 
                        nombre = '$nombre', apellidos = '$apellidos', fecha_nac = '$fecha_nac', 
                        contrasena = MD5('$contrasena'), email = '$email', tipo = '$tipo' WHERE id = $id";

        $this->setQuery();
    }

    public function delete( $id = '' ){
        $this->query = "DELETE FROM usuarios WHERE id = $id";
        $this->setQuery();
    }

    public function validate( $username = '', $password = '' ){
        $this->query =  "SELECT * FROM usuarios WHERE alias = '$username' AND contrasena = MD5('$password');";
        $this->getQuery();

        $data = array();
        
		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}
		return $data;

        
    }

}