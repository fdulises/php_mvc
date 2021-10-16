<?php

namespace models;

class usuarios{
    public function __construct(){
        
    }
    public function get($id){
        return "Este es el controlador para usuario: $id";
    }
}