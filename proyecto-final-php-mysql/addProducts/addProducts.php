<?php include_once('header.php'); ?>

<div class="container">
    <div class="row mt-2">
        <div class="col-6 m-auto">
            <form action="productsScript.php" method="POST" class="bg-transparent" enctype="multipart/form-data">
                <h2 class="pt-2 text-center text-uppercase">Agrega un nuevo producto</h2>
                <hr>
                <div class="form-group">
                    <label for="modelPhone">Modelo del celular:</label>
                    <input 
                        type="text"
                        name="modelPhone"
                        class="form-control"
                        autocomplete="off"
                        required=" "
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
                        value="Agregar nuevo producto"
                        name="addProduct"
                        class="btn btn-outline-primary btn-block mt-3 mb-4"
                    >
                </div>
                <!-- <button 
                    class="btn btn-outline-primary btn-block mt-3 mb-4" 
                    name="addProduct"
                >
                    Agregar producto
                </button> -->
            </form>
        </div>
    </div>
</div>