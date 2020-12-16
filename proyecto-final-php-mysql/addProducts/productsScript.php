<?php
    error_reporting(~E_NOTICE);
    require_once('../models/conexion.php');

    if(isset($_POST['addProduct'])) {
        $modelPhone = $_POST['modelPhone']; // Guardamos en una variable el modelo del telefono que es enviado por POST desde el formulario de agregar
        $brandPhone = $_POST['brandPhone']; // Guardamos en una variable la marca del telefono que es enviado por POST desde el formulario de agregar
        $pricePhone = $_POST['pricePhone']; // Guardamos en una variable el precio del telefono que es enviado por POST desde el formulario de agregar
        $imagePhone = $_POST['imagePhone']; // Guardamos en una variable la imgane del telefono que es enviado por POST desde el formulario de agregar
        $imgNameFile = $_FILES['imagePhone']['name']; // Guardamos en una variable el nombre de la imagen que lo obtenemos por FILES desde el formulario de agregar
        $imgDirTemp = $_FILES['imagePhone']['tmp_name']; // Guardamos en una variable la carpteta temporal donde se almacena la imagen que lo obtenemos por FILES desde el formulario de agregar
        $imgSize = $_FILES['imagePhone']['size']; // Guardamos en una variable el tamaño de la imagen que lo obtenemos por FILES desde el formulario de agregar
        echo "inicio <br>";

        if(empty($modelPhone)) {
            $errMSG = 'Escriba el modelo del teléfono';

        } else if(empty($brandPhone)) {
            $errMSG = 'Escriba la marca del teléfono';
            
        } else if(empty($pricePhone)) {
            $errMSG = 'Ingrese el precio del teléfono';
            
        } else {
            $dirSaveImg = '../imagenes/'; // Guardamos en una variable la direccion donde se almacenaran las imagenes
            if(!file_exists($dirSaveImg)) mkdir($dirSaveImg); // Si la direcion de la carpeta no existe la crearemos

            $extensionImg = strtolower(pathinfo($imgNameFile, PATHINFO_EXTENSION));
            $validateExtension = array('png', 'jpg', 'jpeg', 'gif');
            $nameImgRandom = rand(1000, 100000) . '.' . $extensionImg;

            if(in_array($extensionImg, $validateExtension)) {
                if($imgSize < 10000000) {
                    move_uploaded_file($imgDirTemp, ($dirSaveImg . $nameImgRandom));
                } else {
                    $errMSG = 'Su archivo excede el tamaño aceptado';
                }
            } else {
                $errMSG = 'El tipo de archivo no es permitido';
            }
        }

        if(!isset($errMSG)) {
            $sentInsert = $pdo->prepare('INSERT INTO celulares (modelo, marca, precio, imagen) VALUES (:uModel, :uBrand, :uPrice, :uImg)');
            $sentInsert->bindParam(':uModel', $modelPhone);
            $sentInsert->bindParam(':uBrand', $brandPhone);
            $sentInsert->bindParam(':uPrice', $pricePhone);
            $sentInsert->bindParam(':uImg', $nameImgRandom);
            // $sentInsert->execute();

            if($sentInsert->execute()) {
                // $successMsg = 'Nuevo registro insertado correctamente';
                header("Location: http://localhost/Proyectos/proyecto-final-php-mysql/index.php");
                exit;
            } else {
                $errMSG = 'Error al insertar nuevo registro';
            }
        }
    }

