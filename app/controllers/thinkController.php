<?php
class ThinkController {
    public function dataJogos(): array {
        return require __DIR__ . '/../data/jogos.php';
    }
    public function inicio(): void {
        $titulo = 'TH!NK';
        require_once __DIR__ . '/../../public/views/inicio.php';
    }

    public function entrar(): void {
        require_once __DIR__ . '/../../public/views/login.php';
    }

    public function registrar(): void {
        require_once __DIR__ . '/../../public/views/resgistro.php';
    }

    public function organizador(): void {
        $eventos = $this->dataJogos();
        $pesquisa = trim($_GET['q'] ?? '');
        $resultado = [];
        foreach ($eventos as $evento) {
    if ($pesquisa === '' || strpos($evento['nome'], $pesquisa) !== false) {
        $resultado[] = $evento;
    }
    }
    var_dump($resultado);
    require __DIR__ . '/../../public/views/organizador.php';
     }
}