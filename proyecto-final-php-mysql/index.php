<?php
    include_once('header.php'); // Incluimos un archivo donde esta la libreria de Bootstrap y el componente NAV de toda la página
    include_once('models/conexion.php'); // Incluimos la conexion a la base de datos de donde extraeremos los datos

    // Hacemos una consulta o listado de todos los datos que hay en la BD
    $sentListar = $pdo->prepare('SELECT * FROM celulares');
    $sentListar->execute(); // Ejecutamos la sentencia

    // $extractDates = $sentListar->fetchAll(PDO::FETCH_ASSOC) ;
    // $dataExtract = extract($extractDates);
?>

<div class="container">
    <div class="row">
        <!-- Haremos un blucle en donde hara un recorrido de todos los datos que hay en la BD -->
        <?php if($sentListar->rowCount() > 0) { ?>
            <?php while($telefono = $sentListar->fetch(PDO::FETCH_ASSOC)) { extract($telefono); ?>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                    <div class="card mt-4">
                        <div class="card-header">
                            <!-- Imprimimos en pantalla lo que almacena la variable *telefono* desde su indice marca -->
                            <small class="text-muted text-uppercase"><?php echo $telefono['marca']; ?></small>
                        </div>
                        <div class="card-body">
                            <div class="imagen-card-cel">
                                <img src="imagenes/<?php echo $telefono['imagen']; ?>" alt="" class="card-img-top">
                                <!-- <img src="assets/img/<?php  ?>.jpg" alt="" class="card-img-top"> -->
                            </div>
                            <h5 class="card-title mt-3"><?php echo $telefono['modelo']; ?></h5>
                            <p class="card-text text-muted">S/. <?php echo $telefono['precio']; ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-success btn-block">Añadir al carrito</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <div class="row">
                <div class="alert alert-danger mt-2" role="alert">
                    <h4 class="alert-heading">Oooops!</h4>
                    <p>Actualmente no hay productos en venta pero puedes contactar al equipo de administración para que te pueda brindar más información acerca de lo sucedido o reportar algún problema con los productos, gracias.</p>
                    <hr>
                    <p class="mb-0">Para contactar con administración puedes hacerlo desde acá:</p>
                    <a href="contact/contact.php" class="btn btn-outline-danger font-weight-bold mt-2">Contáctanos</a>
                </div>
            </div>
        <?php }?>
    </div>
</div>

</body>
</html>