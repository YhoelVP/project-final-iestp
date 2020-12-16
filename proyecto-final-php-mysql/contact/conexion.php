<?php
    $conexion = 'mysql:host=localhost; dbname=tiendacelulares';
    $user = 'root';
    $password = '';
    
    try {
        $pdo = new PDO($conexion, $user, $password);
        echo "Base de datos conectada correctamente";

    } catch (PDOException $e) {
        echo $e->getMessage();
    }