<?php 

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
    header('Location: error.php');
}

if ($_SERVER ['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
    $busqueda = limpiarDatos($_GET['busqueda']);
    
    $statement = $conexion->prepare(
        'SELECT * FROM articulos WHERE titulo LIKE :busqueda or texto LIKE :busqueda'
    );
    $statement->execute(array(':busqueda' => "%$busqueda"));
    $resutados = $statement->fechAll();

    if (empty($resutados)) {
        $titulo ='Lo sentimos mucho no se encontraron articulos similares con su busqueda :' . $busqueda;
    } else{
        $titulo = 'Resultados de busqueda' . $busqueda;
    }
} else {
    header('Location'. RUTA . '/index.php');
}

require 'views/buscar.view.php';

?>