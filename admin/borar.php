<?php session_start();
require 'config.php';
require '../functions.php';
comprobarSession();

$conexion =conexion ($bd_config);
if(!$conexion){
    header('Location: ../error.php');
}

$id= limpiarDatos($_GET('id'));
if(!$id){
    header('Location:'. RUTA . '/admin')
}
$statement = $conex->prepare('DELETE FROM articulos WHERE id = :id');
$statement ->execute(array('id' => $id));

header('Loation: ' . RUTA . '/admin')
?>