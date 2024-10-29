<?php

class Home{
     public function __construct(){
        echo "anda berada pada controller Home \n";
    }
    
    public function index(){
        echo "anda memanggil function index \n";
    }
    
    public function home($data1, $data2){
        echo "anda memanggil action home dengan data1 = $data1 dan data2 = $data2 \n";
    } 
}
