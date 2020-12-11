<?php

    $conexion = 'mysql:host=localhost; dbname=tiendacelulares';
    $user = 'root';
    $pass = '';

    try {
        $pdo = new PDO($conexion, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Conectado";
        
    } catch (PDOException $e) {
        echo $e->getMessage();
    }