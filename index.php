<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require "./app/views/includes/metatags.php" 
    ?>
</head>
<body>
    <?php
    require "./app/model/crud.class.php";
    $crud = new Crud;
        if (isset($_GET["vista"])) {
            switch ($_GET["vista"]) {
                case 'home':
                    include "./app/views/home.php";
                    break;
                case 'read':
                    $contactos = $crud -> read();
                    include "./app/views/read.php";
                    break;
                case 'create':
                    $roles = $crud->readRol();
                    include "./app/views/create.php";
                    break;
                case 'update':
                    $contacto = $crud->show($_REQUEST["id"]);
                    include "./app/views/update.php";
                    break;
                case 'updateRol':
                    $rol = $crud->showRol($_REQUEST["id"]);
                    include "./app/views/updateRol.php";
                    break;
                case 'createRol':
                    $roles = $crud->readRol();
                    include "./app/views/createRol.php";
                    break;
                default:
                header('Location: ./read');
                    break;
            }
            
        } else {
            header('location: ./home');
        }
   ?>
    <?php 
        require "./app/views/includes/scripts.php" 
    ?>
</body>
</html>