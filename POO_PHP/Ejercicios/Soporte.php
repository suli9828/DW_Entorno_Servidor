<?php

declare(strict_types=1);

class Soporte{
  public string $titulo;
  protected string $numero;
  private float $precio;
  private const IVA = 21;

  public function __construct(string $titulo, string $numero, float $precio){
    $this->titulo = $titulo;
    $this->numero = $numero;
    $this->precio = $precio;
  }


  public function isAlquilado(){
    return $this->alquilado;
  }

  public function setAlquilado(bool $b){
    $this->alquilado = $b;
  }
  
  public function getPrecio(){
    return $this->precio;
  }

  public function getPrecioConIva(){
    return $this->precio + ($this->precio * (self::IVA / 100));
  }

  public function getTitulo(){
    return $this->titulo;
  }

  public function getNumero(){
    return $this->numero;
  }

  public function muestraResumen(){
    echo '<p>'.$this->titulo .'</br>'. $this->precio . '€ (IVA no incluido)</p>';
  }

}

?>