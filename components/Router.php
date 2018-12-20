<?php 
    class Router
    {
        private $routes;

        public function __construct()
        {
            $routesPath = ROOT.'/config/routes.php';
            $this->routes = include($routesPath);

        }
        /*
        /*Return uri string
        /* */
        private function getURI(){
            if(!empty($_SERVER['REQUEST_URI'])) {
                return trim($_SERVER['REQUEST_URI'], '/');
            }
        }

        public function run()
        {
            // Get URL of request
            $uri = $this->getURI();
            echo $uri;
            //compare $uriPattern and $uri
            foreach ($this->routes as $uriPattern => $path) {
                if (preg_match("~$uriPattern~", $uri)) {
                    echo $path;
                }
            }

        }

    };