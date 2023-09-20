<?php 
    require "../crud.class.php";
    $crud = new Crud();

    $crud->updateRol([
        "id" => $_POST["id"],
        "rol" => $_POST["rol"],
    ]);
?>