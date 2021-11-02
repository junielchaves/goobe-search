<?php
namespace App;
class Router
{
  public static function getRouter($url) {
    switch ($url) {
      case '/':
        $title = "Entrando...";
        require_once"./public/views/index.html";
        break;
      case '/home':
        $title = "Entrando...";
        require_once"./public/views/index.html";
        break;
      case '/home-pesquisa':
        $title = "Bem Vindo - Busca Jobs";
        require_once"./public/views/home.html";
        break;
      default:
        $title = "Oops! - Erro 404";
        require_once"./public/views/erro.html";
        break;
    }
  }
}