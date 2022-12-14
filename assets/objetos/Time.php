<?php

class Time {
    // Atributos
    public $nome;
    public $partidas;
    public $vitorias;
    public $derrotas;
    public $empates;
	public $pontos;
    public $golsMarcados;
    public $golsSofridos;
	public $saldoDeGols;

    // Métodos

    $saldoDeGols = $golsMarcados - $golsSofridos;

    public function JogarPartida($gM, $gS) {
        $partidas += 1;
        $golsMarcados += $gM;
        $golsSofridos += $gS;
    }

    public function GanharPartida() {
        $vitorias += 1;
        $pontos += 3;
    }

    public function PerderPartida() {
        $derrotas += 1;
    }

    public function EmpatarPartida() {
        $empates += 1;
        $pontos += 1;
    }

}