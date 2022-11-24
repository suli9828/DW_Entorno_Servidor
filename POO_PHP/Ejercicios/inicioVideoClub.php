<?php

include_once 'VideoClub.php';

$vc = new VideoClub("Severo 8A");

$vc->incluirJuego('Gotham Knights', 15, 79.99, 'PS5', 1, 1);
$vc->incluirJuego('The Last Of Us Part II', 10, 49.99, 'PS4', 1, 1);
$vc->incluirDvd('Torrente', 30, 4.5, 'es', '16:9');
$vc->incluirDvd("Origen", 24, 15, "es, en, fr", "16:9");
$vc->incluirDvd('El Imperio Contraataca', 27, 3, 'es,en', '16:9');
$vc->incluirCinta("Los cazafantasmas", 23, 3.5, 107);
$vc->incluirCinta('El nombre de la Rosa', 24, 1.5, 140);

$vc->listarProductos();

$vc->incluirSocio('Amancio Ortega');
$vc->incluirSocio('Pablo Picasso', 2);

$vc->alquilarSocioProducto(1, 2);
$vc->alquilarSocioProducto(1, 3);

echo '<br>';

$vc->alquilarSocioProducto(1, 2);

echo '<br>';

$vc->alquilarSocioProducto(1, 6);

echo '<br>';

$vc->listarSocios();