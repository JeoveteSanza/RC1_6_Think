<?php
require_once  __DIR__ . '/../model/JogosModel.php';
class ThinkController
{
    public function inicio()
    {
        require_once __DIR__ . '/../../public/views/inicio.php';
    }

    public function entrar()
    {
        require_once __DIR__ . '/../../public/views/login.php';
    }

    public function registrar()
    {
        require_once __DIR__ . '/../../public/views/registrar.php';
    }

    public function criarjogos()
    {
        require_once __DIR__ . '/../../public/views/criarjogos.php';
    }

    public function organizador()
    {
        $jogosModel = new JogosModel();
        $jogos = $jogosModel->getJogoPorOrganizador(232);
        $pesquisa = trim((string) ($_GET['pesquisa'] ?? ''));
        $pesquisaResultado = [];
        foreach ($jogos as $jogo) {
            if ($pesquisa === '' || strpos($jogo['nome'], $pesquisa) !== false) {
                $pesquisaResultado[] = $jogo;
            }
        }
        require_once __DIR__ . '/../../public/views/organizador.php';
    }

    public function detalhes()
    {
        $jogosModel = new JogosModel();

        // Receber e validar o ID
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if ($id === false || $id === null || $id <= 0) {
            $jogo = null;
        } else {
            // Procurar o jogo
            $jogo = $jogosModel->getJogo($id);
        }

        // Carregar a View
        require_once __DIR__ . '/../../public/views/detalhes.php';
    }
}
