<?php
require '../controller/controller.php';

$controller = new Controller();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $controller->eliminar($id);
    header('Location: view.php');
    exit;
} else {
    die('ID de departamento no especificado');
}
