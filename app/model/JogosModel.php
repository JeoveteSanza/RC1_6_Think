<?php

class JogosModel
{
    public function getJogos()
        {
            return $this->jogos;
        }

    public function getJogo($id)
        {
            foreach ($this->jogos as $jogo) {
                if ($id === $jogo['id']) {
                    return $jogo;
                }
            }
            return null;
        }

    public function getJogobyName($nome)
        {
            $resultado = [];
            foreach ($this->jogos as $jogo) {
                if (stripos($jogo['nome'], $nome) !== false) {
                    $resultado[] = $jogo;
                }
            }
            return $resultado;
        }

    public function getJogoPorOrganizador($organizadorId)
        {
            $resultado = [];
            foreach ($this->jogos as $jogo) {
                if ($organizadorId === $jogo['organizador_id']) {
                    $resultado[] = $jogo;
                }
            }
            return $resultado;
        }

    private array $jogos = [];

    public function iniciarData()
        {
            $this->jogos = require __DIR__ . '/../repository/JogosRepository.php';
        }
}
