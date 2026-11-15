<?php
require_once __DIR__ . '/../app/controllers/thinkController.php';

$acao = $_GET['acao'] ?? 'inicio';
$controller = new ThinkController();


 switch ($acao) {
    case 'inicio':
        $controller->inicio();
        break;
    case 'entrar':
        $controller->entrar();
        break;
    case 'registrar':
        $controller->registrar();
        break;
    case 'organizador':
        $controller->organizador();
        break;
    case 'detalhes':
        $controller->detalhes();
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
        
}
