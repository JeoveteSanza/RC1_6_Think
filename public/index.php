<?php
declare(strict_types=1);
require_once __DIR__ . '/../app/controllers/ThinkController.php';
$acao = $_GET['acao'] ?? 'inicio';
$controller = new ThinkController();
switch ($acao) {
    case 'inicio': $controller->inicio(); break;
    case 'entrar': $controller ->entrar(); break;
    case 'registrar': $controller->resgistrar(); break;
    case 'organizador': $controller->organizador(); break;
}