<?php
    
    declare(strict_types=1);
    include_once './models/note.php';

    class NoteController{

        public $page_title;
        public $view;
        private $noteObj;

        public function __construct(){
            $this->view = 'list_note';
            $this->page_title = '';
            $this->noteObj = new NoteTabla();
        }

        public function list(){
            $this->page_title = 'Listado de notas';
            return $this->noteObj->getNota(1);
        }

        public function insert(){
            $this->page_title = 'Insertar nota';
            $this->view = 'insert_note';
        }

        public function getVista(){
            return $this->vista;
        }

        public function getPagina(){
            return $this->pagina;
        }

        public function setVista($vista){
            $this->vista = $vista;
        }

        public function setPagina($pagina){
            $this->pagina = $pagina;
        }

        public function listar(){
            return $this->noteObj->getNotas();
        }

        public function getNota($id){
            return $this->noteObj->getNota($id);
        }

        public function insertar($title, $content){
            $this->noteObj->insertarNota($title, $content);
        }

        public function eliminar($id){
            $this->noteObj->eliminarNota($id);
        }

        public function editar($id, $title, $content){
            $this->noteObj->editarNota($id, $title, $content);
        }

    }
?>