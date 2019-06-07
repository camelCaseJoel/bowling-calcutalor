<?php 

class Partida {
    private $score_1;
    private $score_2;
    function __construct($score1, $score2){
        $this->score_1 = $score1;
        $this->score_2 = $score2;

    }
    public function get_score_1() {
        return $this->score_1;
    }
    public function get_score_2() {
        return $this->score_2;
    }
    public function check_if_spare() {
        $total = $this->score_1 + $this->score_2;
        if ( $total == 10 && $this->score_1 < 10 ){
            return true;
        }else{
            return false;
        }
    }
    public function check_if_strike() {
        if( $this->score_1 == 10 ){
            return true;
        }else{
            return false;
        }
    }
    
}