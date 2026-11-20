<?php
class JogosModel
{

    private array $jogos =
    [
        [

            'id' => 1,
            'nome' => 'Visita de estudo',
            'descricao' => 'blah blah blah',
            'categoria' => 'Cultura',
            'estado' => 'A decorrer',
            'max_participantes' => 15,
            'modoDeParticipacao' => 'individual',
            'total_fases' => 7,
            'organizador_id' => 232
        ],

        [

            'id' => 2,
            'nome' => 'Visita ao Oceanario',
            'descricao' => 'bleh bleh bleh',
            'categoria' => 'Cultura',
            'estado' => 'Ativo',
            'max_participantes' => 17,
            'modoDeParticipacao' => 'misto',
            'total_fases' => 6,
            'organizador_id' => 232
        ],

        [

            'id' => 3,
            'nome' => 'Visita ao MAAT',
            'descricao' => 'bluh bluh bluh',
            'categoria' => 'Cultura',
            'estado' => 'inativo',
            'max_participantes' => 4,
            'modoDeParticipacao' => 'equipa',
            'total_fases' => 4,
            'organizador_id' => 232
        ],

        [

            'id' => 4,
            'nome' => 'Visita ao Mosteiro dos Jeronimos',
            'descricao' => 'blah blah blah',
            'categoria' => 'Cultura',
            'estado' => 'A decorrer',
            'max_participantes' => 15,
            'modoDeParticipacao' => 'individual',
            'total_fases' => 7,
            'organizador_id' => 232
        ],

        [
            'id' => 5,
            'nome' => 'Desafio de Matemática',
            'descricao' => 'Resolve desafios matemáticos ao longo do percurso.',
            'categoria' => 'Educação',
            'estado' => 'Ativo',
            'max_participantes' => 20,
            'modoDeParticipacao' => 'equipa',
            'total_fases' => 5,
            'organizador_id' => 232
        ],

        [
            'id' => 6,
            'nome' => 'Aventura no Parque',
            'descricao' => 'Explora o parque e descobre os seus segredos.',
            'categoria' => 'Natureza',
            'estado' => 'Ativo',
            'max_participantes' => 30,
            'modoDeParticipacao' => 'misto',
            'total_fases' => 6,
            'organizador_id' => 232
        ],

        [
            'id' => 7,
            'nome' => 'Desafio dos Campeões',
            'descricao' => 'Participa em desafios relacionados com várias modalidades desportivas.',
            'categoria' => 'Desporto',
            'estado' => 'A decorrer',
            'max_participantes' => 24,
            'modoDeParticipacao' => 'equipa',
            'total_fases' => 8,
            'organizador_id' => 232
        ],

        [
            'id' => 8,
            'nome' => 'Viagem pelo Mundo da Tecnologia',
            'descricao' => 'Descobre curiosidades sobre computadores e inovação tecnológica.',
            'categoria' => 'Tecnologia',
            'estado' => 'Ativo',
            'max_participantes' => 18,
            'modoDeParticipacao' => 'individual',
            'total_fases' => 6,
            'organizador_id' => 232
        ],

        [
            'id' => 9,
            'nome' => 'Sabores de Lisboa',
            'descricao' => 'Descobre a gastronomia tradicional de Lisboa.',
            'categoria' => 'Gastronomia',
            'estado' => 'Concluído',
            'max_participantes' => 12,
            'modoDeParticipacao' => 'misto',
            'total_fases' => 4,
            'organizador_id' => 232
        ],

        [
            'id' => 10,
            'nome' => 'À Descoberta de Lisboa',
            'descricao' => 'Explora os monumentos e locais históricos da cidade.',
            'categoria' => 'Turismo',
            'estado' => 'Ativo',
            'max_participantes' => 25,
            'modoDeParticipacao' => 'equipa',
            'total_fases' => 7,
            'organizador_id' => 232
        ],

        [
            'id' => 11,
            'nome' => 'Mistério no Museu',
            'descricao' => 'Resolve enigmas relacionados com obras de arte e exposições.',
            'categoria' => 'Arte',
            'estado' => 'A decorrer',
            'max_participantes' => 16,
            'modoDeParticipacao' => 'individual',
            'total_fases' => 5,
            'organizador_id' => 232
        ],

        [
            'id' => 12,
            'nome' => 'Missão Solidária',
            'descricao' => 'Completa desafios relacionados com cidadania e solidariedade.',
            'categoria' => 'Sociedade',
            'estado' => 'Ativo',
            'max_participantes' => 20,
            'modoDeParticipacao' => 'equipa',
            'total_fases' => 6,
            'organizador_id' => 232
        ],

        [
            'id' => 13,
            'nome' => 'O Desafio da Ciência',
            'descricao' => 'Responde a perguntas sobre ciência e descobertas científicas.',
            'categoria' => 'Ciência',
            'estado' => 'Concluído',
            'max_participantes' => 14,
            'modoDeParticipacao' => 'individual',
            'total_fases' => 5,
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
