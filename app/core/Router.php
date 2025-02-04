<?php

class Router
{
    private $controller = "";
    private $method = "";
    private $params = [];

    public function __construct()
    {
        $url = $this->splitURL();

        if(file_exists("../app/controllers/" . strtolower($url[0]) . ".php"))
        {
            $this->controller = strtolower($url[0]);
            unset($url[0]);
            require "../app/controllers/" . $this->controller . ".php";
            $this->controller = new $this->controller;

            if(isset($url[1]))
            {
                if(method_exists($this->controller, $url[1]))
                {
                    $this->method = $url[1];
                    unset($url[1]);
                }
                else
                {
                    require "../app/views/404.php";
                    exit();
                }
            }
            else
            {
                $this->method = 'index';
            }
            $this->run($url);
        }
        else
        {
            require "../app/views/404.php";
            exit();
        }
    }

    private function defaultPage()
    {
        return isset($_GET['url']) ? $_GET['url'] : $_ENV['LANDING_PAGE']; 
    }

    private function splitURL()
    {
        $url = $this->defaultPage();
        return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));
    }

    private function run($url)
    {
        $this->params = array_values($url);
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

}
