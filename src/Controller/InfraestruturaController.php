<?php

 class InfraestruturaController{

    public function index(){

      $loader = new \Twig\Loader\FilesystemLoader('src/View');
      $twig = new \Twig\Environment($loader);
      $template = $twig->load('infraestrutura.html');

      $conteudo = $template->render();
      echo $conteudo;

     }

}

?>