<?php

class App {

    protected $controller = 'Home';
    protected $methode = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();
        // var_dump($url);

        // controller
        if ( file_exists('../app/controllers/' . $url[0] . '.php') )
        {
            $this->controller = $url[0];

            // Hilangkan url[0]
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;


        // Methode
        if ( isset( $url[1] ) ) {
            // Jika pada class yang ditunjukkan $controller terdapat methode $url[1]
            if ( method_exists($this->controller, $url[1]) ){
                $this->methode = $url[1];
                unset( $url[1] ); 
            }
        }


        // Params
        // Jika isi dari url masih ada jadikan parameter
        if ( !empty($url) ){
            // var_dump($url);

            // Ambil datanya
            $this->params = array_values($url);
        }


        // Jalankan controller & methode, serta kirimkan params jika ada
        call_user_func_array( [$this->controller, $this->methode], $this->params);


    }

    public function parseURL()
    {
        if (isset($_GET['url'])){
            $url =  rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }



}