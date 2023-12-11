<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Inicio</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">

    <link rel="stylesheet" href="/public/css/estilo.css"> <!-- Asegúrate de tener este archivo CSS -->
    <script src="/public/js/codigo.js"></script>

    <?php
        require_once './app/views/home.php';
        require_once './app/models/UserModel.php';
        require_once './app/controllers/UserController.php';
        require_once './app/models/ProductModel.php';
        require_once './app/controllers/ProductController.php';
        require_once './app/models/SupplierModel.php';
        require_once './app/controllers/SupplierController.php';
    ?>

</head>
<body class="bg-secondary">
    <div class="container">
        
        <header>
            <h1>Bienvenido a Nuestra Aplicación</h1>
            <nav>
                <ul>
                    <li><a href=".">Ver Usuarios</a></li>
                    <!-- Más enlaces de navegación según sea necesario -->
                </ul>
                <ul>
                    <li><a href="./index.php?url=product/index">Ver Productos</a></li>
                    <!-- Más enlaces de navegación según sea necesario -->
                </ul>
                <ul>
                    <li><a href="./index.php?url=supplier/index">Ver Suplidores</a></li>
                </ul>
            </nav>
        </header>
    
        <main>
            <section>
                <div>
                    <?php 
                        if (isset($data)) // if Data exist
                        {
                            if (isset($data['message'])) {
                                echo '<div class="alert alert-warning">';
                                echo $data['message'];
                                echo '</div>';
                            }
                            require_once $data['view'];
                        }
                        else {
                            $userController = new UserController();
                            $data = $userController->listUsers();
                            require 'user/list.php';
                        }
                    ?>
                </div>
            </section>
            <section class='mt-5'>
                <h5>Descripción de la Aplicación</h5>
                <p>Esta es una aplicación web desarrollada en PHP siguiendo el patrón de diseño MVC.</p>
                <!-- Agrega más contenido relevante aquí -->
            </section>
            
        </main>
    
        <footer>
            <p>&copy; 2023 Benyahir Y. Martínez Hermina</p>
        </footer>

    </div>
</body>
</html>