<?php

use App\Controllers\RoutesController;
use App\Controllers\LogicsOneController;
use App\Controllers\LogicsTwoController;
use App\Controllers\LogicsThreeController;

//Запускаем разбор адресной строки
//Получаем нужное нам значение
$route = explode("/", $_SERVER['REQUEST_URI']);     
$route = str_replace(".php", "", $route);

if ($route[2] == "index" || $route[2] == ""){
    $address = new RoutesController;
    $address->Index();
}

if ($route[2] == "back"){
    $address = new RoutesController;
    $address->LoadingContent();
}

if ($route[2] == "action"){
    $address = new RoutesController;
    $address->UpdateContent();
}

if ($route[2] == "logics"){
    if($_SESSION['moves'] == 1){
        $address = new LogicsOneController;
        $address->SelectVariant();
    }  
    if($_SESSION['moves'] == 2){
        $address = new LogicsTwoController;
        $address->SelectVariant();
    }
    if($_SESSION['moves'] == 3 || $_SESSION['moves'] == 4 || $_SESSION['moves'] == 5 || $_SESSION['moves'] == 6){
        $address = new LogicsThreeController;
        $address->SelectVariant();
    }
}

if ($route[2] == "restart"){
    $address = new RoutesController;
    $address->Restart();
}
