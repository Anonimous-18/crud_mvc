
<?php
require '../controller/controller.php';

$controller = new Controller();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $controller->eliminar($id);
    exit;
?>
<?php

   // header('Location: view.php');
    
} else {
    die('ID de departamento no especificado');
}



