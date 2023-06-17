<?php

namespace app\controllers;

class Site
{
    public function home()
    {
        // Importando a pagina home
        require_once __DIR__ . '/../views/home.php';

    }
    public function galeria($foto)
    {
        $photo = $foto;
        // Importando a pagina de galeria
        require_once __DIR__. '/../views/galeria.php';
    }
}