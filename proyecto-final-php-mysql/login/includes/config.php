<?php
    ob_start();
    session_start();
    date_default_timezone_set('America/Bogota');

    $conexion = 'mysql:host=localhost; dbname=tiendacelulares';
    $user = 'root';
    $password = '';

    // define('DIR', 'http://domain.com/');
    // define('SITEEMAIL', 'yoelv732@gmail.com');

    try {
        $pdo = new PDO($conexion, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (PDOException $e) {
        echo '<p>' . $e->getMessage() . '</p>';
    }

    include_once('classes/user.php');
    include_once('classes/phpmailer/mail.php');
    // $user = new User($pdo);