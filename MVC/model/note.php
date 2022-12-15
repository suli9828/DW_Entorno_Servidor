<?php

include_once 'db.php';

// Clase Nota.
class Note{

  /* Atributos */
  private int $id;
  private string $titulo;
  private string $descripcion;

  /* Constructor */
  public function __construct(int $id, string $titulo, string $descripcion){
    $this->id = $id;
    $this->titulo = $titulo;
    $this->descripcion = $descripcion;
  }

  /* Métodos */

  // Getters y Setters.
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

// Clase nota que interactúa con la base de datos.
class NoteTable{

  /* Atributos */
  private string $table = 'nota'; // Nombre de la tabla.
  private $conection; // Conexión con la base de datos.
  private array $listNotes = array(); // Array dónde se guardan todas las notas.

  /* Constructor */
  public function __construct(){}

  /* Métodos */ 
  
  // Inicializar la conexión con la bbdd.
  public function getConection(){
    $conn = new DB(); // Crea un objeto DB.
    $this->conection = $conn->getConection(); // Guarda en $this->conexion la conexión creada con el objeto DB.
  }

  // Accede la base de datos y guarda en $this->listNotes todas las notas que haya en la BBDD.
  public function getNotes(){
    $this->getConection(); // Inicializa la conexión.
    $sql = "SELECT * FROM ". $this->table; // Consulta.
    $result = $this->conection->query($sql); // Ejecuta la consulta.
    if($result->num_rows > 0){ // Si devuelve más de 0 filas.
      $i = 0; // Índice del array.
      while($row = $result->fetch_assoc()){ // Se recorren las filas mientras sigan habiendo.
        $this->listNotes[$i] = new Note($row['id'], $row['titulo'], $row['descripcion']); // Se crea un objeto nota y se guarda en el array.
        $i++; // Aumenta el índice del array.
      }
    }
    $this->conection->close(); // Cierra la conexión.
    return $this->listNotes; // Se devuelve el array.
  }

  // Accede a la base de datos para devolver la nota que cuyo id sea el que se le pase como parámetro.
  public function getNoteById($id){
    $this->getConection(); // Inicializa la conexión.
    $sql = "SELECT * FROM ". $this->table ." WHERE id=$id"; // Consulta.
    $result = $this->conection->query($sql); // Ejecuta la consulta.
    if($result->num_rows > 0){ // Si devuelve más de 0 filas.
      $row = $result->fetch_assoc(); // Guarda el resultado.
      $this->conection->close(); // Cierra la conexión.
      return new Note($row['id'], $row['titulo'], $row['descripcion']); // Devuelve un objeto nota con los datos de la BBDD.
    } else { // Si no devuelve más de 0 filas.
      $this->conection->close(); // Cierra la conexión.
      return false; // Devuelve false.
    }
  }

  // Método para inserta una nota.
  public function insertNote(string $titulo, string $descripcion){
    $this->getConection(); // Inicializa la conexión.
    $sql = "INSERT INTO ". $this->table ." (titulo, descripcion) VALUES ('$titulo', '$descripcion')"; // Consulta.
    if($this->conection->query($sql) === TRUE){ // Si se inserta correctamente.
      $id = $this->conection->insert_id; // Recoge el último id generado en la tabla.
      $this->conection->close(); // Cierra la conexión.
      return new Note($id, $titulo, $descripcion); // Devuelve un objeto nota con el último id generado en la bbdd y los atributos dados por el usuario.
    } else { // Si no se inserta.
      $this->conection->close(); // Cierra la conexión.
      return false; // Devuelve false.
    }
  }

  public function updateNote(int $id, string $titulo, string $descripcion){
    $this->getConection(); // Inicializa la conexión.
    $sql = "UPDATE ". $this->table ." SET titulo='$titulo', descripcion='$descripcion' WHERE id=$id"; // Consulta.
    if($this->conection->query($sql) === TRUE){ // Si se actualiza correctamente.
      $this->conection->close(); // Cierra la conexión.
      return true; // Devuelve true.
    } else { // Si no.
      $this->conection->close(); // Cierra la conexión.
      return false; // Devuelve false.
    }
  }

  public function deleteNote($id){
    $this->getConection(); //Inicializa la conexión.
    $sql = "DELETE FROM ". $this->table ." WHERE id=$id"; // Consulta.
    if($this->conection->query($sql) === TRUE){ // Si se borra correctamente.
      $this->conection->close(); // Cierra la conexión.
      return true; // Devuelve true.
    } else { // Si no.
      $this->conection->close(); // Cierra la conexión.
      return false; // Devuelve false.
    }
  }

}

?>