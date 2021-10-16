<?php

namespace libs;

class helpers{

    static public function var_dump($data){
        echo '<pre style="border: 1px dotted red; padding: 15px; backgroud">';
        var_dump( $data );
        echo "</pre>";
    }

    static public function print_r($data){
        echo '<pre style="border: 1px dotted red; padding: 15px; background-color: aqua">';
        print_r( $data );
        echo "</pre>";
    }
}