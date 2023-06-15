<?php

namespace core;

class Router
{
    // criando 3 atributos privados para gerenciar as urls
    // Um para armazenar a classe
    // Um para o metodo que vai acessar a pagina 
    // Um para armazenar o parametro que vai ser passado 

    private $controllers = 'Site';
    private $method = 'home';
    private $param = '[]';


    public function __construct()
    {
        $router = $this->url();
        // Verificando se a classe site existe
        if(file_exists('app/controllers/' . ucfirst($router[0]) . 'php')):
            echo 'Arquivo exixte';
        else:
            echo 'Arquivo não existe';
        endif;
        echo '<br>';
        print_r($router);
    }

    // Criando uma função para pegar os dados passados pela url do navegador
    private function url(){
        // Passando explode, sempre que encontrar uma barra ele quebra
        // 'router' é o nome da vareavel que foi definida no htaccess
        $parse_url = explode("/", filter_input(INPUT_GET, 'router', FILTER_SANITIZE_URL));
        return $parse_url;
    }
}