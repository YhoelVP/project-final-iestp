<?php
    include_once('header.php'); // Incluimos un archivo donde esta la libreria de Bootstrap y el componente NAV de toda la página
    include_once('../models/conexion.php'); // Incluimos la conexion a la base de datos de donde extraeremos los datos

    // Hacemos una consulta o listado de todos los datos que hay en la BD
    $sentListar = $pdo->prepare('SELECT id, modelo, marca, precio, imagen FROM celulares'); // Ejecutamos la sentencia
    $sentListar->execute();

    // Hacemos una sentencia para eliminar los productos
    $sentDelete = $pdo->prepare('DELETE FROM celulares WHERE id = :uid');
    $sentDelete->bindParam('uid', $_GET['del_id']);
    $sentDelete->execute();
    // header('Location: products.php');
    
?>

<div class="container">
    <div class="row">
        <?php if($sentListar->rowCount() > 0) { ?>
        <!-- Haremos un blucle en donde hara un recorrido de todos los datos que hay en la BD -->
            <?php while($telefono = $sentListar->fetch(PDO::FETCH_ASSOC)) { extract($telefono); ?>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                    <div class="card mt-4">
                        <div class="card-header">
                            <!-- Imprimimos en pantalla lo que almacena la variable *telefono* desde su indice marca -->
                            <small class="text-muted text-uppercase"><?php echo $telefono['marca']; ?></small>
                        </div>
                        <div class="card-body">
                            <div class="imagen-card-cel">
                                <img src="../imagenes/<?php echo $telefono['imagen']; ?>" alt="" class="card-img-top">
                            </div>
                            <h5 class="card-title mt-3"><?php echo $telefono['modelo']; ?></h5>
                            <p class="card-text text-muted">S/. <?php echo $telefono['precio']; ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="editProduct.php?edit=<?php echo $telefono['id']; ?>" class="btn btn-info btn-block">Editar producto</a>
                            <a href="?del_id=<?php echo $telefono['id']; ?>" class="btn btn-danger btn-block">Eliminar producto</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <div class="row">
                <div class="alert alert-danger mt-2" role="alert">
                    <h4 class="alert-heading">No tienes productos en el Stock!!</h4>
                    <p>No tienes productos en el stock y los clientes no están satisfechos con la página, puedes hacer algo al respecto y agregar nuevos productos a la página. Lo puedes hacer desde la opción <b>Agregar productos</b>.</p>
                    <hr>
                    <p class="mb-0">Agrega más productos aquí:</p>
                    <a href="../addProducts/addProducts.php" class="btn btn-outline-danger font-weight-bold mt-2">Agregar nuevos productos</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>