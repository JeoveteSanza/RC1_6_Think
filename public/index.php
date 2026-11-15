<?php
require_once __DIR__ . '/../app/controllers/thinkController.php';

$acao = $_GET['acao'] ?? 'inicio';
$controller = new ThinkController();
$controller->$acao();

switch ($acao) {
    case 'inicio':
        $controller->inicio();
        break;
    case 'login':
        $controller->entrar();
        break;
    case 'registrar':
        $controller->registrar();
        break;
    case 'organizador':
        $controller->organizador();
        break;
    default:
        http_response_code(404);
        echo "Página não encontrada.";
        break;
}
