<?php

class Router {

    private $routes = [];

    public function add($path, $file) {
        $this->routes[$path] = $file;
    }

    public function run() {

        $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        $path = str_replace("/index.php", "", $path);

        if(isset($this->routes[$path])){

            $response = "";

            require $this->routes[$path];

            echo $response;

        } else {

            echo "404 - Not Found";

        }

    }

}
