<?php

namespace controllers;

use \models\usuarios;
use \views\usuario as usuarioView;

class usuario{
    public function __construct(){
        
    }
    public function get($id){
        $usuarioModel = new usuarios;
        $usuarioView = new usuarioView;

        return "Este es el controlador para usuario: $id";
    }
}