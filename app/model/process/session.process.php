<?php
    session_start();
    $_SESSION['id_user'] = $_POST['id_user'];
    echo $_SESSION['id_user']
?>