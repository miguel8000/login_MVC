<?php 

    class CadastroController{
       
        public function index(){
            $loader = new \Twig\Loader\FilesystemLoader('app/view');
            $twig = new \Twig\Environment($loader, [
                'cache' => '/path/to/compilation_cache',
                'auto_reload' => true,
            ]);

            $template = $twig->load('cadastro.html');
    
            return $template->render();
            
        }

        
    }