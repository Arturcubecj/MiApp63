<?php
require_once __DIR__ . '/../bd/conexion.php';
require_once __DIR__ . '/../modelo/Alumno.php';
class AlumnoDao{
    public function ObtenerTodos(){
        try {
            $conexion= new conexion();
            $conn= $conexion->conectar();
            $sql = " CALL Obtener_alumnos() ";
            $stmt= $conn->query($sql) ;
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en AlumnoModelo->obtenerTodos -". $e->getMessage());
            return false;
        }
    }
}
?>