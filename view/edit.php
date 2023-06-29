<?php
require '../controller/controller.php';

$controller = new Controller();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $descripcion = $_POST['descripcion'];
    $departamento = $_POST['departamento'];

    $controller->actualizar($id, $descripcion, $departamento);
    header('Location: view.php');
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $departamento = $controller->getDepartamento($id);

    if (!$departamento) {
        die('Departamento no encontrado');
    }
} else {
    die('ID de departamento no especificado');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Departamento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./estilos/view.css">
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-between">
            <h1 class="font-weight-bold h1">Editar Departamento</h1>
            <a href="./view.php" class="font-weight text-muted h1">X</a>
        </div>
        
        <br>
        <br>
        <form method="POST" action="">
            <input type="hidden" name="id" value="<?php echo $departamento['id']; ?>">

            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="mi form-control" name="descripcion" id="descripcion" required><?php echo $departamento['descripcion']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="departamento">Departamento:</label>
                <input type="text" class="mi form-control" name="departamento" id="departamento" value="<?php echo $departamento['departamento']; ?>" required>
            </div>
            <br>
            <button type="submit" class="mi btn btn-primary">Actualizar</button>
        </form>
        <br>
        
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
