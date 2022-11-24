<?php

declare(strict_types=1);

include_once 'Soporte.php';
include_once 'Cliente.php';

class VideoClub{

  private string $nombre;
  private int $productos = array();
  private array $numProductos;
  private array $socios = array();
  private int $numSocios;

  public function __construct(string $nombre, int $numero, int $maxAlquilerConcurrente = 3){
    $this->nombre = $nombre;
    $this->numero = $numero;
    $this->maxAlquilerConcurrente = $maxAlquilerConcurrente;
  }

  public function getNumero(){
    return $this->numero;
  }
  public function setNumero(int $numero){
    $this->numero = $numero;
  }

  public function getNumSoportesAlquilados(){
    return $this->numSoportesAlquilados;
  }
}
  ?>