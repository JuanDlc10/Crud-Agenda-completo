<?php
require "../crud.class.php";
$crud = new Crud();
    $crud->logIn([
    "user" => $_POST["user"],
    "password" => sha1($_POST["password"])
]);
?>