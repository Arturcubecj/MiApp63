<?php
require_once __DIR__ . '/../bd/conexion.php';
class AlumnoDAO {
    public function obtenerTodos() {
        $conexion = new Conexion();
        $conn = $conexion->conectar();
        $sql = "SELECT * FROM alumnos";
        $stmt = $conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function obtenerPorId($id) {
        $conexion = new Conexion();
        $conn = $conexion->conectar();
        $sql = "SELECT * FROM alumnos WHERE Id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function actualizar($data) {
        $conexion = new Conexion();
        $conn = $conexion->conectar();
        $sql = "UPDATE alumnos SET
                    Cedula = :cedula,
                    Nombres = :nombres,
                    Apellidos = :apellidos,
                    Correo = :correo,
                    Telefono = :telefono,
                    FechaNacimiento = :fechaNacimiento
                WHERE Id = :id";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([
            ':cedula' => $data['cedula'],
            ':nombres' => $data['nombres'],
            ':apellidos' => $data['apellidos'],
            ':correo' => $data['correo'],
            ':telefono' => $data['telefono'],
            ':fechaNacimiento' => $data['fechaNacimiento'],
            ':id' => $data['id']
        ]);
    }
    public function eliminar($id) {
        $conexion = new Conexion();
        $conn = $conexion->conectar();
        $sql = "DELETE FROM alumnos WHERE Id = :id";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }
}
