<?php

class Team {

    // Atributos
    private $nome;
    private $partidas;
    private $vitorias;
    private $derrotas;
    private $empates;
	private $pontos;
    private $golsMarcados;
    private $golsSofridos;
	private $saldoDeGols;

    // Métodos
    public function __construct($n) {
        $this->nome = $n;
        $this->partidas = 0;
        $this->vitorias = 0;
        $this->derrotas = 0;
        $this->empates = 0;
	    $this->pontos = 0;
        $this->golsMarcados = 0;
        $this->golsSofridos = 0;
	    $this->saldoDeGols = 0;
    }

    public function JogarPartida($gM, $gS) {
        $this->partidas += 1;
        $this->golsMarcados += $gM;
        $this->golsSofridos += $gS;
        $this->saldoDeGols = $this->golsMarcados - $this->golsSofridos;
    }

    public function GanharPartida() {
        $this->vitorias += 1;
        $this->pontos += 3;
    }

    public function PerderPartida() {
        $this->derrotas += 1;
    }

    public function EmpatarPartida() {
        $this->empates += 1;
        $this->pontos += 1;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nNome) {
        $this->nome = $nNome;
    }

    public function getPartidas() {
        return $this->partidas;
    }

    public function setPartidas($nPartidas) {
        $this->partidas = $nPartidas;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function setVitorias($nVitorias) {
        $this->vitorias = $nVitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function setDerrotas($nDerrotas) {
        $this->derrotas = $nDerrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setEmpates($nEmpates) {
        $this->empates = $nEmpates;
    }

    public function getPontos() {
        return $this->pontos;
    }

    public function setPontos($nPontos) {
        $this->pontos = $nPontos;
    }

    public function getGolsMarcados() {
        return $this->golsMarcados;
    }

    public function setGolsMarcados($nGolsMarcados) {
        $this->golsMarcados = $nGolsMarcados;
    }
    
    public function getGolsSofridos() {
        return $this->golsSofridos;
    }

    public function setGolsSofridos($nGolsSofridos) {
        $this->golsSofridos = $nGolsSofridos;
    }

    public function getSaldoDeGols() {
        return $this->saldoDeGols;
    }

    public function setSaldoDeGols($nSaldoDeGols) {
        $this->saldoDeGols = $nSaldoDeGols;
    }

}