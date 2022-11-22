<?php

declare(strict_types=1);

class Cliente1{

    public string $nombre;
    private int $numero;
    private int $soportesAlquilados;
    private int $numSoportesAlquilados;
    private int $maxAlquilerConcurrente = 3;

    public function __constructor(string $nombre, int $numero, int $maxAlquilerConcurrente){
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->maxAlquilerConcurrente = $maxAlquilerConcurrente;
    }
   
    public function setNumero(int $num){
        $this->numero = $num;
      }

    public function getNumero(){
        return $this->numero;
      }

    public function getnumSoportesAlquilados(){
        return $this->numSoportesAlquilados;
      }


      public function muestraResumen(){
        echo '<p>Nombre: '.$this->nombre .'</br>';
        echo '<p>Número: '.$this->numero .'</br>';
        echo '<p>Soportes Alquilados: '.$this->soportesAlquilados .'</br>';
        echo '<p>número de soportes alquilados: '.$this->numSoportesAlquilados .'</br>';
        echo '<p>Máximo de alquiler concurrente: '.$this->maxAlquilerConcurrente .'</br>';
      }
}

?>