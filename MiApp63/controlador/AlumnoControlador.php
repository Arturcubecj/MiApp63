<?php
require_once __DIR__ . '/../dao/AlumnoDAO.php';
require_once __DIR__ . '/../modelo/Alumno.php';

class AlumnoControlador {
    public static function obtenerTodos() {
        $dao = new AlumnoDAO();
        return $dao->obtenerTodos();
    }
    public static function obtenerPorId($id){
        $db = Conexion::conectar();
        $sql = "SELECT * FROM alumnos WHERE Id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public static function actualizar($data){
        $db = Conexion::conectar();
        $sql = "UPDATE alumnos 
                SET Cedula = :cedula,
                    Nombres = :nombres,
                    Apellidos = :apellidos,
                    Correo = :correo,
                    Telefono = :telefono,
                    FechaNacimiento = :fechaNacimiento
                WHERE Id = :id";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':cedula', $data['cedula']);
        $stmt->bindParam(':nombres', $data['nombres']);
        $stmt->bindParam(':apellidos', $data['apellidos']);
        $stmt->bindParam(':correo', $data['correo']);
        $stmt->bindParam(':telefono', $data['telefono']);
        $stmt->bindParam(':fechaNacimiento', $data['fechaNacimiento']);
        $stmt->bindParam(':id', $data['id'], PDO::PARAM_INT);
    return $stmt->execute();
}
public static function eliminar($id){
    $db = Conexion::conectar();
    $sql = "DELETE FROM alumnos WHERE Id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    return $stmt->execute();
}

}