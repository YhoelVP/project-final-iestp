<?php
    error_reporting(~E_NOTICE);
    require_once('../models/conexion.php');

    if(isset($_GET['edit']) && !empty($_GET['edit'])) {
        $idImage = $_GET['edit'];

        $sentEdit = $pdo->prepare('SELECT modelo, marca, precio, imagen FROM celulares WHERE id = :uId');
        $sentEdit->execute(array(':uId' => $idImage));
        $editProduct = $sentEdit->fetch(PDO::FETCH_ASSOC);
        extract($editProduct);

    } else {
        header('Location: products.php');
    }

    if(isset($_POST['saveChanges'])) {
        $modelPhone = $_POST['modelPhone']; // Guardamos en una variable el modelo del telefono que es enviado por POST desde el formulario de agregar
        $brandPhone = $_POST['brandPhone']; // Guardamos en una variable la marca del telefono que es enviado por POST desde el formulario de agregar
        $pricePhone = $_POST['pricePhone']; // Guardamos en una variable el precio del telefono que es enviado por POST desde el formulario de agregar
        $imagePhone = $_POST['imagePhone']; // Guardamos en una variable la imgane del telefono que es enviado por POST desde el formulario de agregar
        $imgNameFile = $_FILES['imagePhone']['name']; // Guardamos en una variable el nombre de la imagen que lo obtenemos por FILES desde el formulario de agregar
        $imgDirTemp = $_FILES['imagePhone']['tmp_name']; // Guardamos en una variable la carpteta temporal donde se almacena la imagen que lo obtenemos por FILES desde el formulario de agregar
        $imgSize = $_FILES['imagePhone']['size']; // Guardamos en una variable el tamaño de la imagen que lo obtenemos por FILES desde el formulario de agregar

        if($imgNameFile) {
            $dirSaveImg = '../imagenes/'; // Guardamos en una variable la direccion donde se almacenaran las imagenes
            $extensionImg = strtolower(pathinfo($imgNameFile, PATHINFO_EXTENSION));
            $validateExtension = array('png', 'jpg', 'jpeg', 'gif');
            $nameImgRandom = rand(1000, 100000) . '.' . $extensionImg;

            if(in_array($extensionImg, $validateExtension)) {
                if($imgSize < 10000000) {
                    unlink($dirSaveImg . $editProduct['imagen']);
                    move_uploaded_file($imgDirTemp, ($dirSaveImg . $nameImgRandom));
                } else {
                    $errMSG = 'Su archivo excede el tamaño aceptado';
                }
            } else {
                $errMSG = 'El tipo de archivo no es permitido';
            }
        } else {
            $nameImgRandom = $editProduct['imagen'];
        }

        if(!isset($errMSG)) {
            $sentUpdate = $pdo->prepare('UPDATE celulares SET modelo = :uModel, marca = :uBrand, precio = :uPrice, imagen = :uImg WHERE id = :uId');
            $sentUpdate->bindParam(':uModel', $modelPhone);
            $sentUpdate->bindParam(':uBrand', $brandPhone);
            $sentUpdate->bindParam(':uPrice', $pricePhone);
            $sentUpdate->bindParam(':uImg', $nameImgRandom);
            $sentUpdate->bindParam(':uId', $idImage);
            // $sentUpdate->execute();

            if($sentUpdate->execute()) {
?>
                <script>
                    alert('Producto editado correctamente');
                    window.location.href="products.php";
                </script>
<?php
            } else {
                $errMSG = 'Los datos no fueron actualizados';
            }
        }
    }
?>

<?php include_once('header.php'); ?>

<div class="container">
    <div class="row mt-2">
        <div class="col-6 m-auto">
            <form method="POST" class="bg-transparent" enctype="multipart/form-data">
                <h2 class="pt-2 text-center text-uppercase">Editar producto</h2>
                <hr>
                <div class="form-group">
                    <label for="modelPhone">Modelo del celular:</label>
                    <input 
                        type="text"
                        name="modelPhone"
                        class="form-control"
                        autocomplete="off"
                        required=" "
                        value="<?php echo $modelo; ?>"
                    >
                </div>
                <div class="form-group">
                    <label for="brandPhone">Marca del celular:</label>
                    <input 
                        type="text"
                        name="brandPhone"
                        class="form-control"
                        autocomplete="off"
                        required=" "
                        value="<?php echo $marca; ?>"
                    >
                </div>
                <div class="form-group">
                    <label for="pricePhone">Precio del celular:</label>
                    <input 
                        type="number"
                        name="pricePhone"
                        class="form-control"
                        autocomplete="off"
                        required=" "
                        value="<?php echo $precio; ?>"
                    >
                </div>
                <div class="form-group">
                    <label for="imagePhone">Imagen del producto:</label>
                    <input 
                        type="file" 
                        name="imagePhone"
                        class="form-control-file"
                        autocomplete="off"
                        required=" "
                        accept="image/*"
                    >
                </div>
                <div class="form-group">
                    <input 
                        type="submit" 
                        value="Guardar cambios"
                        name="saveChanges"
                        class="btn btn-outline-secondary btn-block font-weight-bold mt-3 mb-4"
                    >
                    <a 
                        href="products.php"
                        class="btn btn-outline-danger btn-block font-weight-bold mt-3 mb-4"
                    >
                        Cancelar 
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>