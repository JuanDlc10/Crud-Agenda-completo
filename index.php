<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require "./app/views/includes/metatags.php" ;
        session_start();
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
                    if (isset($_SESSION["id_user"])){
                    $contactos = $crud -> read($_SESSION["id_user"]);
                    include "./app/views/read.php";
                }else{
                    header('location: ./home');
                }
                    break;
                case 'create':
                    if (isset($_SESSION["id_user"])){
                    $roles = $crud->readRol();
                    include "./app/views/create.php";
                }else{
                    header('location: ./home');
                }
                    break;
                case 'update':
                    if (isset($_SESSION["id_user"])){
                    $contacto = $crud->show($_REQUEST["id"]);
                    include "./app/views/update.php";
                }else{
                    header('location: ./home');
                }
                    break;
                case 'updateRol':
                    if (isset($_SESSION["id_user"])){
                    $rol = $crud->showRol($_REQUEST["id"]);
                    include "./app/views/updateRol.php";
                }else{
                    header('location: ./home');
                }
                    break;
                case 'createRol':
                    if (isset($_SESSION["id_user"])){
                    $roles = $crud->readRol();
                    include "./app/views/createRol.php";
                }else{
                    header('location: ./home');
                }
                    break;
                case 'logOut';
                    if (isset($_SESSION["id_user"])){
                    include "./app/model/process/logout.process.php";
                    }else{
                        header('location: ./home');
                    }
                    break;
                case 'sigIn';
                    include "./app/views/register.php";
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