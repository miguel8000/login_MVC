<?php
    
    use Miguel\Database\Connection;

    class DashboardController{
        private $retorno;
        public function index(){

            $loader = new \Twig\Loader\FilesystemLoader('app/view');
            $twig = new \Twig\Environment($loader, [
                'cache' => '/path/to/compilation_cache',
                'auto_reload' => true,
            ]);

            $template = $twig->load('dashboard.html');

            $parameters['name_user'] = $_SESSION['usr']["name_user"];
            return $template->render($parameters);
            
        }
        public function logout(){
            unset($_SESSION['usr']);
            session_destroy();

            header('Location: http://localhost/Login+Mvc');
        }
        
        public function adicionarController($name, $email, $password){

            $user = new User();

            if (!empty($_POST['email'])) {

                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
            
                $user->adicionar($name, $email, $password);
            }
            
        }
    
    }