<?php
class App
{
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();

        // cek controller
        if(isset($url[0])){ 
            if(file_exists("../app/controllers/" . $url[0] . ".php")){
                $this->controller = $url[0];
                unset($url[0]);
            }
        }
        // lalu
        require_once "../app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;


        //cek method
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }


        // Kelola parameter
        if(!empty($url)){
            $this->params = array_values($url);
        } // artinya url index ke 2 dan seterusnya akan diubah menjadi array 


        call_user_func_array([$this->controller, $this->method], $this->params);
        // jalankan controller dan method nya (new $this->controller->$this->method)
        // lalu misalkan di $params = [Erik,Gamer,32]
        // serta kirim data atau parameternya (new $this->controller->$this->method("Erik", "Gamer", 32))

    }

    public function parseURL()
    {
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            return $url;
        }
    }
}