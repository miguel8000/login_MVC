<?php 

    class CadastroController{

        public function redirect(){
            if ($this->controller) { 
                $pg_permission = ['CadastroController'];

                if (!isset($this->controller) || !in_array($this->controller, $pg_permission)) {
                    $this->controller = 'CadastroController';
                    $this->method = 'index';
                    header('Location: http://localhost/Login+Mvc/cadastro/index');
                }
            }

        }

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