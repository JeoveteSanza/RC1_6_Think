<?php
declare(strict_types=1);
require_once __DIR__ . '/../app/controllers/thinkController.php';
$acao = $_GET['acao'] ?? 'login';
$controller = new PirataController();
switch ($acao) {
    case 'login': $controller->login(); break;
    case 'piratas': $controller->listar(); break;
    case 'detalhe': $controller->detalhe(); break;
    default: http_response_code(404); $controller->naoEncontrado();
}