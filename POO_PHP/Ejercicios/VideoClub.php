<?php

include_once 'Cliente.php';
include_once 'Soporte.php';
include_once 'CintaVideo.php';
include_once 'Dvd.php';
include_once 'Juego.php';

class VideoClub{

  private string $nombre;
  private array $productos = array();
  private int $numProductos = 0;
  private array $socios = array();
  private int $numSocios = 0;

  public function __construct(string $nombre){
    $this->nombre = $nombre;
  }

  private function incluirProducto(Soporte $s): bool{
    array_push($this->productos, $s);
    $this->numProductos++;
    return true;
  }

  public function incluirCinta(string $titulo, string $numero, float $precio, int $duracion){
    return $this->incluirProducto(new CintaVideo($titulo, $numero, $precio, $duracion));
  }

  public function incluirDvd(string $titulo, string $numero, float $precio, string $idiomas, string $formatPantalla){
    return $this->incluirProducto(new Dvd($titulo, $numero, $precio, $idiomas, $formatPantalla));
  }

  public function incluirJuego(string $titulo, string $numero, float $precio, string $consola, int $minNumJugadores, int $maxNumJugadores){
    return $this->incluirProducto(new Juego($titulo, $numero, $precio, $consola, $minNumJugadores, $maxNumJugadores));
  }

  public function incluirSocio(string $nombre, int $maxAlquilerConcurrente = 3){
    array_push($this->socios, new Cliente($nombre, $maxAlquilerConcurrente = 3));
    $this->numSocios++;
    return true;
  }

  public function listarProductos(){
    foreach($this->productos as $producto){
      $producto->muestraResumen();
      echo '<br>';
    }
  }

  public function listarSocios(){
    foreach($this->socios as $socio){
      $socio->muestraResumen();
      echo '<br>';
    }
  }

  public function alquilarSocioProducto(int $numCliente, int $numSoporte): bool{
    foreach($this->socios as $socio){
      if($socio->getNumero() == $numCliente){
        foreach($this->productos as $producto){
          if($producto->getNumero() == $numSoporte){
            if($producto->isAlquilado()){
              return false;
            } else {
              $socio->alquilar($producto);
              return true;
            }
          }
        }
      }
    }
  }

}