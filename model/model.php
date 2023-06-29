<?php
class Model {
    private $db;

    public function __construct() {$this->db = new PDO('mysql:host=localhost;dbname=exame_java_12', 'root', '');


    }

    public function getDepartamentos() {
        $query = $this->db->query('SELECT * FROM departamentocrear');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardarDepartamento($descripcion, $departamento) {
        $query = $this->db->prepare('INSERT INTO departamentocrear (descripcion, departamento) VALUES (?, ?)');
        $query->execute([$descripcion, $departamento]);
    }

    public function getDepartamento($id) {
        $query = $this->db->prepare('SELECT * FROM departamentocrear WHERE id = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizarDepartamento($id, $descripcion, $departamento) {
        $query = $this->db->prepare('UPDATE departamentocrear SET descripcion = ?, departamento = ? WHERE id = ?');
        $query->execute([$descripcion, $departamento, $id]);
    }

    public function eliminarDepartamento($id) {
        $query = $this->db->prepare('DELETE FROM departamentocrear WHERE id = ?');
        $query->execute([$id]);
    }
    public function confirmarEliminacion($id) {
        // Mostrar mensaje de confirmación en el lado del cliente
        echo '<script>if (confirm("¿Estás seguro de eliminar este registro?")) { document.getElementById("deleteForm").submit(); }</script>';
    }
}
