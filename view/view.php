<?php
require '../controller/controller.php';

$controller = new Controller();
$departamentos = $controller->getDepartamentos();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Listado de Departamentos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./estilos/view.css">
</head>
<body>
    <div class="container">
        <h1 class="font-weight-bold text-center ">Departamentos
           <div style="color:aqua">
           Anonimous.18
           </div>
    </h1>
        <br><!-- prueba-->
        <br>
        <div class="mi table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descripción</th>
                        <th>Departamento</th>
                        <th>Que quieres hacer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($departamentos as $departamento): ?>
                        <tr>
                            <td><?php echo $departamento['id']; ?></td>
                            <td><?php echo $departamento['descripcion']; ?></td>
                            <td><?php echo $departamento['departamento']; ?></td>
                            <td>
                                
                            <a href="create.php"=<?php echo $departamento['id']; ?> class="mi btn btn-primary">insertar </a>
                                <a href="edit.php?id=<?php echo $departamento['id']; ?>" class="mi btn btn-primary">Editar</a>
                              
                                <a href="delete.php?id=<?php echo $departamento['id']; ?>" class="mi btn btn-danger">Eliminar</a>
                                
                                
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <br>
        <br>
    </div>

</body>
</html>
