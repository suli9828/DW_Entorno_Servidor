<?php

include_once 'db.php';

class Note{

  private int $id;
  private string $titulo;
  private string $descripcion;

  public function __construct(int $id, string $titulo, string $descripcion){
    $this->id = $id;
    $this->titulo = $titulo;
    $this->descripcion = $descripcion;
  }

  public function getId(){
    return $this->id;
  }
  public function setId(int $id){
    $this->id = $id;
  }

  public function gettitulo(){
    return $this->titulo;
  }
  public function settitulo(int $titulo){
    $this->titulo = $titulo;
  }

  public function getdescripcion(){
    return $this->descripcion;
  }
  public function setdescripcion(int $descripcion){
    $this->descripcion = $descripcion;
  }

}

class NoteTable{

  private string $table = 'nota'; 
  private $conection; 
  private array $listNotes = array(); 

  public function __construct(){}

  /* Métodos */ 
  
  public function getConection(){
    $conn = new DB(); 
    $this->conection = $conn->getConection(); 
  }

  public function getNotes(){
    $this->getConection(); 
    $sql = "SELECT * FROM ". $this->table; 
    $result = $this->conection->query($sql); 
    if($result->num_rows > 0){
      $i = 0;
      while($row = $result->fetch_assoc()){ // Se recorren las filas mientras sigan habiendo.
        $this->listNotes[$i] = new Note($row['id'], $row['titulo'], $row['descripcion']);
        $i++;
      }
    }
    $this->conection->close(); 
    return $this->listNotes; 
  }

  public function getNoteById($id){
    $this->getConection();
    $sql = "SELECT * FROM ". $this->table ." WHERE id=$id"; 
    $result = $this->conection->query($sql); 
    if($result->num_rows > 0){
      $row = $result->fetch_assoc(); 
      $this->conection->close(); 
      return new Note($row['id'], $row['titulo'], $row['descripcion']); // Devuelve un objeto nota con los datos de la BBDD.
    } else { 
      $this->conection->close();
      return false; 
    }
  }

  public function insertNote(string $titulo, string $descripcion){
    $this->getConection(); 
    $sql = "INSERT INTO ". $this->table ." (titulo, descripcion) VALUES ('$titulo', '$descripcion')"; 
    if($this->conection->query($sql) === TRUE){ // Si se inserta correctamente.
      $id = $this->conection->insert_id; 
      $this->conection->close();
      return new Note($id, $titulo, $descripcion); // Devuelve un objeto nota con el último id generado en la bbdd y los atributos dados por el usuario.
    } else { 
      $this->conection->close(); 
      return false; 
    }
  }

  public function updateNote(int $id, string $titulo, string $descripcion){
    $this->getConection(); 
    $sql = "UPDATE ". $this->table ." SET titulo='$titulo', descripcion='$descripcion' WHERE id=$id";
    if($this->conection->query($sql) === TRUE){ // Si se actualiza correctamente.
      $this->conection->close(); 
      return true; 
    } else { 
      $this->conection->close(); 
      return false;
    }
  }

  public function deleteNote($id){
    $this->getConection();
    $sql = "DELETE FROM ". $this->table ." WHERE id=$id"; 
    if($this->conection->query($sql) === TRUE){
      $this->conection->close(); 
      return true; 
    } else {
      $this->conection->close(); 
      return false; 
    }
  }

}

?>