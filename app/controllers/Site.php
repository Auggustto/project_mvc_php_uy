<?php

namespace app\controllers;

use app\models\Crud;

class Site extends Crud
{
    public function home()
    {
        // Importando a pagina home
        require_once __DIR__ . '/../views/home.php';

    }

    // public function galeria($foto)
    // {
    //     $photo = $foto;
    //     // Importando a pagina de galeria
    //     require_once __DIR__. '/../views/galeria.php';
    // }

    public function cadastro()
    {
        require_once __DIR__ . '/../views/cadastro.php';
        $cadastro = $this->create();
            
    }

    public function  consulta()
    {   
        $consulta = $this->read();
        require_once __DIR__ . '/../views/consulta.php';
    }

    public function  editar()
    {   
        $editarForm = $this->editForm();
        require_once __DIR__ . '/../views/editar.php';
    }
    
    public function  alterar()
    {   
        // Executando a query do update  
        $alterar = $this->update();

        // Redirecionando 
        header('Location:?router=Site/consulta/');
    }

    public function  confirmaDelete()
    {   
        // Executando a query do update  
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

        // Redirecionando 
        header('Location:?router=Site/consulta/');
    }
}