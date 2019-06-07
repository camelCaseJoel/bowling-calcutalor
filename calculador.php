<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Calculador {
    private $extra_points;

    public function calcular_total ( $partidas ) {
        $total = 0;
        $previous_was_spare = false;
        $previous_was_strike = false;

        foreach ( $partidas as $partida ) {
            $total += $partida->get_score_1();
            $total += $partida->get_score_2();

            if ($previous_was_strike ) {
                $total += $partida->get_score_1();
                $total += $partida->get_score_2();
            }
            if($previous_was_spare) {
                $total += $partida->get_score_1();
            }

            // setting flags
            $previous_was_spare = ( $partida->check_if_spare() ) ? true : false;
            $previous_was_strike = ( $partida->check_if_strike() )? true : false;
            
        }
        echo 'El total es: ' . $total;
        return $total;
    }
}

