<?php

class Controller {

    public function view($view, $data = [])
    {
        require_once '../App/views/' . $view . '.php';
    }

    public function model($model){
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

    

}