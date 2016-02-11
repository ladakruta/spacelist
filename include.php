<?php
include_once 'config/config.php';
spl_autoload_register(function ($class_name) {
    if(file_exists('model/'.$class_name.'.php')){
        include 'model/'.$class_name.'.php';    
    }
    if(file_exists('controller/'.$class_name.'.php')){
        include 'controller/'.$class_name.'.php';    
    } 
});
include_once 'utils/kint/Kint.class.php';
$SpaceList = new SpaceList();
$Spaceman  = new Spaceman();
