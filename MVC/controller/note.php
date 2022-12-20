<?php

include_once 'model/note.php';
include_once 'config/config.php';

class NoteController {

  public string $view;
  private NoteTable $noteTableObj; 
  public string $titulo;

  public function __construct(){

    $this->view = constant("DEFAULT_ACTION"); 
    $this->noteTableObj = new NoteTable(); 
    
  }

  
  public function list(){
    $this->view = 'list'; 
    $this->titulo = "Mis notas"; 
    return $this->noteTableObj->getNotes(); 
  }

  public function confirmUpdate(){
    $this->view = 'update';
    $this->titulo = "Editar nota";
    return $this->noteTableObj->getNoteById($_GET['id']); 
  }

  public function update(){
    $this->noteTableObj->updateNote($_GET['id'], $_POST['titulo'], $_POST['descripcion']); 
    return $this->list(); 
  }

  public function confirmInsert(){
    $this->view = 'insert';
    $this->titulo = "Añadiendo nueva nota";
  }

  public function insert(){
    $this->noteTableObj->insertNote($_POST['titulo'], $_POST['descripcion']); 
    return $this->list(); 
  }

  public function confirmDelete(){
    $this->view = 'delete';
    $this->titulo = "¿Está seguro de que quiere eliminar esta nota?";
    return $this->noteTableObj->getNoteById($_GET['id']); 
  }

  public function delete(){
    $this->noteTableObj->deleteNote($_GET['id']); 
    return $this->list();
  }
}

?>