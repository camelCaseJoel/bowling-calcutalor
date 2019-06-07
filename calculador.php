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
            echo 'score1 : ' . $partida->get_score_1() . ' --- ';
            echo 'score2 : ' . $partida->get_score_2() . '<br/>';

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
            if ($partida->check_if_spare()) {
                $previous_was_spare = true;
            }else{
                $previous_was_spare = false;
            }
            if ($partida->check_if_strike()) {
                $previous_was_strike = true;
            }else{
                $previous_was_strike = false;
            }
            
        }
        echo $total;
        return $total;
    }
}

