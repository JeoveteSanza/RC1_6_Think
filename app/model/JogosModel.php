<?php
class JogosModel
{

    private array $jogos =
    [
        [

            'id' => 1,
            'nome' => 'Visita de estudo',
            'descricao' => 'blah blah blah',
            'estado' => 'A decorrer',
            'max_participantes' => 15,
            'tipo' => 'individual',
            'total_fases' => 7,
            'organizador_id' => 232
        ],

        [

            'id' => 2,
            'nome' => 'Visita ao Oceanario',
            'descricao' => 'bleh bleh bleh',
            'estado' => 'Ativo',
            'max_participantes' => 17,
            'tipo' => 'misto',
            'total_fases' => 6,
            'organizador_id' => 233
        ],

        [

            'id' => 3,
            'nome' => 'Visita ao MAAT',
            'descricao' => 'bluh bluh bluh',
            'estado' => 'inativo',
            'max_participantes' => 4,
            'tipo' => 'equipa',
            'total_fases' => 4,
            'organizador_id' => 234
        ],

        [

            'id' => 4,
            'nome' => 'Visita ao Mosteiro dos Jeronimos',
            'descricao' => 'blah blah blah',
            'estado' => 'A decorrer',
            'max_participantes' => 15,
            'tipo' => 'individual',
            'total_fases' => 7,
            'organizador_id' => 232
        ],

    ];

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
}
