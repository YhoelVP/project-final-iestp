<!DOCTYPE html>
<html lang="es">
<head>
    <title>Compra de celulares</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Estilos de Bootstrap -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

    <!-- Estilos propios -->
    <link rel="stylesheet" href="../assets/styles/main.css">

    <!-- Jquery -->
    <script src="../assets/bootstrap/js/jquery.min.js"></script>
    <!-- Popper.js -->
    <script src="../assets/bootstrap/js/popper.min.js"></script>
    <!-- Bootstrap.js -->
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
            <a class="navbar-brand" href="../index.php">
                    <h3 text-weight-bold>MOVIL TECH</h3>
                </a>
                <button 
                    class="navbar-toggler" 
                    type="button" 
                    data-toggle="collapse" 
                    data-target="#navbarNavAltMarkup" 
                    aria-controls="navbarNavAltMarkup" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link font-weight-bold" href="../index.php">
                            <svg
                                class="mr-1" 
                                width="1em" 
                                height="1em" 
                                viewBox="0 0 16 16" 
                                class="bi bi-house" 
                                fill="currentColor" 
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path 
                                    fill-rule="evenodd" 
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"
                                />
                                <path 
                                    fill-rule="evenodd" 
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"
                                />
                            </svg>
                            Inicio <!-- <span class="sr-only">(current)</span> -->
                        </a>
                        <a class="nav-link font-weight-bold" href="../addProducts/addProducts.php">
                            <svg 
                                width="1em" 
                                height="1em" 
                                viewBox="0 0 16 16" 
                                class="bi bi-folder-plus mr-1" 
                                fill="currentColor" 
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path 
                                    fill-rule="evenodd" 
                                    d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z"
                                />
                                <path 
                                    fill-rule="evenodd" 
                                    d="M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"
                                />
                            </svg>
                            Agregar productos
                        </a>
                        <a class="nav-link font-weight-bold active" href="products.php">
                            <svg
                                class="mr-1"
                                width="1em" 
                                height="1em" 
                                viewBox="0 0 16 16" 
                                class="bi bi-cart2" 
                                fill="currentColor" 
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path 
                                    fill-rule="evenodd" 
                                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"
                                />
                            </svg>
                            Productos
                        </a>
                        <a 
                            class="nav-link font-weight-bold"
                            href="../contact/contact.php"
                        >
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                width="16" height="16" 
                                fill="currentColor" 
                                class="bi bi-menu-down" 
                                viewBox="0 0 16 16"
                            >
                                <path 
                                    fill-rule="evenodd" 
                                    d="M15 11H1v-1h14v1zm0-4H1V6h14v1zM2 12.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5z"
                                />
                                <path 
                                    fill-rule="evenodd" 
                                    d="M15 13V4a1 1 0 0 0-1-1h-3.586A2 2 0 0 1 9 2.414l-1-1-1 1A2 2 0 0 1 5.586 3H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM2 2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-3.586a1 1 0 0 1-.707-.293L8.354.354a.5.5 0 0 0-.708 0L6.293 1.707A1 1 0 0 1 5.586 2H2z"
                                />
                            </svg>
                            Contactanos
                        </a>
                        <a class="nav-link font-weight-bold" href="../aboutUs/aboutUs.php">
                            <svg 
                                width="1em" 
                                height="1em" 
                                viewBox="0 0 16 16" 
                                class="bi bi-info-circle mr-1" 
                                fill="currentColor" 
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path 
                                    fill-rule="evenodd" 
                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"    
                                />
                                <path 
                                    d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"
                                />
                                <circle 
                                    cx="8" 
                                    cy="4.5" 
                                    r="1"
                                />
                            </svg>
                            Acerca de nosotros
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>