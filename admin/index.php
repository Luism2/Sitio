<?php session_start();
require 'config.php';
require '../functions.php';
$conecxion= conexion($bd_config);
comprobarSession();
//comprobar secion
if(!$conecxion){
    header('Location:../error.php');
}
$posts= obtener_post($blog_config['post_por_pagina'], $conecxion);
require '../views/admin_index.view.php'
?>