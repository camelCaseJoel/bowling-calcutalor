<?php 
include 'calculador.php';
include 'partida.php';
include 'utils.php';

// Game instances
$juego_1 = [ new Partida(3, 5), new Partida(2, 4), new Partida(3, 4) ];
$juego_2 = [ new Partida(5, 5), new Partida(2, 4)];
$juego_3 = [ new Partida(10, 0), new Partida(2, 4)];
$juego_4 = [ new Partida(4, 6), new Partida(1, 4)];
$juego_5 = [ new Partida(10, 0), new Partida(1, 4), new Partida(8,2), new Partida(2, 2)];

$calc = new Calculador();

// Tests
checkea( 21 ,  $calc->calcular_total( $juego_1 ) );
checkea( 18 ,  $calc->calcular_total( $juego_2 ) );
checkea( 22 ,  $calc->calcular_total( $juego_3 ) );
checkea( 16 ,  $calc->calcular_total( $juego_4 ) );
checkea( 36 ,  $calc->calcular_total( $juego_5 ) );
