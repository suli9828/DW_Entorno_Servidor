<?php

include_once 'VideoClub.php';


$vc->incluirJuego("God of War", 19.99, "PS4", 1, 1);
$vc->incluirJuego("The Last OF Us Part II", 49.99, "PS4", 1, 1);
$vc->incluirDvd("Torrente", 4.5, "es", "16:9");
$vc->incluirDvd("Origen", 4.5, "es,en,fr", "16:9");
$vc->incluirDvd("El Imperio Contraataca", 3, "es,en", "16:9");
$vc->incluirCintaVideo("Los Cazafantasmas", 3.5, 107);
$vc->incluirCintaVideo("El nombre de la Rosa", 1.5, 140);

$vc->listarProductos();


$vc->incluirSocio("Amancio Ortega");
$vc->incluirSocio("pablo Picasso");


$vc->alquilaSocioProducto(1,2);
$vc->alquilaSocioProducto(1,3);

$vc->alquilaSocioProducto(1,2);

$vc->alquilaSocioProducto(1,6);


$vc->listarSocios();