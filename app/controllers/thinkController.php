<?php
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

    public function organizador()
    {
        require_once __DIR__ . '/../../public/views/organizador.php';
    }
}