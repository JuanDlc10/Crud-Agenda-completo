<?php 
require "../crud.class.php";
$crud = new Crud();

$crud->sigIn([
    "user" => $_POST["user"],
    "password" => sha1($_POST["password"])
]);

?>