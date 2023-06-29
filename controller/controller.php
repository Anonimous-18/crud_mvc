<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exame_java_12";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

require '../model/model.php';

class Controller {
    private $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function getDepartamentos() {
        return $this->model->getDepartamentos();
    }

    public function guardar($descripcion, $departamento) {
        $this->model->guardarDepartamento($descripcion, $departamento);
    }

    public function getDepartamento($id) {
        return $this->model->getDepartamento($id);
    }

    public function actualizar($id, $descripcion, $departamento) {
        $this->model->actualizarDepartamento($id, $descripcion, $departamento);
    }

    public function eliminar($id) {
        $this->model->eliminarDepartamento($id);
    }
    public function confirmarEliminacion($id) {
        echo "
        <script>
            if (confirm('¿Estás seguro de eliminar este registro?')) {
                window.location.href = 'delete.php?id=$id';
            }
        </script>
        ";
    }
}
